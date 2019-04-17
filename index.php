<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
    <title></title>
  </head>
  <body>

    <?php

      function printQuestions($quest){

        foreach ($quest as $v) {
          echo "<p> $v </p>";
        }

      }

      function printData($elem){
        // var_dump($elem);

        echo "<div>";

          foreach ($elem as $k => $v) {

            if ($k == "q"){
              echo "<h2> $v </h2>";

            }
            elseif ($k == "a"){

              printQuestions($v);
            }
          }
        echo"</div>";
      }

     ?>
    <header>

      <div class="title">
        <img src="img/googlelogo.png"> <h1> <a href="#">Privacy e termini</a> </h1>
      </div>
      <nav>
        <ul>
          <li> <a href="#">Introduzione</a> </li>
          <li> <a href="#">Norme sulla privacy</a> </li>
          <li> <a href="#">Termini di servizio</a> </li>
          <li> <a href="#">Tecnologie</a> </li>
          <li class="active"> <a href="#">Domande frequenti</a> </li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="container">
        <?php

          include "var.php";
          // var_dump($data);

          foreach ($data as $value) {

            printData($value);
          }

        ?>

      </div>
    </main>

  </body>
</html>
