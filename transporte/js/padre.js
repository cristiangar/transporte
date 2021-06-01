
//selectores de los input y botones
const $btnAbrir = document.querySelector("#btnAbrir"),  
$mensajeRecibido = document.querySelector("#cliente");


//funcion que hace para abrir una nueva ventana
let ventana;
$btnAbrir.addEventListener("click", (e) => {
	ventana = window.open("listacliente.php");/**abre la ventana hija */
	e.preventDefault();
});



// funcion que le da un valor al input cliente
function establecerMensaje(mensaje) {
	$mensajeRecibido.value = mensaje;
}
