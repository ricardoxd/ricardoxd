		<?php
$cars = array
  (
  array("a","SIA","Sistema Web","img/sia.png"),
  array("b","SAPLB","Sistema de Escritorio Multiplataforma","img/saplb.png"),
  array("c","RadioMontaña3","Radio Web Online<a href='http://www.radiomontana3.net/' class=' btn  btn-info'>ir</a>","img/radio.png"),
  array("d","AlbumRobinsonJose","Album CD Online<a href='http://www.robinsonjose.com/' class=' btn  btn-info'>ir</a>","img/album.png"),
  array("e","ChessDJ","Blog Personal Pasatiempo Online<a href='http://chessdj.jimdo.com/' class=' btn  btn-info'>ir</a>","img/pasatiempo.png") 

  );
 $paginas = array
  (
  array("y","contacto","Contactar","","
  Actualmente soy estudiante de Ingenieria en informatica en el Instituto Universitario de Tecnologia de Yaracuy y soy desarrollador y diseñador tanto web
  como de plataformas 
  <br/>
 <a href='http://www.linkedin.com/pub/ricardo-ordo%C3%B1ez/35/899/155'><img src='img/in.png' style='margin: 0px auto; width: 10%;'></a>
 <a href='https://www.facebook.com/ricardoxd'><img src='img/fb.png' style='margin: 0px auto; width: 10%;'></a>
 <a href='https://twitter.com/RicardoOrdonezO'><img src='img/tw.jpg' style='margin: 0px auto; width: 10%;'></a>
 
  
  "),
  array("z","inicio","Inicio","","")
  ); 
  
  
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Ricardo XD</title>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="estilo.css" rel="stylesheet" />
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script>
 
$(function() {

/*$( "#menu" ).menu();*/


<?php
for($i=0;$i<count($cars);$i++){
echo '
$( ".'.$cars[$i][0].'" ).click(function() {
';
						echo'	quitarTodo();';
echo '
$( ".'.$cars[$i][0].'papel" ).show();
$( ".'.$cars[$i][0].'papel" ).css({animation: "cambiar 1s"});
});
'
;
}
?>
<?php
for($x=0;$x<count($paginas);$x++){
echo '
$( ".'.$paginas[$x][0].'" ).mouseover(function() {
';
						echo'	quitarTodo();';
echo '
$( ".'.$paginas[$x][0].'papel" ).show();
$( ".'.$paginas[$x][0].'papel" ).css({animation: "cambiar 1s"});
});
'
;
}
?>
function quitarTodo(){
	<?php
for($e=0;$e<count($cars);$e++){
							echo '
							$( ".'.$cars[$e][0].'papel" ).hide();
							$( ".'.$cars[$e][0].'papel" ).css({animation: ""});
							';
							}
for($e=0;$e<count($paginas);$e++){
							echo '
							$( ".'.$paginas[$e][0].'papel" ).hide();
							$( ".'.$paginas[$e][0].'papel" ).css({animation: ""});
							';
							}	
?>					
}


$( ".desplegar" ).click(function() {
abrir();
});
$( ".desplegarI" ).click(function() {
abrirI();
});
function abrir(){
 if (!$( "#derecha" ).is(':visible') ) {
        $( "#derecha" ).show();
		$( ".desplegar" ).css('background-color', 'none repeat scroll 0% 0% rgba(206, 206, 206, 1)');
    } else {
      $( "#derecha" ).hide();
    }
}
function abrirI(){
 if (!$( "#izquierda" ).is(':visible') ) {
        $( "#izquierda" ).show();
		$( ".desplegarI" ).css('background-color', 'none repeat scroll 0% 0% rgba(206, 206, 206, 1)');
    } else {
      $( "#izquierda" ).hide();
    }
}
});
function cambiar(){
		if ($( ".apapel" ).is(':visible') ) {
			alert("v");
			$( ".apapel" ).hide();
			$( ".bpapel" ).hide();
	} else {
				alert("aa");	
		}
		
}





</script>
<style>
.ui-menu { width: 150px; }
</style>
</head>

<body>


	 <header id="superior">
	 
		<hgroup>
				<h1>Ricardo Ordoñez (RicardoXD)</h1><h2>Programación y diseño</h2>
				
		</hgroup>
		<a href="#!" class="desplegarI btn btn-primary">Redes</a>
		<a href="http://ricardoxd.zz.mu/blog/" class="btn desplegarIB btn-primary" style="margin-left: 75px;">Blog</a>
		<a href="#!" class="desplegar btn btn-primary">Menu</a>
	<div id="menuX">	
<?php
while (list($clave, $valor) = each($cars)) {
	echo '
	<a href="#!'.$valor[1].'" class="'.$valor[0].' btn  btn-primary">'.$valor[1].'</a>							
	';
}
?>


</div>
	
	
		
	  </header>
	  <aside id="izquierda">
			<!-- Facebook Badge START --><a href="https://www.facebook.com/ricardoxd" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" title="Ricardo Ordo&#xf1;ez">Ricardo Ordo&#xf1;ez</a><br/><a href="https://www.facebook.com/ricardoxd" target="_TOP" title="Ricardo Ordo&#xf1;ez"><img src="https://badge.facebook.com/badge/1614780440.716.715429682.png" style="border: 0px;" /></a><!-- Facebook Badge END -->	
	
<br/>
  <a class="twitter-timeline"  href="https://twitter.com/RicardoOrdonezO"  data-widget-id="416771009371324416">Tweets por @RicardoOrdonezO</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


 
		
		</aside>
						  <div id="fondo">
							
							
<?php



for($i=0;$i<count($cars);$i++){
	echo '
	<div id="papel" class="'.$cars[$i][0].'papel">
							<h3  style="text-align:center;">'.$cars[$i][2].' </h3>
							
		';					
				if(!$cars[$i][3]=="")			
						echo '	<img src="'.$cars[$i][3].'" style="margin: 0px auto; width: 100%;">';
						else echo $cars[$i][4];
							
	echo '						
							</div>
	
	';
}


for($i=0;$i<count($paginas);$i++){
 //   echo "$clave => $valor\n";
	echo '
	<div id="papel" class="'.$paginas[$i][0].'papel">
							<h3  style="text-align:center;">'.$paginas[$i][2].' </h3>
							
		';					
				if(!$paginas[$i][3]=="")			
						echo '	<img src="'.$paginas[$i][3].'" style="margin: 0px auto; width: 100%;">';
						else echo $paginas[$i][4];
							
	echo '						
							</div>
	
	';
}
?>

						
							
							
							
							
									<div id="piso">
									</div>
									
									
									
							</div>

   <aside id="derecha">
 

<nav>
 <ul id="menuY">
 
<li class="btn btn-primary"><a href="#" class="z">Inicio</a></li>
<li><a href="#!contacto" class="y btn btn-primary">Contacto</a></li>
<li><a class="btn btn-primary" href="#">Proyectos</a>

<ul>
<li class="btn btn-primary"><a href="#">Web</a></li>
<li><a class="btn btn-primary" href="#">Escritorio</a></li>
<li><a class="btn btn-primary" href="#">Movil</a></li>
</ul>

</li>

</ul>
</nav>
	 			
		</aside>

<footer id="inferior">Copyright 2013</footer>
 
</body>
</html>
