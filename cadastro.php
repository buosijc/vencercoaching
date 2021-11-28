<?php
	
	session_start();

	if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'sim'){
    	$_SESSION['login'] = 'erro2';
    	header('Location: login.php');
  	} else {
  		
  		include 'conexao.php';

  		mysqli_set_charset($conexao, 'utf8');

  		$id = $_SESSION['id'];

  		$sql = "SELECT * FROM curriculos WHERE id_candidato = $id ";
		$buscar = mysqli_query($conexao,$sql);
		
		while ($array = mysqli_fetch_array($buscar)) {
		   		$id_candidato = $array['id_candidato'];
		   		$data_cadastro = $array['data_cadastro'];
				$cpf = $array['cpf'];
				$senha = $array['senha'];
				$nome = $array['nome'];
				$nomes = $array['nomesocial'];
				$datanasc = $array['data_nascimento'];
				//$datanasc = date("d/m/Y",strtotime(str_replace('-','/',$datanasc)));
				$estadocivil = $array['estado_civil'];
				$dependentes = $array['dependentes'];
				$endereco = $array['endereco'];
				$numero = $array['numero'];
				$bairro = $array['bairro'];
				$cidade = $array['cidade'];
				$estado = $array['estado'];
				$telefone = $array['telefone'];
				$celular = $array['celular'];
				$email = $array['email'];
				$sexo = $array['sexo'];
				$facebook = $array['facebook'];
				$instagram = $array['instagram'];
				$cnh = $array['cnh'];
				$categoria = $array['categoria'];
				$moto = $array['moto'];
				$fuma = $array['fuma'];
				$ensinof = $array['ensinof'];
				$ensinom = $array['ensinom'];
				$tecnico1 = $array['tecnico1'];
				$tecnico1Qual = $array['tecnico1Qual'];
				$tecnico2 = $array['tecnico2'];
				$tecnico2Qual = $array['tecnico2Qual'];
				$tecnico3 = $array['tecnico3'];
				$tecnico3Qual = $array['tecnico3Qual'];
				$superior1 = $array['superior1'];
				$superior1Qual = $array['superior1Qual'];
				$superior2 = $array['superior2'];
				$superior2Qual = $array['superior2Qual'];
				$posGraduacao = $array['posGraduacao'];
				$posGraduacaoQual = $array['posGraduacaoQual'];
				$mestrado = $array['mestrado'];
				$mestradoQual = $array['mestradoQual'];
				$doutorado = $array['doutorado'];
				$doutoradoQual = $array['doutoradoQual'];
				$outraGraduacao = $array['outraGraduacao'];
				$outraQuais = $array['outraQuais'];
				$word = $array['word'];
				$word_nivel = $array['word_nivel'];
				$excel = $array['excel'];
				$excel_nivel = $array['excel_nivel'];
				$powerpoint = $array['powerpoint'];
				$powerpoint_nivel = $array['powerpoint_nivel'];
				$marketing = $array['marketing'];
				$marketing_nivel = $array['marketing_nivel'];
				$coreldraw = $array['coreldraw'];
				$coreldraw_nivel = $array['coreldraw_nivel'];
				$photoshop = $array['photoshop'];
				$photoshop_nivel = $array['photoshop_nivel'];
				$sites = $array['sites'];
				$sites_nivel = $array['sites_nivel'];
				$programacao = $array['programacao'];
				$programacao_nivel = $array['programacao_nivel'];
				$cincoS = $array['cincoS'];
				$cincoS_nivel = $array['cincoS_nivel'];
				$pop = $array['pop'];
				$pop_nivel = $array['pop_nivel'];
				$fluxograma = $array['fluxograma'];
				$fluxograma_nivel = $array['fluxograma_nivel'];
				$pdca = $array['pdca'];
				$pdca_nivel = $array['pdca_nivel'];
				$cincoW2h = $array['cincoW2h'];
				$cincoW2h_nivel = $array['cincoW2h_nivel'];
				$qualidadeTotal = $array['qualidadeTotal'];
				$qualidadeTotal_nivel = $array['qualidadeTotal_nivel'];
				$ingles = $array['ingles'];
				$ingles_nivel = $array['ingles_nivel'];
				$outrasHabilidades = $array['outrasHabilidades'];
				$outrasHabilidades_nivel = $array['outrasHabilidades_nivel'];
				$outrasHabilidadesQuais = $array['outrasHabilidadesQuais'];
				$outrasLinguas = $array['outrasLinguas'];
				$outrasLinguas_nivel = $array['outrasLinguas_nivel'];
				$outrasLinguasQuais = $array['outrasLinguasQuais'];
				$empresa1 = $array['empresa1'];
				$dataAd1 = $array['dataAD1'];
				$dataDem1 = $array['dataDem1'];
				$funcao1 = $array['funcao1'];
				$motivo1 = $array['motivo1'];
				$contato1 = $array['contato1'];
				$telefoneContato1 = $array['telefoneContato1'];
				$empresa2 = $array['empresa2'];
				$dataAd2 = $array['dataAD2'];
				$dataDem2 = $array['dataDem2'];
				$funcao2 = $array['funcao2'];
				$motivo2 = $array['motivo2'];
				$contato2 = $array['contato2'];
				$telefoneContato2 = $array['telefoneContato2'];
				$empresa3 = $array['empresa3'];
				$dataAd3 = $array['dataAD3'];
				$dataDem3 = $array['dataDem3'];
				$funcao3 = $array['funcao3'];
				$motivo3 = $array['motivo3'];
				$contato3 = $array['contato3'];
				$telefoneContato3 = $array['telefoneContato3'];
				$alergias = $array['alergias'];
				$limitacoes = $array['limitacoes'];
				$pessoais = $array['pessoais'];
				$especiais = $array['especiais'];
				$trabalhoEquipe = $array['trabalhoEquipe'];
				$funcaoLider = $array['funcaoLider'];
				$infoComplementar = $array['infoComplementar'];
				$viajar = $array['viajar'];
				$prof = $array['prof'];
				$prof_outros = $array['prof_outros'];
				$foto = $array['foto'];
		   	}
	}


