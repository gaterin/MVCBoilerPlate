<?php
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body >
    <div class="row">



    <nav>
      <div class="nav-wrapper">
        <div class="container">
        <a href="../Home/showHome"> <i class="fas fa-tools icon"></i><span style=>ToolsForEver </span> </a>
        <ul id="nav" class="right">
        <li><a href="../Locations/showLocations">Locations</a></li>
        <li><a href="../Products/showProducts">Products</a></li>
        <li><a href="../Stock/showAllStock">Stock</a></li>



        </div>
      </ul>
      </div>
    </nav>
    <div class="container">
    <?php if(!isset($_SESSION['loggedInAs'])){ ?>

  <form action="../Login/login" method="post">
    <input style="width:10%" type="text" name="username">
    <input style="width:10%" type="password" name="password">
    <input style="width:10%" type="submit" value="Login">
  </form>
<?php }else{ ?>
<h5>Hello <?php echo $_SESSION['loggedInAs'] ?></h5>
<form action="../login/logout" method="post">
<input type="submit" value="logout">
</form>
<?php } ?>
