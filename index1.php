<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meditation App</title>
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./style2.css" />
  </head>
  <body>
    <div class="app">
      <div class="vid-container">
        <video loop>
          <source src="./video/rain.mp4" type="video/mp4" />
        </video>
      </div>
      <div class="time-select">
        <button data-time="120">2 Minutes</button>
        <button data-time="300" class="medium-mins">5 Minutes</button>
        <button data-time="600" class="long-mins">10 Minutes</button>
      </div>
      <div class="player-container">
        <audio class="song">
          <source src="./sounds/rain.mp3" />
        </audio>
        <img src="./svg/play.svg" class="play"></img>
        <svg class="track-outline" width="453" height="453" viewBox="0 0 453 453" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="226.5" cy="226.5" r="216.5" stroke="white" stroke-width="20"/>
        </svg>
        <svg class="moving-outline" width="453" height="453" viewBox="0 0 453 453" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="226.5" cy="226.5" r="216.5" stroke="#018EBA" stroke-width="20"/>
        </svg>
         <img src="./svg/replay.svg" class="replay"></img>
         <h3 class="time-display">0:00</h3>
      </div>
      <div class="sound-picker">
        <button data-sound="./sounds/rain.mp3" data-video="./video/rain.mp4" ><img src="./svg/rain.svg" alt=""></button>
        <button data-sound="./sounds/beach.mp3" data-video="./video/beach.mp4"><img src="./svg/beach.svg" alt=""></button>
      </div>
      <a href="logout.php">Logout</a>
    </div>
    <script src="app.js"></script>
  </body>
</html>
