<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="titulo">Cadastro</div>

<h2>cadastro</h2>
<?php
error_reporting(0);

$erros = [];
if(count($_POST) > 0){
    if(!filter_input(INPUT_POST,"nome")){
        $erros['nome'] = "Nome é obrigadorio";
    }
    if(filter_input(INPUT_POST,"nascimento")){
        $data = DateTime::createFromFormat('d/m/y',$_POST['nascimento']);
        if(!$data){
            $erros['nascimento'] = "Data deve estar no padrão dd/mm/aaaa";
        }
    }
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $erros['email']="email inválido";
    }

    if(!filter_var($_POST['site'],FILTER_VALIDATE_URL)){
        $erros['site']="Site inválido";
    }
    $filhosCOnfig = [
        "Options"=>["min_range"=>0, "max_ranger"=>20]
    ];
    if(!filter_var($_POST['qtdFilhos'],FILTER_VALIDATE_INT,$filhosCOnfig && $_POST['qtdFilhos']!=0)){
        $erros['qtdFilhos']="Quantidade de filhos inválido";
    }
    $salarioCOnig = [
        "Options"=>["Decimal"=>","]
    ];
    if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT,$salarioCOnig)){
        $erros['salario']="Salario inválido";
    }
}
?>
<form action="#" method="post">
   
   <div class="form-row" >
     <div class="form-group col-md-9">
       <label for="nome">Nome</label>
       <input type="text" class="form-control <?= $erros['nome']? 'is-invalid': ''?>" id="nome" name="nome" placeholder="Nome" value="<?php $_POST['nome'] ?>">
       <div class="invalid=feedback"><?= $erros['nome']?></div>
     </div>
     <div class="form-group col-md-3">
       <label for="nascimento">Nascimento</label>
       <input type="text" class="form-control <?= $erros['nascimento']? 'is-invalid': ''?>" id="nascimento" name="nascimento" placeholder="Nascimento"  value="<?php $_POST['nascimento']?>">
       <div class="invalid=feedback"><?= $erros['nascimento']?></div>
     </div>
   </div>
   <div class="form-row" >
     <div class="form-group col-md-6">
       <label for="email">Email</label>
       <input type="text" class="form-control <?= $erros['email']? 'is-invalid': ''?>" id="email" name="email" placeholder="Email"  value="<?php $_POST['email']?>">
       <div class="invalid=feedback"><?= $erros['email']?></div>
     </div>
     <div class="form-group col-md-6">
       <label for="site">site</label>
       <input type="text" class="form-control <?= $erros['site']? 'is-invalid': ''?>" id="site" name="site" placeholder="Site"  value="<?php $_POST['site']?>">
       <div class="invalid=feedback"><?= $erros['site']?></div>
     </div>
   </div>
   <div class="form-row" >
     <div class="form-group col-md-6">
       <label for="qtdFilhos">Qtd Filhos</label>
       <input type="number" class="form-control <?= $erros['qtdFilhos']? 'is-invalid': ''?>" id="qtdFilhos" name="qtdFilhos" placeholder="qtd-Filhos"  value="<?php $_POST['qtdFilhos']?>">
       <div class="invalid=feedback"><?= $erros['qtdFilhos']?></div>
     </div>
     <div class="form-group col-md-6">
       <label for="salario">Salario</label>
       <input type="text" class="form-control <?= $erros['salario']? 'is-invalid': ''?>" id="salario" name="salario" placeholder="salario"  value="<?php $_POST['salario']?>">
       <div class="invalid=feedback"><?= $erros['salario']?></div>
     </div>
   </div>
  
  <button class="btn btn-primary btn-lg">Enviar</button>

</form>