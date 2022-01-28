<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shreyshi Thapliyal</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="icon" href="images/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mansalva&family=Merriweather:ital,wght@1,300&family=Yuji+Hentaigana+Akari&display=swap&family=Montserrat:wght@100;200;300&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="header">
      <div class"nav-brand">
          <a href="index.php"><img class="logo" src="images/logo.jpg"></a>
        </div>

      <div class="head">
        <a class="heads" href="art.php">ART</a>
        <a class="heads" href="insta.php">INSTA</a>
        <a class="heads" href="about.php">ABOUT</a>
        <a class="heads" href="sayhi.php">SAY HI </a>

      </div>
</div>
<div class="container">
  <img id="name" src="images/img1_firstpage.jpg" alt="background img">
  <script type="text/javascript">
    let image=document.getElementById('name');
    let images=['images/img1_firstpage.jpg','images/img2_firstpage.jpg']
    var i=0;

  var renew=  setInterval(function(){
    document.getElementById('name').src=images[i];
    i++;
    if(i==images.length){
      i=0;
    }

  },800);
  </script>
  <h1 class="center-text">SHREYSHI <br>THAPLIYAL</h1>

<div class="endline">
  <p>© 2021 Shreyshi Thapliyal</p>


  </div>
  </div>
  </body>
</html>
