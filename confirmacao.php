<?php
    session_start();

    session_destroy();     
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

    <section style="margin-top: 50px; " class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            
            <div class="col-md-6">
                    <div class="card">
                      <div class="card-header text-success">
                        <h5> Cadastro salvo com sucesso ! <h5>
                      </div>
                      <div class="card-body">
                         <h6 class="card-text">Obrigado por cadastrar seu currículo em nosso banco de dados.</h6>
                         <h6 class="card-text">Ele será disponibilizado aos nossos clientes imediatamente.</h6>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
            </div>
        </div>
    </section> 

    <section style="margin-top: 80px; " class="container">
        <div style="border-radius: 10px;" class="row bg-light p-4 ml-4 mt-4">
            <div class="col-md-12">
                <center>
                    <img style="padding: 2px;" src="img/logo_vencer.png" width="600px" class="img-fluid">
                </center>
            </div>
        </div>
    </section> 


   <script type="text/javascript">
       window.setTimeout("location.href='login.php';", 8000);
    </script>

</body>
</html>