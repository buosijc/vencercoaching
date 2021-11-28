<?php

session_start();

set_time_limit(0);

include 'conexao.php';

mysqli_set_charset($conexao, 'utf8');

$id 						= $_SESSION['id'];

$nome 						= $_POST ['nome'];
$nomes  					= $_POST ['nomes'];
$cpf    					= $_POST ['cpf'];
$datanasc   				= $_POST ['datanasc'];

$estadocivil   				= $_POST ['estadocivil'];
$dependentes  				= $_POST ['dependentes'];
$endereco  					= $_POST ['endereco'];
$numero						= $_POST ['numero'];
$bairro						= $_POST ['bairro'];
$cidade						= $_POST ['cidade'];
$estado 					= $_POST ['estado'];
$telefone 					= $_POST ['telefone'];
$celular 					= $_POST ['celular'];
$email 						= $_POST ['email'];
$sexo 						= $_POST ['sexo'];
$facebook					= $_POST ['facebook'];
$instagram					= $_POST ['instagram'];
$cnh 						= $_POST ['cnh'];
$categoria 					= $_POST ['categoria'];
$moto 						= $_POST ['moto'];
$fuma						= $_POST ['fuma'];

if(isset($_REQUEST['ensinof'])) $ensinof = 'Sim'; else $ensinof = 'Não';
if(isset($_REQUEST['ensinom'])) $ensinom = 'Sim'; else $ensinom = 'Não';

if(isset($_REQUEST['tecnico1'])) $tecnico1 = 'Sim'; else $tecnico1 = 'Não';
if(isset($_REQUEST['tecnico2'])) $tecnico2 = 'Sim'; else $tecnico2 = 'Não';
if(isset($_REQUEST['tecnico3'])) $tecnico3 = 'Sim'; else $tecnico3 = 'Não';
$tecnico1Qual 				= $_POST ['tecnico1Qual'];
$tecnico2Qual 				= $_POST ['tecnico2Qual'];
$tecnico3Qual 				= $_POST ['tecnico3Qual'];

if(isset($_REQUEST['superior1'])) $superior1 = 'Sim'; else $superior1 = 'Não';
if(isset($_REQUEST['superior2'])) $superior2 = 'Sim'; else $superior2 = 'Não';
$superior1Qual 				= $_POST ['superior1Qual'];
$superior2Qual				= $_POST ['superior2Qual'];

if(isset($_REQUEST['posGraduacao'])) $posGraduacao = 'Sim'; else $posGraduacao = 'Não';
$posGraduacaoQual			= $_POST ['posGraduacaoQual'];

if(isset($_REQUEST['$mestrado'])) $$mestrado = 'Sim'; else $mestrado = 'Não';
$mestradoQual	 			= $_POST ['mestradoQual'];

if(isset($_REQUEST['doutorado'])) $doutorado = 'Sim'; else $doutorado = 'Não';	
$doutoradoQual 				= $_POST ['doutoradoQual'];

if(isset($_REQUEST['outraGraduacao'])) $outraGraduacao = 'Sim'; else $outraGraduacao = 'Não';
$outraQuais				    = $_POST ['outraQuais'];

if(isset($_REQUEST['word'])) $word = 'Sim'; else $word = 'Não';
if(isset($_REQUEST['excel'])) $excel = 'Sim'; else $excel = 'Não';
if(isset($_REQUEST['powerpoint'])) $powerpoint = 'Sim'; else $powerpoint = 'Não';
if(isset($_REQUEST['marketing'])) $marketing = 'Sim'; else $marketing = 'Não';
if(isset($_REQUEST['coreldraw'])) $coreldraw = 'Sim'; else $coreldraw = 'Não';
if(isset($_REQUEST['photoshop'])) $photoshop = 'Sim'; else $photoshop = 'Não';
if(isset($_REQUEST['sites'])) $sites = 'Sim'; else $sites = 'Não';
if(isset($_REQUEST['programacao'])) $programacao = 'Sim'; else $programacao = 'Não';
if(isset($_REQUEST['cincoS'])) $cincoS = 'Sim'; else $cincoS = 'Não';
if(isset($_REQUEST['pop'])) $pop = 'Sim'; else $pop = 'Não';
if(isset($_REQUEST['fluxograma'])) $fluxograma = 'Sim'; else $fluxograma = 'Não';
if(isset($_REQUEST['pdca'])) $pdca = 'Sim'; else $pdca = 'Não';
if(isset($_REQUEST['cincoW2h'])) $cincoW2h = 'Sim'; else $cincoW2h = 'Não';
if(isset($_REQUEST['qualidadeTotal'])) $qualidadeTotal = 'Sim'; else $qualidadeTotal = 'Não';
if(isset($_REQUEST['ingles'])) $ingles = 'Sim'; else $ingles = 'Não';
if(isset($_REQUEST['outrasHabilidades'])) $outrasHabilidades = 'Sim'; else $outrasHabilidades = 'Não';
$outrasHabilidadesQuais		= $_POST ['outrasHabilidadesQuais'];
if(isset($_REQUEST['outrasLinguas'])) $outrasLinguas = 'Sim'; else $outrasLinguas = 'Não';
$outrasLinguasQuais			= $_POST ['outrasLinguasQuais'];

