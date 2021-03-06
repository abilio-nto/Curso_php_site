<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="titulo">Cadastro</div>

<h2>cadastro</h2>
<?php
error_reporting(0);


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
        require_once("conexao.php");
         
        $sql = "INSERT INTO cadastro (nome,nascimento,email,site,filhos,salario) VALUES (?, ?, ?, ?, ?, ?)";
        $conexao = novaConexao();
        $stmt = $conexao->prepare($sql);

         $param = [
             $dados['nome'],
             $data ? $data->format("Y-m-d") : null,
             $dados['email'],
             $dados['site'],
             $dados['qtdFilhos'],
             $dados['salario'],
         ];
       
        $stmt->bind_param("ssssid",...$param);
        // $stmt->execute();
       if($stmt->execute()){
          
             unset($dados);
         }else{
        echo 'erro: '. $conexao->error;
       }

       
    }
}
?>
<form action="#" method="post">
   
   <div class="form-row" >
     <div class="form-group col-md-9">
       <label for="nome">Nome</label>
       <input type="text" class="form-control <?= $erros['nome']? 'is-invalid': ''?>" id="nome" name="nome" placeholder="Nome" value="<?php $dados['nome'] ?>">
       <div class="invalid=feedback"><?= $erros['nome']?></div>
     </div>
     <div class="form-group col-md-3">
       <label for="nascimento">Nascimento</label>
       <input type="text" class="form-control <?= $erros['nascimento']? 'is-invalid': ''?>" id="nascimento" name="nascimento" placeholder="Nascimento"  value="<?php $dados['nascimento']?>">
       <div class="invalid=feedback"><?= $erros['nascimento']?></div>
     </div>
   </div>
   <div class="form-row" >
     <div class="form-group col-md-6">
       <label for="email">Email</label>
       <input type="text" class="form-control <?= $erros['email']? 'is-invalid': ''?>" id="email" name="email" placeholder="Email"  value="<?php $dados['email']?>">
       <div class="invalid=feedback"><?= $erros['email']?></div>
     </div>
     <div class="form-group col-md-6">
       <label for="site">site</label>
       <input type="text" class="form-control <?= $erros['site']? 'is-invalid': ''?>" id="site" name="site" placeholder="Site"  value="<?php $dados['site']?>">
       <div class="invalid=feedback"><?= $erros['site']?></div>
     </div>
   </div>
   <div class="form-row" >
     <div class="form-group col-md-6">
       <label for="qtdFilhos">Qtd Filhos</label>
       <input type="number" class="form-control <?= $erros['qtdFilhos']? 'is-invalid': ''?>" id="qtdFilhos" name="qtdFilhos" placeholder="qtd-Filhos"  value="<?php $dados['qtdFilhos']?>">
       <div class="invalid=feedback"><?= $erros['qtdFilhos']?></div>
     </div>
     <div class="form-group col-md-6">
       <label for="salario">Salario</label>
       <input type="text" class="form-control <?= $erros['salario']? 'is-invalid': ''?>" id="salario" name="salario" placeholder="salario"  value="<?php $dados['salario']?>">
       <div class="invalid=feedback"><?= $erros['salario']?></div>
     </div>
   </div>
  
  <button class="btn btn-primary btn-lg">Enviar</button>

</form>