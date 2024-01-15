<?php include 'header.php'; ?>

<div class="home">
  <div class="container">

    <h2>Welcome User! <?php echo $_GET[$studentName] ?></h2>

    <div class="next-class">
      <div class="next-class-info">
        <h5 class="next-class-title">Your next class</h5>
        <p class="next-class-subheading"><span>Web Interface Programming</span> <br> by Peter Oberlander</p>
        <ul>
          <li>Time: 10:30am - 13:00pm</li>
          <li>Location: Online (Zoom)</li>
        </ul>
      </div>
      <img class="play-icon" loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/850ecf638838cd8cd7646650c99f5ba2348520b7f99c2981bd555944c8f1a623?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&" class="img-2" />
    </div>

    <div class="assignments-due">
      <div class="assignments-due-info">
        <h5 class="assignments-due-title">Assignments due</h5>
        <p class="assignments-due-subheading"><span>Digital Media Processing</span> <br> by Nikolaos Galanogeorgos</p>
        <ul>
          <li>Edit and enhance a digital image using Photoshop. Submission due on 01/14/2024</li>
          <li>Location: Online (Zoom)</li>
        </ul>
      </div>
      <img class="danger-icon" loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/e5e713800c8b22a9b989b22bd8d8780b02cc34a2b59b99bef630a12b702434e1?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5e713800c8b22a9b989b22bd8d8780b02cc34a2b59b99bef630a12b702434e1?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5e713800c8b22a9b989b22bd8d8780b02cc34a2b59b99bef630a12b702434e1?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5e713800c8b22a9b989b22bd8d8780b02cc34a2b59b99bef630a12b702434e1?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5e713800c8b22a9b989b22bd8d8780b02cc34a2b59b99bef630a12b702434e1?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5e713800c8b22a9b989b22bd8d8780b02cc34a2b59b99bef630a12b702434e1?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5e713800c8b22a9b989b22bd8d8780b02cc34a2b59b99bef630a12b702434e1?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5e713800c8b22a9b989b22bd8d8780b02cc34a2b59b99bef630a12b702434e1?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&" class="img-3" />
    </div>

    <div class="grid-container">
      <div class="card">
        <div class="title">
          <h5>Applied UI/UX Design</h5>
          <br>
          <p>by Bruce Norton</p>
          <br>
          <a class="link">See course outline</a>
        </div>
      </div>

      <div class="card">
        <div class="title">
          <h5>Web Interface Programming</h5>
          <br>
          <p>by Peter Oberlander</p>
          <br>
          <a class="link">See course outline</a>
        </div>
      </div>

      <div class="card">
        <div class="title">
          <h5>Website Creation & Design</h5>
          <br>
          <p>by Jorge</p>
          <br>
          <a class="link">See course outline</a>
        </div>

      </div>

      <div class="card">
        <div class="title">
          <h5>Digital Media Processing</h5>
          <br>
          <p>by Nikolaos</p>
          <br>
          <a class="link">See course outline</a>
        </div>
      </div>

      <div class="card">
        <div class="title">
          <h5>Dynamic Web Programming</h5>
          <br>
          <p>by Bruce Norton</p>
          <br>
          <a class="link">See course outline</a>
        </div>
      </div>
    </div>
  </div>

</div>

<?php include 'footer.php'; ?>