$word_nivel 				= $_POST['word_nivel'];
$excel_nivel 				= $_POST['excel_nivel'];
$powerpoint_nivel 			= $_POST['powerpoint_nivel'];
$marketing_nivel 			= $_POST['marketing_nivel'];
$coreldraw_nivel 			= $_POST['coreldraw_nivel'];
$photoshop_nivel			= $_POST['photoshop_nivel'];
$sites_nivel 				= $_POST['sites_nivel'];
$programacao_nivel 			= $_POST['programacao_nivel'];
$cincoS_nivel 				= $_POST['cincoS_nivel'];
$pop_nivel 					= $_POST['pop_nivel'];
$fluxograma_nivel 			= $_POST['fluxograma_nivel'];
$pdca_nivel 				= $_POST['pdca_nivel'];
$cincoW2h_nivel 			= $_POST['cincoW2h_nivel'];
$qualidadeTotal_nivel 		= $_POST['qualidadeTotal_nivel'];
$ingles_nivel 				= $_POST['ingles_nivel'];
$outrasHabilidades_nivel 	= $_POST['outrasHabilidades_nivel'];
$outrasLinguas_nivel 		= $_POST['outrasLinguas_nivel'];

$dataAd1	   				= $_POST ['dataAd1'];
if ($dataAd1 == '') {
	$dataAd1 = 'NULL';
}

$dataAd2	   				= $_POST ['dataAd2'];
if ($dataAd2 == '') {
	$dataAd2 = 'NULL';
}

$dataAd3	   				= $_POST ['dataAd3'];
if ($dataAd3 == '') {
	$dataAd3 = 'NULL';
}

$dataDem1	   				= $_POST ['dataDem1'];
if ($dataDem1 == '') {
	$dataDem1 = 'NULL';
}

$dataDem2	   				= $_POST ['dataDem2'];
if ($dataDem2 == '') {
	$dataDem2 = 'NULL';
}

$dataDem3	   				= $_POST ['dataDem3'];
if ($dataDem3 == '') {
	$dataDem3 = 'NULL';
}

$empresa1					= $_POST ['empresa1'];
$funcao1					= $_POST ['funcao1'];
$motivo1 					= $_POST ['motivo1'];
$contato1 					= $_POST ['contato1'];
$telefoneContato1			= $_POST ['telefoneContato1'];

$empresa2					= $_POST ['empresa2'];
$funcao2					= $_POST ['funcao2'];
$motivo2 					= $_POST ['motivo2'];
$contato2					= $_POST ['contato2'];
$telefoneContato2			= $_POST ['telefoneContato2'];

$empresa3					= $_POST ['empresa3'];
$funcao3					= $_POST ['funcao3'];
$motivo3 					= $_POST ['motivo3'];
$contato3 					= $_POST ['contato3'];
$telefoneContato3			= $_POST ['telefoneContato3'];


$alergias					= $_POST ['alergias'];
$limitacoes	  				= $_POST ['limitacoes'];
$pessoais 					= $_POST ['pessoais'];
$especiais 					= $_POST ['especiais'];
$trabalhoEquipe 			= $_POST ['trabalhoEquipe'];
$funcaoLider 				= $_POST ['funcaoLider'];
$infoComplementar 			= $_POST ['infoComplementar'];
$viajar 					= $_POST ['viajar'];
$prof 						= $_POST ['prof'];  
$prof_outros 				= $_POST ['prof_outros'];  

$arquivo = isset($_FILES['img_perfil']) ? $_FILES['img_perfil'] : FALSE;
$file_tmp = $arquivo["tmp_name"];
$file_type = $arquivo["type"];

$img_perfil = file_get_contents($file_tmp);
$img_perfil = mysqli_real_escape_string($conexao, $img_perfil);


