const $btnEnviar = document.querySelector("#btnR"),
	$mensaje = document.querySelector("#mensajeR"),

	$mensajeRecibido = document.querySelector("#mensajeRecibido");

	$btnEnviar.addEventListener("click", (e) => {
	const mensaje =$mensaje.value;
	if (window.opener) {
		window.opener.establecerMensaje(mensaje);
		e.preventDefault();
	}
});
