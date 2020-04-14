//placeholder
function onClick(element) {
  document.getElementById("img01").src = element.children[0].src;
  document.getElementById("modal_content").style.display = "initial";
}

window.onclick = function(event) {
  if (event.target == card_container) {
    modal_content.style.display = "none";
  }
}
