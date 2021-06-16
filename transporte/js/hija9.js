const $btnEnviar = document.querySelector("#btnp9"),
	$mensaje = document.querySelector("#P9"),
	
	$mensajeRecibido9 = document.querySelector("#mensajeRecibido9");



	$btnEnviar.addEventListener("click", () => {
	const mensaje =$mensaje.value;
	if (!mensaje) return alert("Escribe un mensaje");
	if (window.opener) {
		window.opener.establecerMensaje9(mensaje);
	}
});


// Definición de función desde la que nos llama el padre
window.establecerMensaje9 = function (mensaje) {
	$mensajeRecibido8.textContent = mensaje;
}

