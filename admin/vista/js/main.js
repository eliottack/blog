$(document).on("ready", inicio);
function inicio ()
{
	$("#perfilcontacto").on("click", formulario);
	$("#perfilfotos").on("click", mostrarfotos);
	$("#modelprofile-next").on("click", masfotos);
	$("#viewpanel").on("click", panel);
	$("#boton_cerrar").on("click", cerrar);
	$("#viewcel").on("click", empresa);
}


function empresa ()
{
	var showcelular =
	{
		opacity: 1,
		display: "inline",
		width: "auto"
	};

	$(".cambiarcelular").css(showcelular);
}


function panel ()
{
	//JSON
	var outindex =
	{
		margin: 0,
		overflow: "hidden",
		padding: 0,
		width: 0,
		height: 0
	};
	var cambiosPanel =
	{
		height: "auto",
		opacity: 1,
		display: "inline"
	};
	$(".panelBuscador2").css(outindex);
	$(".panelBuscador").css(cambiosPanel);
}


function cerrar ()
{
	//JSON
	var outindex =
	{
		margin: 0,
		overflow: "hidden",
		padding: 0,
		width: 0,
		height: 0
	};	
	var ocultarPanel =
	{
		height: "auto",
		opacity: 0,
		display: "none"
	};
	$(".panelBuscador2").css(outindex);
	$(".panelBuscador").css(ocultarPanel);
}


function formulario ()
{
	//JSON
	var pic =
	{
		margin: 0,
		overflow: "hidden",
		padding: 0,
		width: 0,
		height: 0
	};
	//photo2
	var pic2 =
	{
		margin: 0,
		overflow: "hidden",
		padding: 0,
		width: 0,
		height: 0
	};
	var cambiosForm =
	{
		height: "auto",
		opacity: 1,
		width: "100%"
	};
	//JSON color negro a pestaña contacto
	var seleccion =
	{
		background: "black",
		color: "white"
	};
	var seleccion2 =
	{
		background: "rgb(243,243,243)",
		color: "#969696"
	};	
	$(".modelprofile-pic").css(pic);
	$(".modelprofile-pic2").css(pic2);
	$(".modelprofileform").css(cambiosForm);
	$("#perfilcontacto").css(seleccion);
	$("#perfilfotos").css(seleccion2);
}

function mostrarfotos ()
{
	//JSON
	var formulario =
	{
		margin: 0,
		overflow: "hidden",
		padding: 0,
		width: 0,
		height: 0
	};
	var pic2 =
	{
		margin: 0,
		overflow: "hidden",
		padding: 0,
		width: 0,
		height: 0
	};	
	var cambiosPic =
	{
		height: "auto",
		opacity: 1,
		width: "100%"
	};
	//JSON color negro a pestaña fotos
	var seleccion =
	{
		background: "black",
		color: "white"
	};
	var seleccion2 =
	{
		background: "rgb(243,243,243)",
		color: "#969696"
	};	
	$(".modelprofileform").css(formulario);
	$(".modelprofile-pic2").css(pic2);
	$(".modelprofile-pic").css(cambiosPic);
	$("#perfilfotos").css(seleccion);
	$("#perfilcontacto").css(seleccion2);
}

function masfotos ()
{
	//JSON
	var outindex =
	{
		margin: 0,
		overflow: "hidden",
		padding: 0,
		width: 0,
		height: 0
	};
	var cambiosAdministrativo =
	{
		height: "auto",
		opacity: 1,
		width: "100%"
	};
	$(".modelprofile-pic").css(outindex);
	$(".modelprofile-pic2").css(cambiosAdministrativo);
}


function mostrarfotos2 ()
{
	// var fotopuesta =
	// {
	// 	margin: 0,
	// 	overflow: "hidden",
	// 	padding: 0,
	// 	width: 0,
	// 	height: 0
	// };
	var cambiosfotomenu =
	{
		height: "167px",
		opacity: 1,
		width: "auto"
	};

	$("#fotomenu").css(cambiosfotomenu);
	$("#fotomenu div").on("click", cambiarColor);
}

function regresar ()
{
	var menuregresar =
	{
		height: "0",
		opacity: 0,
		width: "auto"
	};

	$("#fotomenu").css(menuregresar);
}

