const $btnAbrir = document.querySelector("#btnAbrir"),
	$mensaje = document.querySelector("#mensaje"),
	$btnEnviarMensaje = document.querySelector("#btnEnviarMensaje"),
	
    $mensajeRecibido = document.querySelector("#mensajeRecibido");
    $mensajeRecibido2 = document.querySelector("#mensajeRecibido2");/**recibe el mensaje */

let ventana;
$btnAbrir.addEventListener("click", () => {
	ventana = window.open("pruebacliente.php");/**abre la ventana hija */
});

$btnEnviarMensaje.addEventListener("click", () => {
	let mensaje = '12312'/*$mensaje.value*/;
	if (!mensaje) {
		return;
	}
	if (ventana) {
		ventana.establecerMensaje(mensaje);
	}
});

// Llamada desde la hija
function establecerMensaje(mensaje) {
	$mensajeRecibido.textContent = mensaje;
}

function establecerMensaje2(mensaje2) {
	$mensajeRecibido2.textContent = mensaje2;
}