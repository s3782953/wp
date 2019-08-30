<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

    <script src='../wireframe.js'></script>

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
          <a href="https://google.com"><li>About Us</li></a>
          <a><li>Prices</li></a>
          <a><li>Now Showing</li></a>
          <a><li>Synopsis Area</li></a>
        </ul>
      </nav>

      </div>
    </header>

    <main>
      <article class = "about_container">
        <section class = "about_content">
          <h1>About Us</h1>
          <h2>Grand Reopening</h2>
          <p>Lunardo’s Cinemas is currently undergoing renovations, but don’t fear… as we are doing
            <br>extensive improvements for a grand reopening, where there are new standards and
            <br>first class reclining seats, Dolby Atmos dynamics sound system are being installed and
            <br>3D Dolby vision will be implemented.</p>
        </section>
      </article>
      <div class = seating_container>
        <p>Hello</p>
      </div>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Danny Viet Nguyen, s3782953<?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
