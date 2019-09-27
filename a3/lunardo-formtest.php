

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Assignment Form Processing</title>
  <style>
    html {
      background-image:url('/~e54061/img/card-back-green.png');
      padding:0px;
      margin:0px;
      font-family:monospace;
      font-size:1.3em;
      color:#111;
      height:100%;
    }
    body {
      background-color:#fff;
      width:90%;
      min-height:90%;
      min-width:600px;
      margin:10px auto;
      padding:20px;
      box-shadow: 0 0 10px #000;
      border-radius: 10px;
    }
    a,
    p span,
    h4 span,
    pre { color: #2d0482; }
    .r  { color: #400; }
    .g  { color: #040; }
    h1  { text-align: center; }
    h1, h2, form { margin:10px; }
    p,ol,pre {margin-left:30px; word-wrap: break-word; white-space: pre-wrap;}
  </style>
</head>
<body ondblclick="window.scrollTo(0,0);">
  <div>

    <h1>&star; Web Programming Form Tester &star;</h1>
    <hr><h2>Error: No Referer</h2><p>No referring page was supplied. This processing script provides detailed advice when submitted from a web form.</p>    <hr/>
    <details>
      <summary>More Details on your $_POST and $_GET data</summary>
      <h2>&lt;form method='post' ... &gt;</h2>
      <p><span>Nothing has been submitted using the post method.</span></p>      <h2>&lt;/form&gt;</h2>
      <hr/>

      <h2>&lt;form method='get' ... &gt;</h2>
      <p><span>Nothing has been submitted using the get method.</span>      <h2>&lt;/form&gt;</h2>
    </details> 
    <hr style="margin-bottom:50px;"/>

  </div>
</body>
</html>