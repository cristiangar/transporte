const boton = document.querySelector("#boton7"),
	  boton8 = document.querySelector("#boton8"),
	  boton3 = document.querySelector("#boton3"),
	  boton4 = document.querySelector("#boton4"),
	  boton5 = document.querySelector("#boton5"),
	  boton6 = document.querySelector("#boton6");
	  //boton7 = document.querySelector("#boton7"),;//declaro las variables de los botones para abrir ventanas

const $mensajeRecibido7=document.querySelector("#pagina7"),
	   $mensajeRecibido8=document.querySelector("#pagina8"),
	   $mensajeRecibido3=document.querySelector("#pagina3"),
	   $mensajeRecibido4=document.querySelector("#pagina4"),
	   $mensajeRecibido5=document.querySelector("#pagina5"),
	   $mensajeRecibido6=document.querySelector("#pagina6");
	   //$mensajeRecibido7=document.querySelector("#pagina7");//declaro los input que voy a llenar


let ventana7,ventana8,ventana3,ventana4,ventana5,ventana6;//declaro ventanas
boton.addEventListener("click", (e) =>{
	// Agregar listener
	// Aquí todo el código que se ejecuta cuando se da click al botón
	ventana7=window.open("listaclienteencabezado.php","miwin","width=1167,height=568,top=150px,left=250px,scrollbars=yes")
	e.preventDefault();
});
boton8.addEventListener("click",(e) =>{
	ventana8=window.open("listaenvio.php","miwin","width=1167,height=568,top=150px,left=250px,scrollbars=yes")
	e.preventDefault();	
});
boton3.addEventListener("click",(e) =>{
	ventana3=window.open("listavehiculo.php","miwin","width=1167,height=568,top=150px,left=250px,scrollbars=yes")
	e.preventDefault();
});
boton4.addEventListener("click",(e) =>{
	ventana4=window.open("listaplataforma.php","miwin","width=1167,height=568,top=150px,left=250px,scrollbars=yes")
	e.preventDefault();
});
boton5.addEventListener("click",(e) =>{
	ventana5=window.open("listapiloto.php","miwin","width=1167,height=568,top=150px,left=250px,scrollbars=yes")
	e.preventDefault();
});
boton6.addEventListener("click",(e) =>{
	ventana6=window.open("listaasignadopiloto.php","miwin","width=1167,height=568,top=150px,left=250px,scrollbars=yes")
	e.preventDefault();
});
/*boton7.addEventListener("click",(e) =>{
	ventana7=window.open("listaclienteencabezado.php","miwin","width=1167,height=568,top=150px,left=250px,scrollbars=yes")
	e.preventDefault();
});*/

// funcion que le da un valor al input cliente
function establecerMensaje7(mensaje) {
	$mensajeRecibido7.value = mensaje;
}

function establecerMensaje8(mensaje) {
	$mensajeRecibido8.value = mensaje;
}

function establecerMensaje3(mensaje) {
	$mensajeRecibido3.value = mensaje;
}

function establecerMensaje4(mensaje) {
	$mensajeRecibido4.value = mensaje;
}

function establecerMensaje5(mensaje) {
	$mensajeRecibido5.value = mensaje;
}

function establecerMensaje6(mensaje) {
	$mensajeRecibido6.value = mensaje;
}
/*function establecerMensaje7(mensaje) {
	$mensajeRecibido7.value = mensaje;
}*/