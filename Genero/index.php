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

        <title>Página Incial </title>
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
    <body >
        <div class="container">
            
            <div class="box">
                <div class="alert alert-success" role="alert">
                    <strong>Olá </strong> Informe seu Nome.
                </div>
                <center>
                    <img src="http://4.bp.blogspot.com/-Ox2fK0ysjpI/TfbNL6LSV8I/AAAAAAAAE0M/qzCZxWeiN-Y/s1600/fernando_pessoa3.jpg" width="50%" height="50%"/>
                </center>
                
                <form action="pagina.php" method="post">

                    <input type="text" class="form-control" name="nome" placeholder="Informe o seu Nome"/><br />

                    <input type="submit" class="btn" name="submit" value="Verificar "  />
                </form>
            </div>
        </div>

    </body>
</html>
