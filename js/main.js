var x = document.getElementById("cart");
var y = document.getElementById("summary");
var z = document.getElementById("btn");


function summary()
{
	x.style.left = "-400px";
	y.style.left = "50px"
	z.style.left = "150px"
}

function cart()
{
	x.style.left = "50px";
	y.style.left = "450px"
	z.style.left = "0px"
}



function onClickMenu(){
	document.getElementById("menu").classList.toggle("change");
	document.getElementById("nav").classList.toggle("change");
	
	document.getElementById("menu-bg").classList.toggle("change-bg");
}



