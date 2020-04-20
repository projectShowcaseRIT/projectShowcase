//placeholder
function onClick(element) {
  document.getElementById("img01").src = element.children[0].src;
  document.getElementById("title").innerHTML = element.children[1].children[0].innerHTML;
  document.getElementById("long_desc").innerHTML = element.children[1].children[2].innerHTML;

  //document.getElementById("long_desc").innerHTML = "This has been changed";
  document.getElementById("modal_content").style.display = "grid";
}

window.onclick = function(event) {
  if (event.target == card_container){
    modal_content.style.display = "none";
  }
}
