var canvas = document.querySelector('canvas')
var ctx = canvas.getContext('2d');
var reader = new FileReader();

  // event handler for the save button
  document.getElementById('save').addEventListener('click', function () {
    // retrieve the canvas data
    var canvasContents = canvas.toDataURL(); // a data URL of the current canvas image
    var data = { image: canvasContents, date: Date.now() };
    var string = JSON.stringify(data);

    // create a blob object representing the data as a JSON string
    var file = new Blob([string], {
      type: 'application/json'
    });

    // trigger a click event on an <a> tag to open the file explorer
    var a = document.createElement('a');
    a.href = URL.createObjectURL(file);
    a.download = 'data.json';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
  });

  // event handler for the load button
  document.getElementById('load').addEventListener('change', function () {
    if (this.files[0]) {
      // read the contents of the first file in the <input type="file">
      reader.readAsText(this.files[0]);
    }
  });

  // this function executes when the contents of the file have been fetched
  reader.onload = function () {
    var data = JSON.parse(reader.result);
    var image = new Image();
    image.onload = function () {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      ctx.drawImage(image, 0, 0); // draw the new image to the screen
    }
    image.src = data.image; // data.image contains the data URL
  };
