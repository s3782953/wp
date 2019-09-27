<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 2</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

  <script src='../wireframe.js'></script>
  <script src='script.js'></script>
  <style>
  <?php include("style.css"); // or wherever your css file is located ?>
  </style>

</head>

<body>

  <header class = "header">
    <div class = "inner_header">

      <div class = "logo_container">
        <h1>Lunardo</h1>
        <img src='../../media/Logo.png' alt="Logo" />
      </div>

      <nav class = "navigation">
        <ul class="navigation">
          <a href="#"><li>About Us</li></a>
          <a href="#prices"><li>Prices</li></a>
          <a href="#now_showing"><li>Now Showing</li></a>
          <a href="#synopsis"><li>Synopsis Area</li></a>
          <a href="#booking_container"><li>Booking</li></a>
        </ul>
      </nav>

    </div>
  </header>

  <main>

    <article class = "about_container" id="about_container">
      <section class = "about_content">
        <h1>About Us</h1>
        <h2>Grand Reopening</h2>
        <p>Lunardo’s Cinemas is currently undergoing renovations, but don’t fear… as we are doing
          <br>extensive improvements for a grand reopening, where there are new standards and
          <br>first class reclining seats, Dolby Atmos dynamics sound system are being installed and
          <br>3D Dolby vision will be implemented.</p>
        </section>
      </article>

      <div class= "seating_container">
        <div class = "parallax_wrapper">

          <div class= "parallax_content">
            <h1>Seating Styles</h1>
          </div>

          <div class = "parallax_content_img">
            <div class = "standard">
              <h2>Standard</h2>
              <img src="../../media/Standard.png" alt="Standard" height = 400/>
            </div>
            <div class = "premium">
              <h2>First Class</h2>
              <img src="../../media/First_Class.png" alt="Standard" height = 475/>
            </div>
          </div>

        </div>
      </div>

      <article class = "prices_container" id= "prices">
        <h1>Prices</h1>
        <section class = "prices_content">
          <table style="width: 80%">
            <tr>
              <th>Seat Type</th>
              <th>Seat Code</th>
              <th>All day Monday and Wednesday AND 12pm on Weekdays</th>
              <th>All other times</th>
            </tr>
            <tr>
              <th>Standard Adult</th>
              <th>STA</th>
              <th>$14.00</th>
              <th>$19.80</th>
            </tr>
            <tr>
              <th>Standard Concession</th>
              <th>STP</th>
              <th>$12.50</th>
              <th>$17.50</th>
            </tr>
            <tr>
              <th>Standard Child</th>
              <th>STC</th>
              <th>$11.00</th>
              <th>$15.30</th>
            </tr>
            <tr>
              <th>First Class Adult</th>
              <th>FCA</th>
              <th>$24.00</th>
              <th>$30.00</th>
            </tr>
            <tr>
              <th>First Class Concession</th>
              <th>FCP</th>
              <th>$22.50</th>
              <th>$27.00</th>
            </tr>
            <tr>
              <th>First Class Child</th>
              <th>FCC</th>
              <th>21.00</th>
              <th>24.00</th>
            </tr>
          </table>
        </section>
        <div class="prices_img">
          <form action="">
            <input Name="test" type="image" src="../../media/Women_2.png" height="450px">
          </form>
        </div>

      </article>

      <article class= "showing_container" id= "now_showing">
        <h1>Now Showing</h1>
        <br>
        <h3>Click on the images!</h3>
        <section class= "showing_content">
          <div class= "movie">
            <div class="movie_img">
              <form onsubmit="return false">
                <input type="image" src="../../media/EndGame.jpg" height="450px" onclick="endGame()">
              </form>
            </div>
            <div id=test></div>

            <div class="movie_text">
              <h2 id=title>Avengers: EndGame (PG)</h2>
              <p><br><br>Monday - Not Showing</p>
              <p><br>Tuesday - Not Showing</p>
              <p><br>Wednesday - 9:00pm</p>
              <p><br>Thursday - 9:00pm</p>
              <p><br>Friday - 9:00pm</p>
              <p><br>Saturday - 6:00pm</p>
              <p><br>Sunday - 6:00pm</p>
            </div>
          </div>
          <div class= "movie">
            <div class="movie_img">
              <form onsubmit="return false">
                <input type="image" src="../../media/Top_End_Wedding.jpg" height="450px" onclick="tew()">
              </form>
            </div>

            <div class="movie_text">
              <h2>Top End Wedding (M)</h2>
              <p><br><br>Monday - 6:00pm</p>
              <p><br>Tuesday - 6:00pm</p>
              <p><br>Wednesday - Not Showing</p>
              <p><br>Thursday - Not Showing</p>
              <p><br>Friday - Not Showing</p>
              <p><br>Saturday - 3:00pm</p>
              <p><br>Sunday - 3:00pm</p>
            </div>
          </div>
          <div class= "movie">
            <div class="movie_img">
              <form onsubmit="return false">
                <input type="image" src="../../media/Dumbo.jpg" height="450px" onclick="dumbo()">
              </form>
            </div>

            <div class="movie_text">
              <h2>Dumbo (PG)</h2>
              <p><br><br>Monday - 12:00pm</p>
              <p><br>Tuesday - 12:00pm</p>
              <p><br>Wednesday - 6:00pm</p>
              <p><br>Thursday - 6:00pm</p>
              <p><br>Friday - 6:00pm</p>
              <p><br>Saturday - 12:00pm</p>
              <p><br>Sunday - 12:00pm</p>
            </div>
          </div>
          <div class= "movie">
            <div class="movie_img">
              <form onsubmit="return false">
                <input type="image" src="../../media/The_Happy_Prince.jpg" height="450px" onclick="thp()">
              </form>
            </div>
            <div class="movie_text">
              <h2>The Happy Prince (R)</h2>
              <p><br><br>Monday - Not Showing</p>
              <p><br>Tuesday - Not Showing</p>
              <p><br>Wednesday - 12:00pm</p>
              <p><br>Thursday - 12:00pm</p>
              <p><br>Friday - 12:00pm</p>
              <p><br>Saturday - 9:00pm</p>
              <p><br>Sunday - 9:00pm</p>
            </div>
          </div>

        </section>
      </article>

      <article class= "synopsis_container" id= "synopsis">
        <h1>Synopsis</h1>
        <section class= "synopsis_content">
          <div class= "synopsis_text">
            <h2>Avengers: EndGame (PG)</h2>
            <br>
            <p>Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle. Meanwhile,
              the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished allies
              for an epic showdown with Thanos -- the evil demigod who decimated the planet and the universe.</p>
          </div>
          <div class= "synopsis_video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class= "synopsis_buttons_text">
          <h2>Make a booking: </h2>
        </div>
        <div class= "synopsis_buttons">
          <button>Sun - 6:00pm</button>
          <button>Sat - 6:00pm</button>
          <button>Fri - 9:00pm</button>
          <button>Thu - 9:00pm</button>
          <button>Wed - 9:00pm</button>
          <button>Tue - Not Showing</button>
          <button>Mon - Not Showing</button>

        </div>
      </section>
    </article>

    <article class= "booking_container" id="booking_container">
      <h1>Booking Area</h1>
      <section class= "booking_content">
        <form action="https://titan.csit.rmit.edu.au/~e54061/wp/lunardo-formtest.php" method="post">
          <input type="hidden" name="movie[id]">
          <input type="hidden" name="movie[day]">
          <input type="hidden" name="movie[hour]">
        <div class= "book_left">
          <h2>Movie Title - Day - Time</h2>
          <div class= "Standard">
            <div id="info_left">
              <h3>Standard</h3>
              <br>
              Adult: <select name="seats[STA]">
                <option value="">None</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
              <br><br>
              Concession: <select name="seats[STP]">
                <option value="">None</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
              <br><br>
              Child: <select name="seats[STC]">
                <option value="">None</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
          </div>
          <div class= "First_Class">

            <div id="info_left">
              <h3>First_Class</h3>
              <br>
              Adult: <select name="seats[FCA]">
                <option value="">None</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
              <br><br>
              Concession: <select name="seats[FCP]">
                <option value="">None</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
              <br><br>
              Child: <select name="seats[FCC]">
                <option value="">None</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
          </div>
          <div class= "total">
            Total: $<input type="text" name="total" value="" readonly>
          </div>
        </div>
        <div class= "book_right">
          <div id= "info_right">
            Name: <input type="text" name="cust[name]">
            <br><br>
            Email: <input type="email" name="cust[email]">
            <br><br>
            Mobile: <input type="tel" name="cust[mobile]" pattern="[0-9]">
            <br><br>
            Credit Card: <input type="text" name="cust[card]">
            <br><br>
            Expiry: <input type="month" name="cust[expiry]">
            [Movie]
          </div>
          <div id="submit">
            <input type="submit" value="Order" name="order">
          </div>
        </div>
      </form>
      </section>
    </article>

  </main>

  <footer class= "footer">
    <div>&copy;<script>
    document.write(new Date().getFullYear());
    </script> Danny Viet Nguyen, s3782953 <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
    <div class= "button"><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>

</body>
</html>