$sql = (" UPDATE `curriculos` SET
`nome`= '$nome',
`nomesocial`= '$nomes',
`data_nascimento` = '$datanasc',
`estado_civil` = '$estadocivil',
`dependentes` = '$dependentes',
`endereco` = '$endereco',
`numero` = '$numero',
`bairro` = '$bairro',
`cidade` = '$cidade',
`estado` = '$estado',
`telefone` = '$telefone',
`celular` = '$celular',
`email` = '$email',
`sexo` = '$sexo',
`facebook` = '$facebook',
`instagram` = '$instagram',
`cnh` = '$cnh',
`categoria` = '$categoria',
`moto` = '$moto',
`fuma` = '$fuma',
`ensinof` = '$ensinof',
`ensinom` = '$ensinom',
`tecnico1` = '$tecnico1',
`tecnico1Qual` = '$tecnico1Qual',
`tecnico2` = '$tecnico2',
`tecnico2Qual` = '$tecnico2Qual',
`tecnico3` = '$tecnico3',
`tecnico3Qual` = '$tecnico3Qual',
`superior1` = '$superior1',
`superior1Qual` = '$superior1Qual',
`superior2` = '$superior2',
`superior2Qual` = '$superior2Qual',
`posGraduacao` = '$posGraduacao',
`posGraduacaoQual` = '$posGraduacaoQual',
`mestrado` = '$mestrado',
`mestradoQual` = '$mestradoQual',
`doutorado` = '$doutorado',
`doutoradoQual` = '$doutoradoQual',
`outraGraduacao` = '$outraGraduacao',
`outraQuais` = '$outraQuais',
`word` = '$word',
`word_nivel` = '$word_nivel',
`excel` = '$excel',
`excel_nivel` = '$excel_nivel',
`powerpoint` = '$powerpoint',
`powerpoint_nivel` = '$powerpoint_nivel',
`marketing` = '$marketing',
`marketing_nivel` = '$marketing_nivel',
`coreldraw` = '$coreldraw',
`coreldraw_nivel` = '$coreldraw_nivel',
`photoshop` = '$photoshop',
`photoshop_nivel` = '$photoshop_nivel',
`sites` = '$sites',
`sites_nivel` = '$sites_nivel',
`programacao` = '$programacao',
`programacao_nivel` = '$programacao_nivel',
`cincoS` = '$cincoS',
`cincoS_nivel` = '$cincoS_nivel',
`pop` = '$pop',
`pop_nivel` = '$pop_nivel',
`fluxograma` = '$fluxograma',
`fluxograma_nivel` = '$fluxograma_nivel',
`pdca` = '$pdca',
`pdca_nivel` = '$pdca_nivel',
`cincoW2h` = '$cincoW2h',
`cincoW2h_nivel` = '$cincoW2h_nivel',
`qualidadeTotal` = '$qualidadeTotal',
`qualidadeTotal_nivel` = '$qualidadeTotal_nivel',
`ingles` = '$ingles',
`ingles_nivel` = '$ingles_nivel',
`outrasHabilidades` = '$outrasHabilidades',
`outrasHabilidades_nivel` = '$outrasHabilidades_nivel',
`outrasHabilidadesQuais` = '$outrasHabilidadesQuais',
`outrasLinguas` = '$outrasLinguas',
`outrasLinguas_nivel` = '$outrasLinguas_nivel',
`outrasLinguasQuais` = '$outrasLinguasQuais',
`empresa1` = '$empresa1',
`dataAD1` = $dataAd1,
`dataDem1` = $dataDem1,
`funcao1` = '$funcao1',
`motivo1` = '$motivo1',
`contato1` = '$contato1',
`telefoneContato1` = '$telefoneContato1',
`empresa2` = '$empresa2',
`dataAD2` = $dataAd2,
`dataDem2` = $dataDem2,
`funcao2` = '$funcao2',
`motivo2` = '$motivo2',
`contato2` = '$contato2',
`telefoneContato2` = '$telefoneContato2',
`empresa3` = '$empresa3',
`dataAD3` = $dataAd3,
`dataDem3` = $dataDem3,
`funcao3` = '$funcao3',
`motivo3` = '$motivo3',
`contato3` = '$contato3',
`telefoneContato3` = '$telefoneContato3',
`alergias` = '$alergias',
`limitacoes` = '$limitacoes',
`pessoais` = '$pessoais',
`especiais` = '$especiais',
`trabalhoEquipe` = '$trabalhoEquipe',
`funcaoLider` = '$funcaoLider',
`infoComplementar` = '$infoComplementar',
`viajar` = '$viajar',
`prof` = '$prof',
`prof_outros` = '$prof_outros',
`foto` = '$img_perfil',
`foto_tipo` = '$file_type'


WHERE id_candidato = $id ");


$inserir = mysqli_query($conexao, $sql);

header('Location: confirmacao.php');
 

?>



    






