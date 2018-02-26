
// Solo permite ingresar numeros.

function soloNumeros(e){

	var key = window.Event ? e.which : e.keyCode

	return ((key >= 48 && key <= 57) || (key==08))

}


function soloLetras(e){

	var key = window.Event ? e.which : e.keyCode

	return ((key >= 65 && key <= 90) || (key==08) || (key>=97 && key <=122) || (key==32))

}




