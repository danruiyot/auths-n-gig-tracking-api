<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@400;600&display=swap');

/* font-family: 'Open Sans',
sans-serif;
font-family: 'Poppins',
sans-serif; */
* {
    margin: 0;
    padding: 0;
}

body {
    background-image: url(https://digitshack.com/codepen/mentor7/bg-desktop.svg);
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 100vh;
    background-color: hsl(257, 40%, 49%);
}


.container {
    max-width: 1320px;
    margin: 0 auto;
    height: 100vh;
}


.wrapper {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 90%;
    padding-top: 40px;
    padding-bottom: 40px;
    margin: 0 2rem;
}

.header img {
    width: 170px;
    padding-bottom: 20px;
}

.main {
    display: flex;
    align-items: center;
    gap: 40px;
}


.hero-text h1 {
    color: #FFF;
    font-family: 'Open Sans',
        sans-serif;
    font-size: 36px;
    line-height: 1.7;
    margin-bottom: 20px;
}

.hero-text p {
    color: #FFF;
    font-family: 'Poppins',
        sans-serif;
    line-height: 1.8;
    margin-bottom: 30px;
}

.hero-text a {
    display: inline-block;
    font-family: 'Poppins',
        sans-serif;
    background: #FFF;
    padding: 13px 50px;
    border-radius: 25px;
    text-decoration: none;
    box-shadow: 0 8px 17px -8px rgba(0, 0, 0, .8);
    transition: all .3s ease;
}

.hero-text a:hover {
    background-color: hsl(300, 69%, 71%);
    color: white;
}

.social {
    text-align: right;
}


.social a i {
    color: #FFF;
    position: relative;
    font-size: 18px;

    transition: all .3s ease;
}

.social a:not(:first-child) {
    margin-left: 2rem;
}

.social a:nth-child(2) {
    margin-left: 2.4rem;
}

.social a i::after {
    content: '';
    position: absolute;
    height: 40px;
    width: 40px;
    border-radius: 50%;
    border: 2px solid white;
    left: -14px;
    bottom: -13px;
    transition: all .3s ease;
}

.social a:hover i {
    color: hsl(300, 69%, 71%);
}

.social a i:hover::after {
    border-color: hsl(300, 69%, 71%);
}

@media only screen and (max-width: 1440px) {
    .hero-img img {
        width: 100%;
    }
}

@media only screen and (max-width: 768px) {
    .main {
        flex-direction: column;
        text-align: center;
    }

    .social {
        text-align: center;
        margin-top: 50px;
    }

    .hero-text h1 {
        line-height: 1.5;
        font-size: 26px;
    }

    .hero-text a {
        padding: 10px 70px;
    }
}
        </style>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container">
    <div class="wrapper">
      <div class="header">
        <img src="https://digitshack.com/codepen/mentor7/logo.svg" alt="" srcset="">
      </div>
      <div class="main">
        <div class="hero-img"><img src="https://digitshack.com/codepen/mentor7/illustration-mockups.svg" alt=""></div>
        <div class="hero-text">
          <h1>Build The Community Your Fans Will Love</h1>
          <p>Huddle re-imagines the way we build communities. You have a voice, but so does your audience. 
  Create connections with your users as you engage in genuine discussion.</p>
          <a href="#">Register</a>
        </div>
      </div>
      <div class="social">
        <a href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- source  https://codepen.io/iamsofiullah/pen/zYzxRGQ -->
    </body>
</html>
