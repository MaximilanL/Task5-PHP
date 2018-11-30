<?php
if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ){
  $namesArr = explode( ' ', $_POST[ 'name' ] );
  $surName = $namesArr[ 0 ];
  $firstletter=mb_strtoupper($surName[0]);
  $firstName = substr($namesArr[ 1 ], 0, 1);
  $thirdName = substr($namesArr[ 2 ], 0, 1);
  $res = $firstletter.substr($surName, 1). " " .  mb_strtoupper($firstName) . ". " . mb_strtoupper($thirdName).". " ; 
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>PHP-Task 5</title>
  </head>
    <body style="padding: 2%;">     
    <form action="" method="post">
    <input type="text" name="name" placeholder="Иванов Иван Петрович">
    <input type="submit" class="btn btn-primary" value="submit">  
    </form>    
    <?php echo $res; ?>    
  </body>
</html>