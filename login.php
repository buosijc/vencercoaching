<?php
	session_start();
	
	$_SESSION['autenticado'] = 'não';

?>

<!DOCTYPE html>
<html>
<head>
	<!--Inicio Tags OG -->
	
	<meta property="og:url"                content="" />
	<meta property="og:type"               content="article" />
	<meta property="og:title"              content="Vencer! Coaching - Cadastro de Currículos" />
	<meta property="og:description"        content="Acesse no site e cadastre seu currículo." />
	<meta property="og:image"              content="https://vencercoaching.f9sistemas.com.br/img/tag_og.png" />
	
	
	<!--Fim Tags OG -->

	<!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Login - Cadastro de Currículo</title>
    <link rel="icon" href="img/vencer.ico">
  
	

</head>
<body>

	<section class="container"> <!-- Início Home -->
     	<div id="caixaTopo" class="container align-self-center">
        	<div class="row">
    			
    			<div class="col-md-4">
		          	<center>
		            	<img style="padding: 5px;" src="img/logo_vencer.png" width="185px" class="img-fluid">
		            </center>
		        </div>

		        <div class="col-md-8">
		          	<center>
		            	<h2 style="margin-top:15px; color: #084B8A"><strong>Login - Cadastro de Currículo</h2></strong>
		            </center>
		        </div>

       		</div>
 		</div>  
    </section>
	
	
	<section class="container"> <!-- Início Home -->
     	<div id="caixaConteudo" class="container align-self-center">
			<div style="padding: 10px">
              		
              	<form action="valida_login.php" method="post">
                		
            		<div class="form-group">
            			<label>Digite seu C.P.F.:</label>
              			<input name="cpf" type="text" class="form-control" placeholder="Digite seu C.P.F." autocomplete="off" required oninput="mascara(this, 'cpf')">
            		</div>
            		
            		<div class="form-group">
            			<label>Digite sua senha:</label>
             			<input name="senha" type="password" class="form-control" placeholder="Senha">
            		</div>

					<?php if(isset($_SESSION['login']) && $_SESSION['login'] == 'erro2') {?>

		                <div class="alert alert-danger" role="alert">
		                  Entre com seu usuário e senha para acessar seu cadastro!
		                </div>

	                <?php } ?>


	                <?php if(isset($_SESSION['login']) && $_SESSION['login'] == 'erro3') {?>

		                <div class="alert alert-danger" role="alert">
		                	 Usuário e/ou senha inválido. Verifique!
		                </div>

	                <?php } ?>            		

            		<a style="margin-top: -10px; float: right;" href="recuperar_senha.php"><small>Esqueci minha senha</small> </a>

            		<br>
            		<hr>
            		

            		<div class="row">
						<div class="form-group col-md-6">
	                		<a href="pre_cadastro.php" style="margin-top: -10px; float: right;" class="btn btn-sm btn-primary btn-block" type="submit">Cadastar</a>
	                	</div>

	                	<div class="form-group col-md-6">
	                		<button style="margin-top: -10px; float: right;" class="btn btn-sm btn-success btn-block" type="submit">Entrar</button>
	                	</div>
	                </div>                		

                </form>
            </div>
        </div>
    </section>         
		

		
	<footer style=" background-color: #E6E6E6;">
      <div class="container">
        <div class="row">
          
          <div class="col-md-8">
            <small>
            	<img style="width: 19px; margin-bottom: 2px;" src="img/vencer.ico"> VENCER! Coaching | 2021 Copyright VENCER! COACHING ®
            </small>
          </div>

          <div class="col-md-4">
            <small>
              Projeto Integrador I - Univesp - 2021 
            </small>
          </div>
       </div>
    </div>	


	<!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
	<script>
		function mascara(i,t){

		   var v = i.value;

		   if(isNaN(v[v.length-1])){
		      i.value = v.substring(0, v.length-1);
		      return;
		   }

		   if(t == "data"){
		      i.setAttribute("maxlength", "10");
		      if (v.length == 2 || v.length == 5) i.value += "/";
		   }

		   if(t == "cpf"){
		      i.setAttribute("maxlength", "14");
		      if (v.length == 3 || v.length == 7) i.value += ".";
		      if (v.length == 11) i.value += "-";
		   }

		   if(t == "tel"){
		      i.setAttribute("maxlength", "14");
		      if (v.length == 2) i.value = ( '(' + i.value + ") ");
		      if (v.length == 9) i.value += "-";
		   }

		   if(t == "cel"){
		      i.setAttribute("maxlength", "15");
		      if (v.length == 2) i.value = ( '(' + i.value + ") ");
		      if (v.length == 10) i.value += "-";
		   }

		   if(t == "cnpj"){
		      i.setAttribute("maxlength", "18");
		      if (v.length == 2 || v.length == 6) i.value += ".";
		      if (v.length == 10) i.value += "/";
		      if (v.length == 15) i.value += "-";
		   }
		}

		$(function () {
  			$('[data-toggle="tooltip"]').tooltip()
		})

	</script>




</body>
</html>