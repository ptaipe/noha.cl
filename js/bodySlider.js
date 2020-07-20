
// arreglo de imagenes
var fondos = ['imagenes/fondo2.jpg','imagenes/fondo5.jpg','imagenes/revision.jpg','imagenes/cajaenvios.jpg','imagenes/envios.jpg','imagenes/regalos.jpg'];
var fondo_actual = 0;

// aqui hacemos la rotación
var CambiarFondo = function()
{
	if (fondo_actual == fondos.length) 
	{
		fondo_actual = 0;
	}
	var precargar =fondo_actual++;
	var precargar2 = precargar+2;	
	// cambiamos el background del body
	document.body.style.backgroundImage = 'url('+ fondos[precargar]+ ')';
	// cargamos en el div no visible "#precarga" la imagen siguiente que se cargará en el body
	// para ya tenerla en la cache, comenzamos con la imagen 3, ya que la 1 y 2 las tenemos en el css
	document.getElementById('precarga').style.backgroundImage =  'url('+fondos[precargar2]+ ')';
}
	//aqui defino el tiempo de cambios de imagenes 1000 = 1 segundo
window.setInterval(CambiarFondo, 8000); 



