function dropDown() {
  document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}

function convertCanvasToImgElement() {
    var imgElement = ReImg.fromCanvas(document.querySelector('canvas')).toImg();
    var output = document.querySelector('.output');
    output.innerText = '';
    output.appendChild(imgElement);
}
