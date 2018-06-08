//Latest post contents button

var lpbut = document.getElementById("lposts");
var cbut = document.getElementById("comment");

var lp = document.getElementById("latestposts");
var c = document.getElementById("comments");

function clickComment(){
  lp.style.display="none";
  c.style.display="block";
  cbut.classList.toggle="btn-outline-primary";
  cbut.classList.toggle="btn-primary";

 }
 function clickLpost(){
  c.style.display="none";
  lp.style.display="block";
  lp.classList.toggle="btn-outline-primary";
  lp.classList.toggle="btn-primary";
 }