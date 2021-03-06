<?php
 	session_start();
 	include_once './php/config.php';
 	if(!isset($_SESSION[$session_name])|| $_SESSION['username']!='agenzia')
 	header("Refresh: 0;url=badlogin.php");  
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
            "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <title>Agenzia Viaggi</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="./style/style.css">
    <script src="./js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="./js/ajax.js"></script>
    <script>
      $(document).ready(function(){
	recupera_destinazioni();
      }); 
    </script>
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
	<div class="sottomenu_modifica">
	  <button type="button" onclick="location.href='gestionepacchetto.php'">Gestione pacchetto</button>
	  <button type="button" onclick="location.href='gestionedestinazione.php'">Gestione destinazione</button>
	  <button type="button" onclick="location.href='gestionetrasporto.php'">Gestione trasporto</button>
	  <button type="button" onclick="location.href='gestionepernottamento.php'">Gestione pernottamento</button>
	  <button type="button" class="bottone_sottomenu" onclick="location.href='gestioneattrazione.php'">Gestione attrazione</button>
	</div>
	<h2>Gestione attrazioni</h2>
	<h3>Seleziona destinazione</h3>
	<select id="destinazione" class="input" onchange="aggiorna_attrazioni2()" name="destinazione">
	</select>
	<br>
	<br>
	<!--modifica trasporto-->
    	<h3 style="height:5px;">Modifica/Elimina</h3>
	  <table>
	  <tr>
	    <td><h4>Seleziona</h4></td>
    	
        <td style="padding-left: 50px;"><h4>Opzioni</h4></td>
      </tr>
	  <tr>
	    <td><select class="packet_options_select" id="lista_attrazioni" onchange="aggiorna_opzioni_attrazione()" size="8">
	    </select></td>
	    <td style="padding-left: 50px;">
        	<table>
           	<tr><td>Tipologia:</td><td><input type="text" class="input" id="tipologia_mod" name="tipologia_mod"></td></tr>
            <tr><td>Prezzo:</td><td><input type="text" class="input" style="width:60px; text-align:center;" id="prezzo_mod" name="prezzo">€</td></tr>
       		</table>
       </td>
	  </tr>
	  <tr>
	   	<td><button type="button" id="btn_modifica" class="btn_commenta" onclick="elimina_attrazione()">Elimina attrazione</button></td>
		<td style="padding-left: 50px;"><button type="button" id="btn_modifica" class="btn_commenta" onclick="mod_attrazione()">Modifica attrazione</button></td>
      </tr>
	  </table>
	
	
	<table>
	<tr>
	<td><h3>Aggiungi</h3></td>
	</tr>
	<tr>
	  <td>Tipologia:<td>
	</tr>
	<tr>
	    <td><input type="text" class="input" id="tipologia" name="tipologia"></td>
	</tr>
	<tr>
	  <td>Prezzo:</td>
	</tr>
	<tr>
	  <td><input type="text" class="input" style="width:60px; text-align:center;" id="prezzo" name="prezzo">€</td>
	</tr>
	<tr>
	<td><button type="button" class="btn_commenta" onclick="agg_attrazione()">Salva attrazione</button></td>
	</tr>
	</table>
	
    <br>
	</div>
	<div id="navigation">
	  <br>
	  <div id='vert_menu'>
	    <a href='gestionepacchetto.php'><span>Gestione pacchetti</span></a>			
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
 

 
 
