<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ugani skrito število</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <?php
  
  $count = isset($_POST['count']) ? $_POST['count'] : 0; 
  
  if (!isset($_POST["guess"])) {
       $sporocilo = "Ugani!";
       $_POST["x"] = rand(0,10);
       
	  } else if ($_POST["guess"] > $_POST["x"]) { //ugib je večji
	      $sporocilo = "Število ".$_POST["guess"]." je previsoko. Poskusi z manjšim številom.";
	  
	  } else if ($_POST["guess"] < $_POST["x"]) { //ugib je manjši
	      $sporocilo = $_POST["guess"]." je prenizko število. Poskusi z večjim.";
  
  } else { 
      $sporocilo = "Čestitke! Število poskusov: ".$count."."; 
          
  }
  $count++;
  ?>
  
  <body>
  
    <!-- /container -->
    <div class="container">
          <div class="header clearfix">
            <h3 class="text-muted">Ugani skrito število</h3>
          </div>
          
          <div class="row informacije">
              <p class="lead text-center">Igra je preprosta. V spremenljivki X je skrito število, ki ga moraš uganit. Namig: Število je večje od 0 in manjše od 11.</p>
          </div>
    
          <div class="jumbotron">
            <h1><?php echo $sporocilo;?></h1> 
            <form action = "index.php" method = "post"> 
            <p>X = <input type="number" name="guess"/></p> 
            <p><input type = "submit" name="oddaj" value="Oddaj" class="btn btn-lg btn-success"/></p>
            <p><input type = "hidden" name = "x" value="<?php echo $_POST["x"]; ?>">
            <input type="hidden" name="count" value="<?php echo $count; ?>"></p>  
            </form> 
            
          </div>
    
          <footer class="footer">
            <p>Smartninja domača naloga "Ugani skrito število" by Nadja</p>
          </footer>
    
        </div> <!-- /container -->
     

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>