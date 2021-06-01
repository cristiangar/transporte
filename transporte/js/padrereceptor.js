const 
$btnReceptor=document.querySelector("#btnreceptor"),
$mensajeRecibido=document.querySelector("#receptor");

let Vreceptor;
$btnReceptor=document.addEventListener("click",(e) =>{
	Vreceptor= window.open("listareceptor.php")
	e.preventDefault();
})

function establecerMensaje(mensaje) {
	$mensajeRecibido.value = mensaje;
}