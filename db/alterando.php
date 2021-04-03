<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="titulo">Alterando</div>
<?php
error_reporting(0);

require_once("conexao.php");
$conexao = novaConexao();

if($_GET['codigo']){
    $sql = "SELECT * FROM cadastro WHERE id=?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i",$_GET['codigo']);
    if($stmt->execute()){
        $resultado= $stmt->get_result();
        if($resultado->num_rows>0){
            GLOBAL $dados;
            $dados = $resultado->fetch_assoc();
           
            if($dados['nascimento']){
                $dt = new DateTime($dados['nascimento']);
                $dados['nascimento'] = $dt->format('d/m/y');
            }
            if($dados['salario']){
                $dados['salario'] = str_replace(".",",",$dados['salario']);
            }
        }
        
    }
}

if(count($_POST) > 0){
    $dados = $_POST;
    $erros = [];
    
    if(trim(($dados['nome'])=== "")){
        $erros['nome'] = "Nome é obrigadorio";
    }
    if(isset($dados['nascimento'])){
        $data = DateTime::createFromFormat('d/m/Y',$dados['nascimento']);
        if(!$data){
            $erros['nascimento'] = "Data deve estar no padrão dd/mm/aaaa";
        }
    }
    if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)){
        $erros['email']="email inválido";
    }

    if(!filter_var($dados['site'],FILTER_VALIDATE_URL)){
        $erros['site']="Site inválido";
    }
    $filhosCOnfig = [
        "Options"=>["min_range"=>0, "max_ranger"=>20]
    ];
    if(!filter_var($dados['qtdFilhos'],FILTER_VALIDATE_INT,$filhosCOnfig && $dados['qtdFilhos']!=0)){
        $erros['qtdFilhos']="Quantidade de filhos inválido";
    }
    $salarioCOnig = [
        "Options"=>["Decimal"=>","]
    ];
    if(!filter_var($dados['salario'], FILTER_VALIDATE_FLOAT,$salarioCOnig)){
        $erros['salario']="Salario inválido";
    }

    if(!count($erros)){
      
        $sql = "UPDATE  cadastro SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ? WHERE id = ?";
        
        $stmt = $conexao->prepare($sql);

         $param = [
             $dados['nome'],
             $data ? $data->format("Y-m-d") : null,
             $dados['email'],
             $dados['site'],
             $dados['qtdFilhos'],
             $dados['salario'] ? str_replace(".",",",$dados['salario']) : null ,
             $dados['id']
         ];
       
        $stmt->bind_param("ssssidi",...$param);
        // $stmt->execute();
       if($stmt->execute()){
          echo"Dados alterados com sucesso";
             unset($dados);
         }else{
            echo"Erro";
        echo 'erro: '. $conexao->error;
       }

       
    }
}
?>
 <form action="exercicio.php" method="get" class="form-inline justify-content-end"">
     <input type="hidden" name="dir" value="db">
     <input type="hidden" name="file" value="alterando">
    <input class="form-control mr-sm-2" name="codigo"type="search" placeholder="Pesquisar" aria-label="Pesquisar">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
  </form>
<form action="" method="post">
<input type="hidden" name="id" value="<?= $dados['id'];?>">
   <div class="form-row" >
     <div class="form-group col-md-9">
       <label for="nome">Nome</label>
       <input type="text" class="form-control <?= $erros['nome']? 'is-invalid': ''?>" id="nome" name="nome" placeholder="Nome" value="<?= $dados['nome'];?>">
       <div class="invalid=feedback"><?= $erros['nome']?></div>
     </div>
     <div class="form-group col-md-3">
       <label for="nascimento">Nascimento</label>
       <input type="text" class="form-control <?= $erros['nascimento']? 'is-invalid': ''?>" id="nascimento" name="nascimento" placeholder="Nascimento"  value="<?= $dados['nascimento']?>">
       <div class="invalid=feedback"><?= $erros['nascimento']?></div>
     </div>
   </div>
   <div class="form-row" >
     <div class="form-group col-md-6">
       <label for="email">Email</label>
       <input type="text" class="form-control <?= $erros['email']? 'is-invalid': ''?>" id="email" name="email" placeholder="Email"  value="<?= $dados['email']?>">
       <div class="invalid=feedback"><?= $erros['email']?></div>
     </div>
     <div class="form-group col-md-6">
       <label for="site">site</label>
       <input type="text" class="form-control <?= $erros['site']? 'is-invalid': ''?>" id="site" name="site" placeholder="Site"  value="<?= $dados['site']?>">
       <div class="invalid=feedback"><?= $erros['site']?></div>
     </div>
   </div>
   <div class="form-row" >
     <div class="form-group col-md-6">
       <label for="qtdFilhos">Qtd Filhos</label>
       <input type="number" class="form-control <?= $erros['qtdFilhos']? 'is-invalid': ''?>" id="qtdFilhos" name="qtdFilhos" placeholder="qtd-Filhos"  value="<?= $dados['qtdFilhos']?>">
       <div class="invalid=feedback"><?= $erros['qtdFilhos']?></div>
     </div>
     <div class="form-group col-md-6">
       <label for="salario">Salario</label>
       <input type="text" class="form-control <?= $erros['salario']? 'is-invalid': ''?>" id="salario" name="salario" placeholder="salario"  value="<?= $dados['salario']?>">
       <div class="invalid=feedback"><?= $erros['salario']?></div>
     </div>
   </div>
  
  <button class="btn btn-primary btn-lg">Alterar</button>

</form>