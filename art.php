<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shreyshi Thpliyal | ART</title>
    <link rel="stylesheet" href="css/art.css">
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

  <div class="gallery-container w-3 h-2">
    <div class="gallery-item">
      <div class="images"><img src="images/img1.jpg" alt="Photo1">
      </div>
      <div class="title">Lacuna</div>
    </div>
  </div>

  <div class="gallery-container w-3">
    <div class="gallery-item">
      <div class="images"><img src="images/img2.jpg" alt="Photo2">
      </div>
      <div class="title">Silence</div>
    </div>
  </div>

  <div class="gallery-container">
    <div class="gallery-item">
      <div class="images"><img src="images/img3.jpg" alt="Photo3">
      </div>
      <div class="title">Bunny Girl Senpai</div>
    </div>
  </div>

  <div class="gallery-container">
    <div class="gallery-item">
      <div class="images"><img src="images/img4.jpg" alt="Photo4">
      </div>
      <div class="title">Zero Two</div>
    </div>
  </div>

  <div class="gallery-container">
    <div class="gallery-item">
      <div class="images"><img src="images/img5.jpg" alt="Photo5">
      </div>
      <div class="title">Rika Kawai</div>
    </div>
  </div>

  <div class="gallery-container h-3 w-4">
    <div class="gallery-item">
      <div class="images"><img src="images/img6.jpg" alt="Photo6">
      </div>
      <div class="title">Folklore</div>
    </div>
  </div>

  <div class="gallery-container">
    <div class="gallery-item">
      <div class="images"><img src="images/img7.jpg"alt="Photo7">
      </div>
      <div class="title">Depression</div>
    </div>
  </div>

  <div class="gallery-container">
    <div class="gallery-item">
      <div class="images"><img src="images/img8.jpg" alt="Photo8">
      </div>
      <div class="title">Anxiety</div>
    </div>
  </div>

  <div class="gallery-container">
    <div class="gallery-item">
      <div class="images"><img src="images/img9.jpg" alt="Photo9">
      </div>
      <div class="title">Deku</div>
    </div>
  </div>

  <div class="gallery-container">
    <div class="gallery-item">
      <div class="images"><img src="images/img10.jpg"alt="Photo10">
      </div>
      <div class="title">Vulpa</div>
    </div>
  </div>

  <div class="gallery-container">
    <div class="gallery-item">
      <div class="images"><img src="images/img11.jpg" alt="Photo11">
      </div>
      <div class="title">Ken Kaneki</div>
    </div>
  </div>
  <div class="gallery-container">
    <div class="gallery-item">
      <div class="images"><img src="images/img12.jpg" alt="Photo12">
      </div>
      <div class="title">Itachi</div>
    </div>
  </div>
  <div class="gallery-container">
    <div class="gallery-item">
      <div class="images"><img src="images/img13.jpg" alt="Photo13">
      </div>
      <div class="title">Zoro</div>
    </div>
  </div>
  <div class="gallery-container">
    <div class="gallery-item">
      <div class="images"><img src="images/img14.jpg" alt="Photo14">
      </div>
      <div class="title">Fubuki</div>
    </div>
  </div>
  <div class="gallery-container">
    <div class="gallery-item">
      <div class="images"><img src="images/img15.jpg" alt="Photo15">
      </div>
      <div class="title">Nobera</div>
    </div>
  </div>
  <div class="gallery-container">
    <div class="gallery-item">
      <div class="images"><img src="images/img16.jpg" alt="Photo16">
      </div>
      <div class="title">Super Yuri</div>
    </div>
  </div>
  <div class="gallery-container">
    <div class="gallery-item">
      <div class="images"><img src="images/img17.jpg" alt="Photo16">
      </div>
      <div class="title">Lover (Taylor's Version)</div>
    </div>
  </div>
</div>


<script>
  const lightbox = document.createElement('div')
lightbox.id = 'lightbox'
document.body.appendChild(lightbox)

const images = document.querySelectorAll('img')
images.forEach(image => {
  image.addEventListener('click', e => {
  lightbox.classList.add('active')
  const img = document.createElement('img')
  img.src = image.src
  while (lightbox.firstChild) {
    lightbox.removeChild(lightbox.firstChild)
  }
  lightbox.appendChild(img)
 })
})

lightbox.addEventListener('click', e => {
  if (e.target !== e.currentTarget) return
lightbox.classList.remove('active')
})
</script>

<div class="endline">
  <p>© 2021 Shreyshi Thapliyal</p>
</div>
</body>
