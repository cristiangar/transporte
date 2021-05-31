const $btnEnviar = document.querySelector("#btnEnviar"),
	$mensaje = document.querySelector("#mensaje"),
    $mensaje2=document.querySelector("#mensaje2"),/**segundo input */
	$mensajeRecibido = document.querySelector("#mensajeRecibido");
$btnEnviar.addEventListener("click", () => {
	const mensaje =$mensaje.value;
    const mensaje2=$mensaje2.value;/*mensaje del input*/ 
	if (!mensaje) return alert("Escribe un mensaje");
	if (window.opener) {
		window.opener.establecerMensaje(mensaje);
        window.opener.establecerMensaje2(mensaje2);/**mensaje a mandar al padre */
	}
});


// Definición de función desde la que nos llama el padre
window.establecerMensaje = function (mensaje) {
	$mensajeRecibido.textContent = mensaje;
}

