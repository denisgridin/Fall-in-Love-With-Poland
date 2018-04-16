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

//function open_desc(){
//	var desc_info = document.createElement('div');
//	desc_info.className = "desc_info";
//	desc_info.appendChild(document.createTextNode("РАз лваоыд"));
//	desc_info.style.color = "black";
//	desc_info.style.position = "absolute";
//	desc_1.appendChild(desc_info);
//
//	setTimeout(function(){
//		desc_1.removeChild(desc_info);
//	}, 2000);
//}
