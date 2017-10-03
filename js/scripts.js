
// Agrega aquí el JS que necesites
$(function() {
/////////////////////////////////////////////////////////////
		$( ".a1" ).click(function function_name () {
			$( ".p1" ).hide('slow/400/fast', function() {
				
			});
			
		});
		$( ".flash" ).click(function function_name () {
			
			if($( ".p1" ).is(":visible") ){
				$(".flash").css("background-color","#3498DB");
				$( ".p1" ).hide('slow/400/fast', function() {
				
			});

			}else{
$( ".p" ).hide('slow/400/fast', function() {});
 $(".m").css("background-color","#3498DB");  
$(".flash").css("background-color","#5FAEE3");
				$( ".p1" ).show('slow/400/fast', function() {
				
			});
			}

		});
//////////////////////////////////////////////////////////////
$( ".a2" ).click(function function_name () {
	$( ".p2" ).hide('slow/400/fast', function() {
				
			});
	});
		$( ".sobremi" ).click(function function_name () {

			if($( ".p2" ).is(":visible") ){
				 $(".sobremi").css("background-color","#3498DB");  
				$( ".p2" ).hide('slow/400/fast', function() {
				
			});

			}else{
				$( ".p" ).hide('slow/400/fast', function() {});
 $(".m").css("background-color","#3498DB");  
 $(".sobremi").css("background-color","#5FAEE3");  
				$( ".p2" ).show('slow/400/fast', function() {
				
			});
			}

			
		});
////////////////////////////////////////////////////////////////////

$( ".a3" ).click(function function_name () {
	$( ".p3" ).hide('slow/400/fast', function() {
				
			});
	});
		$( ".productos" ).click(function function_name () {

			if($( ".p3" ).is(":visible") ){
				  $(".productos").css("background-color","#3498DB");  
				$( ".p3" ).hide('slow/400/fast', function() {
				
			});

			}else{
$( ".p" ).hide('slow/400/fast', function() {});
 $(".m").css("background-color","#3498DB");  
  $(".productos").css("background-color","#5FAEE3");  
				$( ".p3" ).show('slow/400/fast', function() {
				
			});
			}

			
		});
////////////////////////////////////////////////////////////////////
$( ".a4" ).click(function function_name () {
	$( ".p4" ).hide('slow/400/fast', function() {
				
			});
	});
		$( ".servicios" ).click(function function_name () {

			if($( ".p4" ).is(":visible") ){
				$(".servicios").css("background-color","#3498DB");
				$( ".p4" ).hide('slow/400/fast', function() {
				
			});

			}else{
$( ".p" ).hide('slow/400/fast', function() {});
 $(".m").css("background-color","#3498DB");  
$(".servicios").css("background-color","#5FAEE3");
				$( ".p4" ).show('slow/400/fast', function() {
				
			});
			}

			
		});
////////////////////////////////////////////////////////////////////
$( ".a5" ).click(function function_name () {
	$( ".p5" ).hide('slow/400/fast', function() {
				
			});
	});
		$( ".contactar" ).click(function function_name () {

			if($( ".p5" ).is(":visible") ){
				 $(".contactar").css("background-color","#3498DB");
				$( ".p5" ).hide('slow/400/fast', function() {
				
			});

			}else{
$( ".p" ).hide('slow/400/fast', function() {});
				$( ".p5" ).show('slow/400/fast', function() {});
				 $(".m").css("background-color","#3498DB");  
				 $(".contactar").css("background-color","#5FAEE3");
			}

			
		});
////////////////////////////////////////////////////////////////////
 if(window.location.href.indexOf("#") == -1) // si contiene no ese catarcter la url
     {    
setTimeout(function() {
      $(".flash").click();
     }, 0);
setTimeout(function() {
      $(".sobremi").click();
     }, 2000);
setTimeout(function() {
      $(".productos").click();
     }, 4000);
setTimeout(function() {
      $(".servicios").click();
     }, 6000);
setTimeout(function() {
      $(".contactar").click();
     }, 8000);


 }
     if(window.location.href.indexOf("index") != -1) // si contiene ese catarcter la url
     {    
      $(".flash").click();
 	}else if(window.location.href.indexOf("sobremi") != -1) // si contiene ese catarcter la url
     {    
      $(".sobremi").click();
 	}else if(window.location.href.indexOf("productos") != -1) // si contiene ese catarcter la url
     {    
      $(".productos").click();
 	}else if(window.location.href.indexOf("servicios") != -1) // si contiene ese catarcter la url
     {    
      $(".servicios").click();
 	}else if(window.location.href.indexOf("contactar") != -1) // si contiene ese catarcter la url
     {    
      $(".contactar").click();
 	}

});

