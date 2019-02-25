


      var canvas = document.getElementById("canvas");
      var ctx = canvas.getContext("2d");
      var BB = canvas.getBoundingClientRect();
      var offsetX = BB.left;
      var offsetY = BB.top;
      var WIDTH = canvas.width;
      var HEIGHT = canvas.height;

      // drag related variables
      var dragok = false;
      var startX;
      var startY;


      // an array of objects that define different rectangles
      var rects = [];

      // default configuration of rooms
      //<!--------ROOM ITEMS --------->
      // first row of tables
      rects.push({
      x: 25 - 5,
      y: 25 - 5,
      width: 60,
      height: 30,
      fill: "#394263",
      isDragging: false
      });
      rects.push({
      x: 50 - 30,
      y: 70 - 10,
      width: 60,
      height: 30,
      fill: "#394263",
      isDragging: false
      });
      rects.push({
      x: 70 - 50,
      y: 90 - -10,
      width: 60,
      height: 30,
      fill: "#394263",
      isDragging: false
      });
      rects.push({
      x: 90 - 70,
      y: 110 - -30,
      width: 60,
      height: 30,
      fill: "#394263",
      isDragging: false
      });
      rects.push({
      x: 110 - 90,
      y: 120 - -60,
      width: 60,
      height: 30,
      fill: "#394263",
      isDragging: false
      });

      // second row of tables
      rects.push({
      x: 50 - -45,
      y: 25 - 5,
      width: 60,
      height: 30,
      fill: "#394263",
      isDragging: false
      });
      rects.push({
      x: 70 - -25,
      y: 50 - -10,
      width: 60,
      height: 30,
      fill: "#394263",
      isDragging: false
      });
      rects.push({
      x: 70 - -25,
      y: 90 - -10,
      width: 60,
      height: 30,
      fill: "#394263",
      isDragging: false
      });
      rects.push({
      x: 70 - -25,
      y: 130 - -10,
      width: 60,
      height: 30,
      fill: "#394263",
      isDragging: false
      });
      rects.push({
      x: 70 - -25,
      y: 170 - -10,
      width: 60,
      height: 30,
      fill: "#394263",
      isDragging: false
      });


      // third row of tables
      rects.push({
      x: 120 - -45,
      y: 25 - 5,
      width: 60,
      height: 30,
      fill: "#394263",
      isDragging: false
      });
      rects.push({
      x: 120 - -45,
      y: 65 - 5,
      width: 60,
      height: 30,
      fill: "#394263",
      isDragging: false
      });
      rects.push({
      x: 120 - -45,
      y: 105 - 5,
      width: 60,
      height: 30,
      fill: "#394263",
      isDragging: false
      });
      rects.push({
      x: 120 - -45,
      y: 145 - 5,
      width: 60,
      height: 30,
      fill: "#394263",
      isDragging: false
      });
      rects.push({
      x: 120 - -45,
      y: 185 - 5,
      width: 60,
      height: 30,
      fill: "#394263",
      isDragging: false
      });
      // teachers table
      rects.push({
      x: 65 - -30,
      y: 235 - 15,
      width: 60,
      height: 30,
      fill: "red",
      isDragging: false
      });
      // Projector
      rects.push({
      x: 25 - 5,
      y: 295 - 5,
      width: 60,
      height: 10,
      fill: "#394263",
      isDragging: false
      });
      //Door
      rects.push({
      x: 300 - -45,
      y: 180 - -45,
      width: 5,
      height: 60,
      fill: "green",
      isDragging: false
      });
      // listen for mouse events
      canvas.onmousedown = myDown;
      canvas.onmouseup = myUp;
      canvas.onmousemove = myMove;

      // call to draw the scene
      draw();

      // draw a single rect
      function rect(x, y, w, h) {
        ctx.beginPath();
        ctx.rect(x, y, w, h);
        ctx.closePath();
        ctx.fill();
      }

      // clear the canvas
      function clear() {
        ctx.clearRect(0, 0, WIDTH, HEIGHT);
      }

      // redraw the scene
      function draw() {
      clear();
      ctx.fillStyle = "#FAF7F8";
      rect(0, 0, WIDTH, HEIGHT);
      // redraw each rect in the rects[] array
      for (var i = 0; i < rects.length; i++) {
          var r = rects[i];
          ctx.fillStyle = r.fill;
          rect(r.x, r.y, r.width, r.height);
        }
      }
      // handle mousedown events
      function myDown(e) {

      // tell the browser we're handling this mouse event
      e.preventDefault();
      e.stopPropagation();

      // get the current mouse position
      var mx = parseInt(e.clientX - offsetX);
      var my = parseInt(e.clientY - offsetY);

      // test each rect to see if mouse is inside
      dragok = false;
      for (var i = 0; i < rects.length; i++) {
          var r = rects[i];
          if (mx > r.x && mx < r.x + r.width && my > r.y && my < r.y + r.height) {
              // if yes, set that rects isDragging=true
              dragok = true;
              r.isDragging = true;
          }
      }
      // save the current mouse position
      startX = mx;
      startY = my;
      }
      // handle mouseup events
      function myUp(e) {
      // tell the browser we're handling this mouse event
      e.preventDefault();
      e.stopPropagation();

      // clear all the dragging flags
      dragok = false;
      for (var i = 0; i < rects.length; i++) {
          rects[i].isDragging = false;
          rects[i].noDrag = true;
        }
      }
      // handle mouse moves
      function myMove(e) {
      // if we're dragging anything...
      if (dragok) {

          // tell the browser we're handling this mouse event
          e.preventDefault();
          e.stopPropagation();

          // get the current mouse position
          var mx = parseInt(e.clientX - offsetX);
          var my = parseInt(e.clientY - offsetY);

          // calculate the distance the mouse has moved
          // since the last mousemove
          var dx = mx - startX;
          var dy = my - startY;

          // move each rect that isDragging
          // by the distance the mouse has moved
          // since the last mousemove
          for (var i = 0; i < rects.length; i++) {
              var r = rects[i];
              if (r.isDragging) {
                  r.x += dx;
                  r.y += dy;
              }
          }

          // redraw the scene with the new rect positions
          draw();
          // reset the starting mouse position for the next mousemove
          startX = mx;
          startY = my;
        }
      }