?>


<!DOCTYPE html>
<html>
<head>
	<!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <script src="js/jquery.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Cadastro de Currículo</title>
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
		            	<h2 style="margin-top:15px; color: #084B8A"><strong>Cadastro de Currículo</h2></strong>
		            </center>
		        </div>

       		</div>
 		</div>  
    </section>

    <?php if(isset($_GET['salvar']) && $_GET['salvar'] == 'ok') {?>

	    <section style="margin-top: 20px; " class="container">
	    	<div class="row">
	    		<div class="col-md-12">

	    			<div class="alert alert-success alert-dismissible fade show" role="alert">
						<center><h4>Currículo salvo com sucesso!</h4></center>
					  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    	<span aria-hidden="true">&times;</span>
					  	</button>
					</div>
				</div>
			</div>
		</section> 

	<?php } ?>

    <section class="container"> <!-- Início Home -->
     	<div id="caixaCurriculo" class="container align-self-center">
			<form enctype="multipart/form-data" action="_editar_cadastro.php" method="post">
				
				<h4 class="titulo">1 - Identificação: </h4>

				<div style="float: left;" class="mr-1 ml-1 mt-4"> 
	             	<label class="label_file btn btn-transparent btn-sm" for='img_perfil'>
	                <center>
	                	<?php
	                	if(empty($foto)) { ?>
	                		<img class="imgperfil" width="90px" height="125px" id="output" src="img/semfoto.gif">
	                	<?php } else { ?>
	                		<img class="imgperfil" width="90px" height="125px" id="output" src="ver_arquivo.php?id=<?php echo $id ?>">
	                	<?php } ?>	
	                </center>
	            	</label>
	              <input id="img_perfil" type="file" name="img_perfil" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
	              <p align="center">Foto Perfil</p>
	            </div>
		         

				<div class="form-row">
					<div class="form-group col-md-6">
				      <label>Nome Completo:</label>
				      <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="nome" placeholder="Digite seu nome" autocomplete="off" required value="<?php echo $nome ?>">
				    </div>
				    
				    <div class="form-group col-md-4">
				      <label>Nome Social:</label>
				      <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="nomes" placeholder="Digite seu apelido ou nome social" autocomplete="off" required value="<?php echo $nomes ?>">
				    </div>

				    <div class="form-group col-md-2">
				      <label>C.P.F.:</label>
				      <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="cpf" placeholder="Digite seu C.P.F." autocomplete="off" value="<?php echo $cpf ?>" required  oninput="mascara(this, 'cpf')">
				    </div>
				</div>

				<div class="form-row">
				    <div class="form-group col-md-4">
				      <label>Data Nascimento:</label>
				      <input style="margin-top: -7px;" type="date" class="form-control form-control-sm" name="datanasc" autocomplete="off" required value="<?php echo $datanasc ?>">
				    </div>
				    
				    <div class="form-group col-md-4">
				    	<label>Estado Civil:</label>
				        	<select style="margin-top: -7px;" class="form-control form-control-sm" name="estadocivil" required >
								<option></option>
								<option value='SOLTEIRO' <?php if ($estadocivil == 'SOLTEIRO') echo "selected"; echo '' ?> >SOLTEIRO</option>
								<option value='CASADO' <?php if ($estadocivil == 'CASADO') echo "selected"; echo '' ?> >CASADO</option>
								<option value='SEPARADO' <?php if ($estadocivil == 'SEPARADO') echo "selected"; echo '' ?> >SEPARADO</option>
								<option value='DIVORCIADO' <?php if ($estadocivil == 'DIVORCIADO') echo "selected"; echo '' ?> >DIVORCIADO</option>
								<option value='VIÚVO' <?php if ($estadocivil == 'VIÚVO') echo "selected"; echo '' ?> >VIÚVO</option>
								<option value='UNIÃO ESTÁVEL' <?php if ($estadocivil == 'UNIÃO ESTÁVEl') echo "selected"; echo '' ?> >UNIÃO ESTÁVEL</option>
					  		</select>
				    </div>

				    	<div class="form-group col-md-4">
				      		<label>Filho/Dependentes:</label>
				      		<input style="margin-top: -7px;" type="number" class="form-control form-control-sm" name="dependentes" placeholder="Dependentes" autocomplete="off" required value="<?php echo $dependentes ?>">
				    	</div>
				</div>


				<div class="form-row">
				    
				    <div class="form-group col-md-10">
				      <label>Endereço:</label>
				      <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="endereco" placeholder="Digite seu Endereço" autocomplete="off" required value="<?php echo $endereco ?>">
				    </div>
				    
				    <div class="form-group col-md-2">
				      <label>Número:</label>
				      <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="numero" autocomplete="off" required value="<?php echo $numero ?>">
				    </div>				    

				</div>

				<div class="form-row">
				    <div class="form-group col-md-3">
				      <label>Bairro:</label>
				      <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="bairro" placeholder="Digite seu bairro" autocomplete="off" required value="<?php echo $bairro ?>">
				    </div>

				    <div class="form-group col-md-6">
				      <label>Cidade:</label>
				      <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="cidade" placeholder="Digite sua cidade" autocomplete="off" required value="<?php echo $cidade ?>">
				    </div>
				    
				    <div class="form-group col-md-3">
				      <label>Estado:</label>
				      <select style="margin-top: -7px;" class="form-control form-control-sm" name="estado" required>
							<option></option>
							<option value=AC <?php if ($estado == 'AC') echo "selected"; echo '' ?> >AC</options>
							<option value=AL <?php  if ($estado == 'AL') echo "selected"; echo '' ?> >AL</options>
							<option value=AP <?php if ($estado == 'AP') echo "selected"; echo '' ?> >AP</options>
							<option value=AM <?php if ($estado == 'AM') echo "selected"; echo '' ?> >AM</options>
							<option value=BA <?php if ($estado == 'BA') echo "selected"; echo '' ?> >BA</options>
							<option value=CE <?php if ($estado == 'CE') echo "selected"; echo '' ?> >CE</options>
							<option value=DF <?php if ($estado == 'DF') echo "selected"; echo '' ?> >DF</options>
							<option value=ES <?php if ($estado == 'ES') echo "selected"; echo '' ?> >ES</options>
							<option value=GO <?php if ($estado == 'GO') echo "selected"; echo '' ?> >GO</options>
							<option value=MA <?php if ($estado == 'MA') echo "selected"; echo '' ?> >MA</options>
							<option value=MT <?php if ($estado == 'MT') echo "selected"; echo '' ?> >MT</options>
							<option value=MS <?php if ($estado == 'MS') echo "selected"; echo '' ?> >MS</options>
							<option value=MG <?php if ($estado == 'MG') echo "selected"; echo '' ?> >MG</options>
							<option value=PA <?php if ($estado == 'PA') echo "selected"; echo '' ?> >PA</options>
							<option value=PB <?php if ($estado == 'PB') echo "selected"; echo '' ?> >PB</options>
							<option value=PB <?php if ($estado == 'PB') echo "selected"; echo '' ?> >PR</options>
							<option value=PE <?php if ($estado == 'PE') echo "selected"; echo '' ?> >PE</options>
							<option value=PI <?php if ($estado == 'PI') echo "selected"; echo '' ?> >PI</options>
							<option value=RJ <?php if ($estado == 'RJ') echo "selected"; echo '' ?> >RJ</options>
							<option value=RN <?php if ($estado == 'RN') echo "selected"; echo '' ?> >RN</options>
							<option value=RS <?php if ($estado == 'RS') echo "selected"; echo '' ?> >RS</options>
							<option value=RO <?php if ($estado == 'RO') echo "selected"; echo '' ?> >RO</options>
							<option value=RR <?php if ($estado == 'RR') echo "selected"; echo '' ?> >RR</options>
							<option value=SC <?php if ($estado == 'SC') echo "selected"; echo '' ?> >SC</options>
							<option value=SP <?php if ($estado == 'SP') echo "selected"; echo '' ?> >SP</options>
							<option value=SE <?php if ($estado == 'SE') echo "selected"; echo '' ?> >SE</options>
							<option value=TO <?php if ($estado == 'TO') echo "selected"; echo '' ?> >TO</options>
					  </select>
				    </div>

				</div>

				<div class="form-row">
				    
				    <div class="form-group col-md-3">
				      <label>Telefone:</label>
				      <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="telefone" placeholder="(  ) 0000-0000" autocomplete="off" oninput="mascara(this, 'tel')" value="<?php echo $telefone ?>">
				    </div>
				    
				    <div class="form-group col-md-3">
				      <label>Celular:</label>
				      <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="celular" placeholder="(  ) 00000-0000" autocomplete="off" oninput="mascara(this, 'cel')" value="<?php echo $celular ?>">
				    </div>

				    <div class="form-group col-md-3">
				      <label>E-Mail:</label>
				      <input style="margin-top: -7px;" type="email" class="form-control form-control-sm" name="email" placeholder="Digite seu email" value="<?php echo $email ?>" autocomplete="off"  value="<?php echo $email ?>">
				    </div>

				    <div class="form-group col-md-3">
				      <label>Sexo:</label>
				      <select style="margin-top: -7px;" class="form-control form-control-sm" name="sexo" required >
							<option></options>
							<option value='MASCULINO' <?php if ($sexo == 'MASCULINO') echo "selected"; echo '' ?> >MASCULINO</option>
							<option value='FEMININO' <?php if ($sexo == 'FEMININO') echo "selected"; echo '' ?> >FEMININO</option>
					  </select>
				    </div>				    

				</div>

				<div class="form-row">
				    
				    <div class="form-group col-md-6">
				      <label>Facebook:</label>
				      <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="facebook" placeholder="Copie o link do seu Facebook" autocomplete="off" value="<?php echo $facebook ?>">
				    </div>
				    
				    <div class="form-group col-md-6">
				      <label>Instagram:</label>
				      <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="instagram"  placeholder="Copie o link do seu Instagram" autocomplete="off" value="<?php echo $instagram ?>">
				    </div>				    

				</div>

				<div class="form-row">

					<div class="form-group col-md-3">
				      <label>Possui C.N.H. ?</label>
				   		<select style="margin-top: -7px;" class="form-control form-control-sm" name="cnh" required >
							<option></options>
							<option value='NÃO' <?php if ($cnh == 'NÃO') echo "selected"; echo '' ?> >NÃO</option>
							<option value='SIM' <?php if ($cnh == 'SIM') echo "selected"; echo '' ?> >SIM</option>	
					  </select> 
					</div>
				   				    

					<div class="form-group col-md-3">
				    	<label>Categoria:</label>
				   		<select style="margin-top: -7px;" class="form-control form-control-sm" name="categoria">
							<option></options>
							<option value=A 	  <?php if ($categoria == 'A') echo "selected"; echo '' ?> >A</option>
							<option value=B 	  <?php if ($categoria == 'B') echo "selected"; echo '' ?> >B</option>
							<option value=C 	  <?php if ($categoria == 'C') echo "selected"; echo '' ?> >C</option>
							<option value=D 	  <?php if ($categoria == 'D') echo "selected"; echo '' ?> >D</option>
							<option value=E 	  <?php if ($categoria == 'E') echo "selected"; echo '' ?> >E</option>
							<option value=AB 	  <?php if ($categoria == 'AB') echo "selected"; echo '' ?> >AB</option>
							<option value=AC 	  <?php if ($categoria == 'AC') echo "selected"; echo '' ?> >AC</option>
							<option value=AD 	  <?php if ($categoria == 'AD') echo "selected"; echo '' ?> >AD</option>
							<option value=AE 	  <?php if ($categoria == 'AE') echo "selected"; echo '' ?> >AE</option>
					  </select> 
				    </div>

				    <div class="form-group col-md-3">
				      <label>Possui Moto ?</label>
				   		<select style="margin-top: -7px;" class="form-control form-control-sm" name="moto" required >
							<option></options>
							<option value=NÃO  <?php if ($moto == 'NÃO') echo "selected"; echo '' ?> >NÃO</option>
							<option value=SIM  <?php if ($moto == 'SIM') echo "selected"; echo '' ?> >SIM</option>
					  </select> 
					</div>  

					<div class="form-group col-md-3">
				      <label>Fuma ?</label>
				   		<select style="margin-top: -7px;" class="form-control form-control-sm" name="fuma" required >
							<option></options>
							<option value=NÃO  <?php if ($fuma == 'NÃO') echo "selected"; echo '' ?> >NÃO</option>
							<option value=SIM  <?php if ($fuma == 'SIM') echo "selected"; echo '' ?> >SIM</option>
					  </select>
					</div>  

				</div>

				<div class="separador"></div>

				<h4 class="titulo">2. Formação Educacional: </h4> <small>Marque as opção concluídas.</small>

				<div class="form-row">
					<div class="form-group col-md-12">
						
						<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" name="ensinof" <?php if ($ensinof == 'Sim') echo "checked"; echo '' ?> >
							  <label class="form-check-label">Ensino Fundamental:</label>
						</div>
						
						<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" name="ensinom" <?php if ($ensinom == 'Sim') echo "checked"; echo '' ?> >
							  <label class="form-check-label">Ensino Médio:</label>
						</div>
					
					</div>
				
				</div>

				<div class="form-row">
					<div class="col-md-4">
						<div class="form-group form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="tecnico1" <?php if ($tecnico1 == 'Sim') echo "checked"; echo '' ?> >
							<label class="form-check-label">Técnico Profissionalizante 1:</label>
						</div>
						<div class="form-group">
							<input style="margin-top: -12px;" class="form-control form-control-sm" type="text" name="tecnico1Qual" placeholder="Qual ?" value="<?php echo $tecnico1Qual ?>">
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="form-group form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="tecnico2"  <?php if ($tecnico2 == 'Sim') echo "checked"; echo '' ?> >
							<label class="form-check-label">Técnico Profissionalizante 2:</label>
						</div>
						<div class="form-group">
							<input style="margin-top: -12px;" class="form-control form-control-sm" type="text" name="tecnico2Qual" placeholder="Qual ?" value="<?php echo $tecnico2Qual ?>">
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="tecnico3"  <?php if ($tecnico3 == 'Sim') echo "checked"; echo '' ?> >
							<label class="form-check-label">Técnico Profissionalizante 3:</label>
						</div>
						<div class="form-group">
							<input style="margin-top: -12px;" class="form-control form-control-sm" type="text" name="tecnico3Qual" placeholder="Qual ?" value="<?php echo $tecnico3Qual ?>">
						</div>
					</div>

				</div>

				<div class="form-row">
					<div class="col-md-4">
						<div class="form-group form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="superior1"  <?php if ($superior1 == 'Sim') echo "checked"; echo '' ?> >
							<label class="form-check-label">Superior 1:</label>
						</div>
						<div class="form-group">
							<input style="margin-top: -12px;" class="form-control form-control-sm" type="text" name="superior1Qual" placeholder="Qual ?" value="<?php echo $superior1Qual ?>">
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="form-group form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="superior2"  <?php if ($superior2 == 'Sim') echo "checked"; echo '' ?> >
							<label class="form-check-label">Superior 2:</label>
						</div>
						<div class="form-group">
							<input style="margin-top: -12px;" class="form-control form-control-sm" type="text" name="superior2Qual" placeholder="Qual ?" value="<?php echo $superior2Qual ?>">
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="posGraduacao"  <?php if ($posGraduacao == 'Sim') echo "checked"; echo '' ?> >
							<label class="form-check-label">Pós Graduação:</label>
						</div>
						<div class="form-group">
						    <input style="margin-top: -12px;" class="form-control form-control-sm" type="text" name="posGraduacaoQual" placeholder="Qual ?" value="<?php echo $posGraduacaoQual ?>">
						</div>
					</div>

				</div>

				<div class="form-row">
					<div class="col-md-4">
						<div class="form-group form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="mestrado"  <?php if ($mestrado == 'Sim') echo "checked"; echo '' ?> >
							<label class="form-check-label">Mestrado:</label>
						</div>
						<div class="form-group">
							<input style="margin-top: -12px;" class="form-control form-control-sm" type="text" name="mestradoQual" placeholder="Qual ?" value="<?php echo $mestradoQual ?>">
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="form-group form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="doutorado"  <?php if ($doutorado == 'Sim') echo "checked"; echo '' ?> >
							<label class="form-check-label">Doutorado:</label>
						</div>
						<div class="form-group">
							<input style="margin-top: -12px;" class="form-control form-control-sm" type="text" name="doutoradoQual" placeholder="Qual ?" value="<?php echo $doutoradoQual ?>">
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="outraGraduacao"  <?php if ($outraGraduacao == 'Sim') echo "checked"; echo '' ?> >
							<label class="form-check-label">Outras:</label>
						</div>
						<div class="form-group">
							<input style="margin-top: -12px;" class="form-control form-control-sm" type="text" name="outraQuais" placeholder="Quais ?" value="<?php echo $outraQuais ?>">
						</div>
					</div>

				</div>	

				<div class="separador"></div>


				<h4 class="titulo">3. Conhecimentos / Habilidades Complementares: </h4> <small>Marque as opção de domínio.</small>

				

				<div class="form-row">
					<div class="form-group col-md-6">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="word" <?php if ($word == 'Sim') echo "checked"; echo '' ?>>
							<label style="width: 125px;" class="form-check-label">Word</label>
							<label style="margin-left: 35px;">Nível</label>
							<select style="margin-left: 5px;" name="word_nivel" >
								<option></options>
								<option value=Básico 		<?php if ($word_nivel == 'Básico') echo "selected"; echo '' ?> >Básico</options>
								<option value=Intermediário <?php if ($word_nivel == 'Intermediário') echo "selected"; echo '' ?> >Intermediário</options>
								<option value=Avançado 		<?php if ($word_nivel == 'Avançado') echo "selected"; echo '' ?> >Avançado</options>
					  		</select> 
						</div>
					</div>
					
					<div class="form-group col-md-6">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="excel" <?php if ($excel == 'Sim') echo "checked"; echo '' ?>>
							<label style="width: 125px;" class="form-check-label">Excel</label>
							<label style="margin-left: 35px;" class="form-check-label">Nível</label>
							<select style="margin-left: 5px;" name="excel_nivel" >
								<option></options>
								<option value=Básico 		<?php if ($excel_nivel == 'Básico') echo "selected"; echo '' ?> >Básico</options>
								<option value=Intermediário <?php if ($excel_nivel == 'Intermediário') echo "selected"; echo '' ?> >Intermediário</options>
								<option value=Avançado 		<?php if ($excel_nivel == 'Avançado') echo "selected"; echo '' ?> >Avançado</options>
					  		</select> 
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="powerpoint" <?php if ($powerpoint == 'Sim') echo "checked"; echo '' ?>>
							<label style="width: 125px;" class="form-check-label">Power Point</label>
							<label style="margin-left: 35px;" >Nível</label>
							<select style="margin-left: 5px;" name="powerpoint_nivel" >
								<option></options>
								<option value=Básico 		<?php if ($powerpoint_nivel == 'Básico') echo "selected"; echo '' ?> >Básico</options>
								<option value=Intermediário <?php if ($powerpoint_nivel == 'Intermediário') echo "selected"; echo '' ?> >Intermediário</options>
								<option value=Avançado 		<?php if ($powerpoint_nivel == 'Avançado') echo "selected"; echo '' ?> >Avançado</options>
						  	</select> 
						</div>
					</div>

					<div class="form-group col-md-6">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="marketing" <?php if ($marketing == 'Sim') echo "checked"; echo '' ?>>
							<label style="width: 125px;" class="form-check-label">Marketing Digital</label>
							<label style="margin-left: 35px;" class="form-check-label">Nível</label>
							<select style="margin-left: 5px;" name="marketing_nivel" >
								<option></options>
								<option value=Básico 		<?php if ($marketing_nivel == 'Básico') echo "selected"; echo '' ?> >Básico</options>
								<option value=Intermediário <?php if ($marketing_nivel == 'Intermediário') echo "selected"; echo '' ?> >Intermediário</options>
								<option value=Avançado 		<?php if ($marketing_nivel == 'Avançado') echo "selected"; echo '' ?> >Avançado</options>
						  	</select> 
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="coreldraw" <?php if ($coreldraw == 'Sim') echo "checked"; echo '' ?>>
							<label style="width: 125px;" class="form-check-label">Corel Draw</label>
							<label style="margin-left: 35px;" class="form-check-label">Nível</label>
							<select style="margin-left: 5px;" name="coreldraw_nivel" >
								<option></options>
								<option value=Básico 		<?php if ($coreldraw_nivel == 'Básico') echo "selected"; echo '' ?> >Básico</options>
								<option value=Intermediário <?php if ($coreldraw_nivel == 'Intermediário') echo "selected"; echo '' ?> >Intermediário</options>
								<option value=Avançado 		<?php if ($coreldraw_nivel == 'Avançado') echo "selected"; echo '' ?> >Avançado</options>
						  	</select> 
						</div>
					</div>
					
					<div class="form-group col-md-6">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="photoshop" <?php if ($photoshop == 'Sim') echo "checked"; echo '' ?>>
							<label style="width: 125px;" class="form-check-label">PhotoShop</label>
							<label style="margin-left: 35px;" class="form-check-label">Nível</label>
							<select style="margin-left: 5px;" name="photoshop_nivel" >
								<option></options>
								<option value=Básico 		<?php if ($photoshop_nivel == 'Básico') echo "selected"; echo '' ?> >Básico</options>
								<option value=Intermediário <?php if ($photoshop_nivel == 'Intermediário') echo "selected"; echo '' ?> >Intermediário</options>
								<option value=Avançado 		<?php if ($photoshop_nivel == 'Avançado') echo "selected"; echo '' ?> >Avançado</options>
						  	</select> 
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="sites" <?php if ($sites == 'Sim') echo "checked"; echo '' ?>>
							<label style="width: 125px;" class="form-check-label">Sites</label>
							<label style="margin-left: 35px;" class="form-check-label">Nível</label>
							<select style="margin-left: 5px;" name="sites_nivel" >
								<option></options>
								<option value=Básico 		<?php if ($sites_nivel == 'Básico') echo "selected"; echo '' ?> >Básico</options>
								<option value=Intermediário <?php if ($sites_nivel == 'Intermediário') echo "selected"; echo '' ?> >Intermediário</options>
								<option value=Avançado 		<?php if ($sites_nivel == 'Avançado') echo "selected"; echo '' ?> >Avançado</options>
						  	</select> 
						</div>
					</div>

					<div class="form-group col-md-6">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="programacao" <?php if ($programacao == 'Sim') echo "checked"; echo '' ?>>
							<label style="width: 125px;" class="form-check-label">Programação</label>
							<label style="margin-left: 35px;" class="form-check-label">Nível</label>
							<select style="margin-left: 5px;" name="programacao_nivel" >
								<option></options>
								<option value=Básico 		<?php if ($programacao_nivel == 'Básico') echo "selected"; echo '' ?> >Básico</options>
								<option value=Intermediário <?php if ($programacao_nivel == 'Intermediário') echo "selected"; echo '' ?> >Intermediário</options>
								<option value=Avançado 		<?php if ($programacao_nivel == 'Avançado') echo "selected"; echo '' ?> >Avançado</options>
						  	</select> 
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="cincoS" <?php if ($cincoS == 'Sim') echo "checked"; echo '' ?>>
							<label style="width: 125px;" class="form-check-label">5S</label>
							<label style="margin-left: 35px;" class="form-check-label">Nível</label>
							<select style="margin-left: 5px;" name="cincoS_nivel" >
								<option></options>
								<option value=Básico 		<?php if ($cincoS_nivel == 'Básico') echo "selected"; echo '' ?> >Básico</options>
								<option value=Intermediário <?php if ($cincoS_nivel == 'Intermediário') echo "selected"; echo '' ?> >Intermediário</options>
								<option value=Avançado 		<?php if ($cincoS_nivel == 'Avançado') echo "selected"; echo '' ?> >Avançado</options>
						  	</select> 
						</div>
					</div>
					
					<div class="form-group col-md-6">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="pop" <?php if ($pop == 'Sim') echo "checked"; echo '' ?>>
							<label style="width: 125px;" class="form-check-label">POP</label>
							<label style="margin-left: 35px;" class="form-check-label">Nível</label>
							<select style="margin-left: 5px;" name="pop_nivel" >
								<option></options>
								<option value=Básico 		<?php if ($pop_nivel == 'Básico') echo "selected"; echo '' ?> >Básico</options>
								<option value=Intermediário <?php if ($pop_nivel == 'Intermediário') echo "selected"; echo '' ?> >Intermediário</options>
								<option value=Avançado 		<?php if ($pop_nivel == 'Avançado') echo "selected"; echo '' ?> >Avançado</options>
						  	</select> 
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="fluxograma" <?php if ($fluxograma == 'Sim') echo "checked"; echo '' ?>>
							<label style="width: 125px;" class="form-check-label">Fluxograma</label>
							<label style="margin-left: 35px;" class="form-check-label">Nível</label>
							<select style="margin-left: 5px;" name="fluxograma_nivel" >
								<option></options>
								<option value=Básico 		<?php if ($fluxograma_nivel == 'Básico') echo "selected"; echo '' ?> >Básico</options>
								<option value=Intermediário <?php if ($fluxograma_nivel == 'Intermediário') echo "selected"; echo '' ?> >Intermediário</options>
								<option value=Avançado 		<?php if ($fluxograma_nivel == 'Avançado') echo "selected"; echo '' ?> >Avançado</options>
						  	</select> 
						</div>
					</div>

					<div class="form-group col-md-6">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="pdca" <?php if ($pdca == 'Sim') echo "checked"; echo '' ?>>
							<label style="width: 125px;" class="form-check-label">PDCA</label>
							<label style="margin-left: 35px;" class="form-check-label">Nível</label>
							<select style="margin-left: 5px;" name="pdca_nivel" >
								<option></options>
								<option value=Básico 		<?php if ($pdca_nivel == 'Básico') echo "selected"; echo '' ?> >Básico</options>
								<option value=Intermediário <?php if ($pdca_nivel == 'Intermediário') echo "selected"; echo '' ?> >Intermediário</options>
								<option value=Avançado 		<?php if ($pdca_nivel == 'Avançado') echo "selected"; echo '' ?> >Avançado</options>
						  	</select> 
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="cincoW2h" <?php if ($cincoW2h == 'Sim') echo "checked"; echo '' ?>>
							<label style="width: 125px;" class="form-check-label">5W2H</label>
							<label style="margin-left: 35px;" class="form-check-label">Nível</label>
							<select style="margin-left: 5px;" name="cincoW2h_nivel" >
								<option></options>
								<option value=Básico 		<?php if ($cincoW2h_nivel == 'Básico') echo "selected"; echo '' ?> >Básico</options>
								<option value=Intermediário <?php if ($cincoW2h_nivel == 'Intermediário') echo "selected"; echo '' ?> >Intermediário</options>
								<option value=Avançado 		<?php if ($cincoW2h_nivel == 'Avançado') echo "selected"; echo '' ?> >Avançado</options>
						  	</select> 
						</div>
					</div>
				
					<div class="form-group col-md-6">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="qualidadeTotal" <?php if ($qualidadeTotal == 'Sim') echo "checked"; echo '' ?>>
							<label style="width: 125px;" class="form-check-label">Qualidade Total</label>
							<label style="margin-left: 35px;" class="form-check-label">Nível</label>
							<select style="margin-left: 5px;" name="qualidadeTotal_nivel" >
								<option></options>
								<option value=Básico 		<?php if ($qualidadeTotal_nivel == 'Básico') echo "selected"; echo '' ?> >Básico</options>
								<option value=Intermediário <?php if ($qualidadeTotal_nivel == 'Intermediário') echo "selected"; echo '' ?> >Intermediário</options>
								<option value=Avançado 		<?php if ($qualidadeTotal_nivel == 'Avançado') echo "selected"; echo '' ?> >Avançado</options>
						  	</select> 
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="ingles" <?php if ($ingles == 'Sim') echo "checked"; echo '' ?>>
							<label style="width: 125px;" class="form-check-label">Inglês</label>
							<label style="margin-left: 35px;" class="form-check-label">Nível</label>
							<select style="margin-left: 5px;" name="ingles_nivel" >
								<option></options>
								<option value=Básico 		<?php if ($ingles_nivel == 'Básico') echo "selected"; echo '' ?> >Básico</options>
								<option value=Intermediário <?php if ($ingles_nivel == 'Intermediário') echo "selected"; echo '' ?> >Intermediário</options>
								<option value=Avançado 		<?php if ($ingles_nivel == 'Avançado') echo "selected"; echo '' ?> >Avançado</options>
						  	</select> 
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-6">
						<div class="form-group form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="outrasHabilidades" <?php if ($outrasHabilidades == 'Sim') echo "checked"; echo '' ?>>
							<label style="width: 155px;" class="form-check-label">Outras Habilidades:</label>
							<label style="margin-left: 3px;" class="form-check-label">Nível</label>
							<select style="margin-left: 5px;" name="outrasHabilidades_nivel" >
								<option></options>
								<option value=Básico 		<?php if ($outrasHabilidades_nivel == 'Básico') echo "selected"; echo '' ?> >Básico</options>
								<option value=Intermediário <?php if ($outrasHabilidades_nivel == 'Intermediário') echo "selected"; echo '' ?> >Intermediário</options>
								<option value=Avançado 		<?php if ($outrasHabilidades_nivel == 'Avançado') echo "selected"; echo '' ?> >Avançado</options>
						  	</select> 
						</div>
						<div class="form-group">
							<input style="margin-top: -12px;" class="form-control form-control-sm" type="text" name="outrasHabilidadesQuais" placeholder="Quais ?" value="<?php echo $outrasHabilidadesQuais ?>">
						</div>
					</div>

					
					<div class="col-md-6">
						<div class="form-group form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="outrasLinguas" <?php if ($outrasLinguas == 'Sim') echo "checked"; echo '' ?>>
							<label style="width: 125px;" class="form-check-label">Outras Línguas:</label>
							<label style="margin-left: 35px;" class="form-check-label">Nível</label>
							<select style="margin-left: 5px;" name="outrasLinguas_nivel" >
								<option value=Básico 		<?php if ($outrasLinguas_nivel == 'Básico') echo "selected"; echo '' ?> >Básico</options>
								<option value=Intermediário <?php if ($outrasLinguas_nivel == 'Intermediário') echo "selected"; echo '' ?> >Intermediário</options>
								<option value=Avançado 		<?php if ($outrasLinguas_nivel == 'Avançado') echo "selected"; echo '' ?> >Avançado</options>
						  	</select> 
						</div>
						<div class="form-group">
							<input style="margin-top: -12px;" class="form-control form-control-sm" type="text" name="outrasLinguasQuais" placeholder="Quais ?" value="<?php echo $outrasLinguasQuais ?>">
						</div>
					</div>

		    	</div>	

		    	<div class="separador"></div>


				<h4 class="titulo">4. Experiência Profissional: </h4> <small style="margin-top: -7px;">3 Últimos empregos.</small>

				<div style="border-radius: 5px; border: 2px solid #D8D8D8; padding: 4px; margin: 2px">
				
					<div class="form-row">
						<div class="form-group col-md-4">
						    <label>Última Empresa:</label>
						    <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="empresa1" placeholder="Empresa onde trabalhou" autocomplete="off" value="<?php echo $empresa1 ?>" >
						</div>

						<div class="form-group col-md-2">
						    <label>Data Admissão:</label>
						    <input style="margin-top: -7px;" type="date" class="form-control form-control-sm" name="dataAd1"  autocomplete="off" value="<?php echo $dataAd1 ?>">
						</div>

						<div class="form-group col-md-2">
						    <label>Data Demissão</label>
						    <input style="margin-top: -7px;" type="date" class="form-control form-control-sm" name="dataDem1"  autocomplete="off" value="<?php echo $dataDem1 ?>">
						</div>

						<div class="form-group col-md-4">
						    <label>Função que exercia:</label>
						    <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="funcao1" placeholder="Função" autocomplete="off" value="<?php echo $funcao1 ?>" >
						</div>
			        </div>	

			        <div style="margin-top: -7px;" class="form-row">
						<div class="form-group col-md-12">
						    <label>Motivo da Rescisão:</label>
						    <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="motivo1" placeholder="Descreva o Motivo da Rescisão" autocomplete="off" value="<?php echo $motivo1 ?>" >
						</div>
			        </div>	

			        <div style="margin-top: -7px;" class="form-row">
						<div class="form-group col-md-8">
						    <label>Contato:</label>
						    <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="contato1" autocomplete="off" value="<?php echo $contato1 ?>">
						</div>

						<div class="form-group col-md-4">
						    <label>Telefone:</label>
						    <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="telefoneContato1" value="<?php echo $telefoneContato1 ?>">
						</div>
			        </div>
			    </div>

			    <div style="border-radius: 5px; border: 2px solid #D8D8D8; padding: 4px; margin: 2px">
					<div class="form-row">
						<div class="form-group col-md-4">
						    <label>Penúltima Empresa:</label>
						    <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="empresa2" placeholder="Empresa onde trabalhou" autocomplete="off" value="<?php echo $empresa2 ?>" >
						</div>

						<div class="form-group col-md-2">
						    <label>Data Admissão:</label>
						    <input style="margin-top: -7px;" type="date" class="form-control form-control-sm" name="dataAd2"  autocomplete="off" value="<?php echo $dataAd2 ?>">
						</div>

						<div class="form-group col-md-2">
						    <label>Data Demissão</label>
						    <input style="margin-top: -7px;" type="date" class="form-control form-control-sm" name="dataDem2"  autocomplete="off" value="<?php echo $dataDem2 ?>">
						</div>

						<div class="form-group col-md-4">
						    <label>Função que exercia:</label>
						    <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="funcao2" placeholder="Função" autocomplete="off" value="<?php echo $funcao2 ?>" >
						</div>
			        </div>	

			        <div style="margin-top: -7px;" class="form-row">
						<div class="form-group col-md-12">
						    <label>Motivo da Rescisão:</label>
						    <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="motivo2" placeholder="Descreva o Motivo da Rescisão" autocomplete="off" value="<?php echo $motivo2 ?>" >
						</div>
			        </div>	

			        <div style="margin-top: -7px;" class="form-row">
						<div class="form-group col-md-8">
						    <label>Contato:</label>
						    <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="contato2" autocomplete="off" value="<?php echo $contato2 ?>">
						</div>

						<div class="form-group col-md-4">
						    <label>Telefone:</label>
						    <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="telefoneContato2" value="<?php echo $telefoneContato2 ?>">
						</div>
			        </div>
			    </div>

			    <div style="border-radius: 5px; border: 2px solid #D8D8D8; padding: 4px; margin: 2px">
					<div class="form-row">
						<div class="form-group col-md-4">
						    <label>Antepenúltima Empresa:</label>
						    <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="empresa3" placeholder="Empresa onde trabalhou" autocomplete="off" value="<?php echo $empresa3 ?>" >
						</div>

						<div class="form-group col-md-2">
						    <label>Data Admissão:</label>
						    <input style="margin-top: -7px;" type="date" class="form-control form-control-sm" name="dataAd3"  autocomplete="off" value="<?php echo $dataAd3 ?>">
						</div>

						<div class="form-group col-md-2">
						    <label>Data Demissão</label>
						    <input style="margin-top: -7px;" type="date" class="form-control form-control-sm" name="dataDem3"  autocomplete="off" value="<?php echo $dataDem3 ?>">
						</div>

						<div class="form-group col-md-4">
						    <label>Função que exercia:</label>
						    <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="funcao3" placeholder="Função" autocomplete="off" value="<?php echo $funcao3 ?>" >
						</div>
			        </div>	

			        <div style="margin-top: -7px;" class="form-row">
						<div class="form-group col-md-12">
						    <label>Motivo da Rescisão:</label>
						    <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="motivo3" placeholder="Descreva o Motivo da Rescisão" autocomplete="off" value="<?php echo $motivo3 ?>" >
						</div>
			        </div>	

			        <div style="margin-top: -7px;" class="form-row">
						<div class="form-group col-md-8">
						    <label>Contato:</label>
						    <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="contato3" autocomplete="off" value="<?php echo $contato3 ?>">
						</div>

						<div class="form-group col-md-4">
						    <label>Telefone:</label>
						    <input style="margin-top: -7px;" type="text" class="form-control form-control-sm" name="telefoneContato3" value="<?php echo $telefoneContato3 ?>">
						</div>	
			    	</div>
			    </div>

			    <div class="separador"></div>
		    	
				<h4 class="titulo">5. Informações Adicionais: </h4> <small style="margin-top: -7px;"></small>

			
		    	<div class="form-row">
					<div class="form-group col-md-12">
						<label>Alergias / Intolerância:</label>
						<small>(Poeira, fungos, medicamentos, temperaturas, etc.)</small>
						<input style="margin-top: -6px;" type="text" class="form-control form-control-sm" name="alergias" placeholder="Descreva" autocomplete="off" value="<?php echo $alergias ?>">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<label>Limitações Físicas:</label>
						<small>(Visão, audição, LER, lesão na coluna vertebral, uso de prótese.)</small>
						<input style="margin-top: -6px;" type="text" class="form-control form-control-sm" name="limitacoes" placeholder="Descreva" autocomplete="off" value="<?php echo $limitacoes ?>">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<label>Características Pessoais:</label>
						<small>(Distração, insegurança, dificuldade de manter o foco, etc.)</small>
						<input style="margin-top: -6px;" type="text" class="form-control form-control-sm" name="pessoais" placeholder="Descreva" autocomplete="off" value="<?php echo $pessoais ?>">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<label>Necessidades Especiais:</label>
						<small>(Medicamentos de uso contínuo, diabetes, etc.)</small>
						<input style="margin-top: -6px;" type="text" class="form-control form-control-sm" name="especiais" placeholder="Descreva" autocomplete="off" value="<?php echo $especiais ?>">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<label>Já exerceu trabalho em equipe?</label>
						<small>(Se sim, qual ?)</small>
						<input style="margin-top: -6px;" type="text" class="form-control form-control-sm" name="trabalhoEquipe" placeholder="Descreva" autocomplete="off" value="<?php echo $trabalhoEquipe ?>">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<label>Já exerceu função de chefia/liderança de equipe?</label>
						<small>(Se sim, qual ?)</small>
						<input style="margin-top: -6px;" type="text" class="form-control form-control-sm" name="funcaoLider" placeholder="Descreva" autocomplete="off" value="<?php echo $funcaoLider ?>">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<label>Informações Complementares:</label>
						<small>(O que considera importante sabermos sobre você?)</small>
						<input style="margin-top: -6px;" type="text" class="form-control form-control-sm" name="infoComplementar" placeholder="Descreva" autocomplete="off" value="<?php echo $infoComplementar ?>">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<label>Tem disponibilidade para viajar ?</label>
						<input style="margin-top: -6px;" type="text" class="form-control form-control-sm" name="viajar" placeholder="Comente" autocomplete="off" value="<?php echo $viajar ?>">
					</div>
				</div> 

				<div class="separador"></div>
				
				<h4 class="titulo">6. Área de interesse: </h4>
				
			    <div class="form-row">
					<div class="form-group col-md-12">
					    <label>Escolha uma área de seu interesse:</label>
					    <select style="margin-top: -6px;" class="form-control form-control-sm" name="prof">
					    				    
					        <?php
					       		include 'conexao.php';	
					       		$sql2 = "SELECT * FROM curriculo_profissoes order by id";
					       		$buscar2 = mysqli_query($conexao,$sql2);
					       		 
					       		while ($array2 = mysqli_fetch_array($buscar2)) {
					       			$profissao = $array2['profissao'];
					       	?>
				       		<option <?php if ($prof == "$profissao") echo "selected"; echo '' ?> > <?php echo $profissao ?></option>
				       	
				       		<?php	}  ?>
				       	</select>
					    
			    	</div>
			    </div>

		    	<div class="form-row">
					<div class="form-group col-md-12">
					    <label>Especifique a área de seu interesse: </label>
					    <textarea style="margin-top: -6px;" rows="5"  class="form-control form-control-sm" name="prof_outros" autocomplete="off" required ><?php echo $prof_outros ?></textarea>
					</div>
		        </div>	

			<div style="text-align: right; margin-top: 10px">
				<button style="margin-right: 35px;" type="submit" class="btn btn-success ">Salvar Currículo</button>
				<a style="margin-right: 55px;" class="btn btn-primary" href="logoff.php">Sair</a>
			</div>

			<br>



		</form>
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