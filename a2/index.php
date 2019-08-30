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

        <ul class="navigation">
          <a><li>About Us</li></a>
          <a><li>Prices</li></a>
          <a><li>Now Showing</li></a>
          <a><li>Synopsis Area</li></a>
        </ul>
      </div>


    </header>

    <nav>
      <div>Put website navigation links here</div>
    </nav>

    <main>
      <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Put your name(s), student number(s) and group name here. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
