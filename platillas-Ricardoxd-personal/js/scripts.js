
// Agrega aquí el JS que necesites
$(function() {




		$( "#arriba" ).click(function  () {
			 quitar();
		});
		$( ".flash" ).click(function  () {
			$( "#presentacion" ).show('slow/400/fast', function() {
				
			});
		});

setTimeout(function(){
 quitar();
}, 4000);

function quitar () {
	$( "#presentacion" ).hide('slow/400/fast', function() {				
			});
}

});

