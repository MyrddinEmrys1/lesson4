<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 5</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Вставка HTML5 поєднується з Respond.js для підтримки в IE8 елементів HTML5 та медіа-запитів -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background:#F5F5F5">
    <div class="container" style="margin-top:5%">
      <?php

      /*echo "<pre>";
      print_r($_POST);
      echo "</pre>";*/

        $cols = filter_var($_POST['cols'], FILTER_SANITIZE_STRING);
        $rows = filter_var($_POST['rows'], FILTER_SANITIZE_STRING);

        echo '<table class="table table-bordered">';

        for ($tr = 1; $tr <= $rows; $tr++){
          echo '<tr>';
          for ($td = 1; $td <= $cols; $td++){
              $content = filter_var($_POST['tr' . $tr . 'td' . $td], FILTER_SANITIZE_STRING);
              echo '<td>' . $content .'</td>';
          }
          echo '</tr>';
        }

        echo '</table>';
      ?>
    </div>

    <!-- jQuery (потрібно для JavaScript плагінів Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Підключення мінімізованої збірки всіх плагінів jQuery. Можна підключати додаткові плагіни, якщо потрібно -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


