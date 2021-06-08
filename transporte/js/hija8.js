const $btnEnviar = document.querySelector("#btnp8"),
	$mensaje = document.querySelector("#P8"),
	
	$mensajeRecibido8 = document.querySelector("#mensajeRecibido8");



	$btnEnviar.addEventListener("click", () => {
	const mensaje =$mensaje.value;
	if (!mensaje) return alert("Escribe un mensaje");
	if (window.opener) {
		window.opener.establecerMensaje8(mensaje);
	}
});


// Definición de función desde la que nos llama el padre
window.establecerMensaje8 = function (mensaje) {
	$mensajeRecibido8.textContent = mensaje;
}

