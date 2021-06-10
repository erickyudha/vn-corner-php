<?php
  include "p/_session.php"
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="src/fullpage.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/login.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Kosugi+Maru&family=Montserrat:ital,wght@0,400;0,700;0,800;0,900;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap" rel="stylesheet">


    <style>
      * {
        font-family: 'Montserrat', sans-serif;
        /* font-family: 'Open Sans', sans-serif; */
      }
    </style>
    <link rel="icon" href="img/logo.png">
    <title>VN Corner</title>
  </head>

  <body>
    <div id="fullpage">
      <div class="section">
        <div class="slide">
          <div class="box-wrapper container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="container-fluid" id="navbar-container">
                <a class="navbar-brand" href="#">
                  <img src="img/logo-b.png" style="height: 30px; width: auto; margin-right: 10px;" alt="">
                  VN Corner
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="nav-list">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Search</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Details</a>
                    </li>   
                    
                  </ul>
                  <form class="d-flex search-btn" method="GET" action="p/search.php">
                    <input class="form-control me-2" type="search" name="name" placeholder="Search VN" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                  </form>
                </div>
              </div>
            </nav>  
            <div class="container-fluid rec1">
              <h2 id="rec-text">- n e w&nbsp;&nbsp;r e c o m m e n d a t i o n .</h2>
              <div class="rec-sub-top container-fluid">
                <h1 id="rec-title"></h1>
                <h2 id="rec-title-jp"></h2>
              </div>
              <img id="rec-pic1" alt="" draggable="false">
              <div class="rec-sub-bot container-fluid">
                <div id="rec1-line"></div>
                <h3 id="rec-vndb-link"></h3>
              </div>
              <button class="fp-custom-arrow right" id="s1-1-right" onclick="fullpage_api.moveSlideRight()">
                synopsis
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <div class="slide" data-anchor="synopsis">
          <div class="box-wrapper container-fluid">
            <img id="s1-2-bg" draggable="false" alt="">
            <div class="container-fluid" id="s1-2-content">
              <h1 id="s1-2-title"></h1>
              <h2 id="s1-2-title-jp"></h2>
              <h3 id="synopsis-text">synopsis</h3>
              <div id="synopsis-wrapper">
                <p id="synopsis-rec"></p>
              </div>
              <button class="fp-custom-arrow left" onclick="fullpage_api.moveSlideLeft()">
                <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                </svg>
              </button>
              <button class="fp-custom-arrow right" id="s1-2-right" onclick="fullpage_api.moveSlideRight()">
                <svg style="fill: white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                </svg>
                opening movie
              </button>
            </div>
          </div>
        </div>
        <div class="slide" data-anchor="op">
          <div class="box-wrapper container-fluid">
            <div id="s1-3-content container-fluid">
              <img src="img/s1-3-line.svg" draggable="false" id="s1-3-line" style="height: 100vh; width: 100vw;" alt="">
              <button class="fp-custom-arrow left" id="s1-3-left" onclick="fullpage_api.moveSlideLeft()">
                <svg style="fill: #53cef8" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                </svg>
              </button>
              <h1 id="memory-text">- m e m o r i e s .</h1>
              <div class="container-fluid" id="s1-3-main"></div>
              <h2 id="op-text">OPENING MOVIE</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="section" id="discover-section" onload="loadFullpage()">
          <div class="slide">
            <div class="container-fluid" id="discover-main">
              <div id="discover-img-wrapper">
                <img src="img/aokana.webp" id="discover-main-bg" draggable="false" alt="">
                <h1 id="s1-main-title">
                  <span>DISCOVER NEW</span> <br>
                  Visual Novel
                </h1>
                <button class="fp-custom-arrow right" id="s2-1-right" onclick="fullpage_api.moveSlideRight()">
                  <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                  </svg>
                </button>
              </div>
            </div>
          </div>
      </div>
      <div class="section" id="music-section">
        <div class="slide">
          <div class="container-fluid" id="discover-main">
            <div id="discover-img-wrapper">
              <img src="img/purple-sky.png" id="discover-main-bg" draggable="false" alt="">
              <h1>
                <span>FEATURED</span><br>Music
              </h1>
              <button class="fp-custom-arrow right" id="s2-1-right" onclick="fullpage_api.moveSlideRight()">
                <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                  <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="slide">

          <div class="container-fluid" id="discover-main">
            <div id="discover-img-wrapper">
              <img src="img/konosora-bg.png" id="discover-main-bg" draggable="false" alt="">
              <h1 style="color: black;">
                <span>VISUAL NOVEL</span><br>Quotes
              </h1>
              <button class="fp-custom-arrow right" id="s2-1-right" onclick="fullpage_api.moveSlideRight()">
                <svg style="fill: black;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                  <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                </svg>
              </button>

            </div>
          </div>

        </div>
        <div class="slide">
          <div class="box-wrapper">
            <div class="quote-content">
              <div></div>
              <h1 id="quote-text"></h1>
              <div></div>
              <h2 id="from-text">from:</h2>
              <h3 id="quote-vn-name"></h3>
              <div></div>
              <button onclick="randomQuoteLoader(); quoteAnimation();" class="fp-custom-arrow" id="randomize-quote-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shuffle" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M0 3.5A.5.5 0 0 1 .5 3H1c2.202 0 3.827 1.24 4.874 2.418.49.552.865 1.102 1.126 1.532.26-.43.636-.98 1.126-1.532C9.173 4.24 10.798 3 13 3v1c-1.798 0-3.173 1.01-4.126 2.082A9.624 9.624 0 0 0 7.556 8a9.624 9.624 0 0 0 1.317 1.918C9.828 10.99 11.204 12 13 12v1c-2.202 0-3.827-1.24-4.874-2.418A10.595 10.595 0 0 1 7 9.05c-.26.43-.636.98-1.126 1.532C4.827 11.76 3.202 13 1 13H.5a.5.5 0 0 1 0-1H1c1.798 0 3.173-1.01 4.126-2.082A9.624 9.624 0 0 0 6.444 8a9.624 9.624 0 0 0-1.317-1.918C4.172 5.01 2.796 4 1 4H.5a.5.5 0 0 1-.5-.5z"/>
                  <path d="M13 5.466V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192zm0 9v-3.932a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192z"/>
                </svg>
              </button>
            </div>
            <button class="fp-custom-arrow left" id="quote-content-btn" onclick="fullpage_api.moveSlideLeft()">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#af069d" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
    <script src="src/fullpage.js"></script>
    <script src="script/config.js"></script>
    <script src="script/index.js"></script>  
    <script src="script/load-nav.js"></script>  
  </body>
</html>

<?php
  include "p/nav-login.php";
?>



