
const $btnEnviar = document.querySelector("#btnEnviar"),
	$mensaje = document.querySelector("#mensaje"),

	$mensajeRecibido = document.querySelector("#mensajeRecibido");

	$btnEnviar.addEventListener("click", (e) => {
	const mensaje =$mensaje.value;
	if (window.opener) {
		window.opener.establecerMensaje(mensaje);
		e.preventDefault();
	}
});





