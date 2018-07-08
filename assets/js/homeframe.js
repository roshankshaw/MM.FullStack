

//Date on top navigation bar
var d = new Date();
var to=d.toString();
var str=to.substr(0,16);
var s=str.replace(" ",", ");

document.getElementById("demo").innerHTML = s;

//Main menu for small screens(<768px)


function menuexpand(x){
	x.classList.toggle("change");
	var y=document.getElementsByClassName("nav-item");
	var i;
	for(i=0;i<y.length;i++)
	{	
		y[i].classList.toggle("show");
	}
}
window.onclick = function(event) {
  if (!event.target.matches('.optionbtn')) {

    var dropdowns = document.getElementsByClassName("nav-item");
    var menuicon = document.getElementsByClassName("optionbtn");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');  
      }  
    }
    if(menuicon[0].classList.contains('change'))
        menuicon[0].classList.remove('change');
  }
}
 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});

//Navbar fixing at the top

window.onscroll = function() {myFunction()};

function myFunction() {
    var navfix=document.getElementsByClassName("navbar");
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        navfix[0].id = "navbar-fixed";
    }
    else{
        navfix[0].id = "";
    }
    
}

