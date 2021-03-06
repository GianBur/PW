<?php
	session_start();
	include_once './php/config.php';
	if(!isset($_SESSION[$session_name]))
		header("Refresh: 0;url=badlogin.php");  
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>Agenzia Viaggi</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="style/style.css">
  </head>
  <body>
    <div id="container">
    <div id="header_container">
	<div id="logo">
	  <?php
	    include './php/menu.php';
	  ?>	
	</div>
	<div id="login">
		<?php
			include 'login_form.php';
		?>
	</div>
	</div>
      <div id="content_container">
	<div id="content">
		<?php
			include './php/pacchetto.php';
			$pacchetti=new pacchetto('storico',array());
			if($pacchetti->isEmpty())
				echo "<h3>Non hai effettuato alcun viaggio!</h3>";
			else
			$pacchetti->stampa("storico");
		?>
	</div>
	<div id="navigation">
	  	<br>
		<div id='vert_menu'>
			<a href='homepersonale.php'><span>La mia home</span></a>				
			<a href='ordini.php'><span>Le mie prenotazioni</span></a>
			<a href='wish_list.php'><span>I miei desideri</span></a>
			<a href='storico.php' id="selected"><span>I miei viaggi</span></a>
			<a href='gestioneprofilo.php'><span>Il mio profilo</span></a>			
		</div>	  
	</div>
      </div> 
      <div id="footer">
		<?php
	    	include './php/footer.php';
	  	?>
      </div>
    </div>
  </body>
</html>
 
