<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Pré-Cadastro</title>
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
		            	<h2 style="margin-top:15px; color: #084B8A"><strong>Cadastro - Novo Usuário</h2></strong>
		            </center>
		        </div>

       		</div>
 		</div>  
    </section>

    <section class="container"> <!-- Início Home -->
     	<div id="caixaConteudo" class="container align-self-center">
			<div style="padding: 10px">
				<div style="padding: 5px">
					<div class="form-row">
						<div class="form-group col-md-4">
							<center>
								<i class="fas fa-user-circle fa-2x "></i>
							</center>
						</div>

						<div class="form-group col-md-8">
							<center>
								<h3>Informe seus dados!</h3>
							</center>	
						</div>
					</div>
				</div>

				<form action="_inserir_cadastro.php" method="post">
					<div class="form-row">
						
						<div class="form-group col-md-8">
					      <label>Informe seu nome completo:</label>
					      <input  style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="nome" placeholder="Digite seu nome" autocomplete="off" required>
					    </div>
					    
					    <div class="form-group col-md-4">
					      <label>Informe seu C.P.F.:</label>
					      <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="cpf" placeholder="Digite seu C.P.F." autocomplete="off" required oninput="mascara(this, 'cpf')">
					    </div>
					</div>

					<div class="form-row">
						
						<div class="form-group col-md-12">
					      <label>Digite seu e-mail:</label>
					      <input  style="margin-top: -7px;" type="email" class="form-control form-control-sm" name="email" placeholder="Seu e-mail" autocomplete="off" required>
					    </div>
					    
					</div>

					<div class="form-row">
						
						<div class="form-group col-md-6">
					      <label>Digite uma senha:</label>
					      <input  style="margin-top: -7px;" type="password" class="form-control form-control-sm" name="senha" placeholder="Digite a senha" autocomplete="off" required>
					    </div>
					    
					    <div class="form-group col-md-6">
					      <label>Confirme sua senha:</label>
					      <input style="margin-top: -7px;" type="password" class="form-control form-control-sm" name="senha2" placeholder="Repita a senha" autocomplete="off" required>
					    </div>
					</div>

					<?php if(isset($_SESSION['login']) && $_SESSION['login'] == 'erro1') { ?>

		                <div class="alert alert-danger" role="alert">
		                  <div class="text-danger"><strong>As Senhas digitadas não conferem!</strong></div> 
		                </div>

	                <?php } ?>

	                <?php if(isset($_SESSION['login']) && $_SESSION['login'] == 'cpf') { ?>
	                	
	                	<a href="login.php">
			                <div class="alert alert-warning text-warning" role="alert">
			                	 <div class="text-warning"><strong>C.P.F. já cadastrado! Faça o login.</strong></div>
			                </div>
			            </a>

	                <?php } ?>

					

					<div style="text-align: right; margin-top: 10px">
						<a href="login.php" class="btn btn-primary">Voltar</a>
						<button type="submit" class="btn btn-success"> Enviar </button>
					</div>
					

				</form>
			</div>	
		</div>
	</section>


		

		
	<footer class="fixed-bottom" style=" background-color: #E6E6E6;">
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