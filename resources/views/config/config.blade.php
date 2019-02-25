
<a href="{{ route ('home') }}">Vend tilbage til Dashboardet..</a>
      <center>
        <div>
          <h3>Drag the tables around (blue squares in the grid)</h3>
          <h4>Du Konfigurere nu lokale: UVx.x.x.x's </h4>
          <h4></h4>
          <canvas id="canvas" width=350 height=300  style="border: 1px solid #394263;"></canvas>
          <br>
          <button method="post" onclick="convertCanvasToImgElement()">Finish Configuration</button>

          </p>

          <div style="color: black">
            <h3>Information Needed</h3>

            <p>Room size H: W:</p>
            <p>How many tables = 1 table = 2 pupils</p>
          </div>
          <div class="output"></div>
        </div>
      </center>
<script src="{{ URL::to('js/config.js')}}" charset="utf-8"></script>
