<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <title>Resultado</title>



        <style>
            .container {
                width: 100vw;
                height: 100vh;

                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center
            }
            .box {
                width: 300px;
                height: 300px;
                margin: 2px;
                background: #fff;
            }
            body {
                margin: 0px;
            }
        </style>
    </head>
    <body>
        <div class="container">

            <div class="box">
                <?php
                $nome = $_POST['nome'];
                if (empty($nome)) {
                    echo '<h4> Campo Vazio, retorne e preencha !</h4>';
                } else {
                    $letrafinal = substr($nome, -1);

                    if ($letrafinal == "o" or $letrafinal == "r" or$nome=="guilherme" or $nome=="henrique" or $nome=="luiz" or $nome=="davi" or $nome=="george" or $nome=="daniel" or $nome=="marcos" or $nome=="keller" or $nome=="gaspar" or $nome=="vicente") {
                        echo '<div class="alert alert-warning" role="alert">';
                        echo " <strong>Masculino</strong> ";
                        echo '</div>';
                    } else if( $letrafinal =="e" or $letrafinal =="a" or $nome=="beatriz" ){
                        echo '<div class="alert alert-danger" role="alert">';
                        echo " <strong>Feminino</strong> ";
                        echo '</div>';
                    }else{
                         echo 'Indefinido!!!!!!';
                    }
                }
                ?>
            </div>  
        </div>
    </body>
</html>
