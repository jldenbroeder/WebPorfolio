function menuOpen() {
  var listButton = document.getElementsByClassName("button");
  for (i = 0; i < listButton.length; i++){
    listButton[i].style.display='block';
  } document.getElementById("hamburger").style.display='none';
}
function menuClose() {
  var listButton = document.getElementsByClassName("button");
  for (i = 0; i < listButton.length; i++){
    listButton[i].style.display='none';
  } 
  document.getElementById("hamburger").style.display='block';
  document.getElementById("hamburger-close").style.display='none';
}