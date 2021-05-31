const $btnAbrir = document.querySelector("#btnAbrir"),
    $mensajeRecibido = document.querySelector("#mensajeRecibido");
    $mensajeRecibido2 = document.querySelector("#mensajeRecibido2");/**recibe el mensaje */

let ventana;
$btnAbrir.addEventListener("click", () => {
	ventana = window.open("pruebacliente.php");/**abre la ventana hija */
});


// Llamada desde la hija
function establecerMensaje(mensaje) {
	$mensajeRecibido.textContent = mensaje;
}

function establecerMensaje2(mensaje2) {
	$mensajeRecibido2.value = mensaje2;
}