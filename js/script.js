var menu = document.getElementById('submenu');
var open = document.getElementById('hamburger');
var close = document.getElementById('close');

function openMenu(){
	open.style.display = "none";
	close.style.display = "block";
	menu.style.display = "block";
}

function closeMenu(){
	open.style.display = "block";
	close.style.display = "none";
	menu.style.display = "none";
}