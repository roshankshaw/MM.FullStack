var menu = document.getElementById('menu'),
    panelMenu = menu.querySelectorAll('li'),
    panelBoxes = document.querySelectorAll('.panel__box'),
    signUp = document.getElementById('signUp'),
    signIn = document.getElementById('signIn');

function removeSelection(){
    for(var i = 0, len = panelBoxes.length; i < len; i++){panelBoxes[i].classList.remove('active');
    }
}


signIn.onclick = function(e){
  e.preventDefault();
  removeSelection();
  panelBoxes[0].classList.add('active');
  menu.classList.remove('second-box');
}

signUp.onclick = function(e){
  e.preventDefault();
  removeSelection();
  panelBoxes[1].classList.add('active');
  menu.classList.add('second-box');
}


// modal Properties


// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var modalContent = document.getElementsByClassName('modal_prop');
var modalImg = document.getElementById("button");
var captionText = document.getElementById("caption");
modalImg.onclick = function(){
    modal.style.display = "block";
    var i;
    for(i=0;i<modalContent.length:i++)
    {
      modalContent[i].style.display="block";
    }
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}