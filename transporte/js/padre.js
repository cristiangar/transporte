const $btnAbrir = document.querySelector("#btnAbrir"),
    $mensajeRecibido = document.querySelector("#cliente");
    $mensajeRecibido2 = document.querySelector("#cliente");/**recibe el mensaje */

let ventana;
$btnAbrir.addEventListener("click", () => {
	ventana = window.open("listacliente.php");/**abre la ventana hija */
});


// Llamada desde la hija
function establecerMensaje(mensaje) {
	$mensajeRecibido.value = mensaje;
}

function establecerMensaje2(mensaje2) {
	$mensajeRecibido2.value = mensaje2;
}