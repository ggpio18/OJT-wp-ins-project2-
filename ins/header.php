<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insight Interiors</title>
    <link rel="stylesheet" href="./style.css" />
    <script
      src="https://kit.fontawesome.com/a6726e13c6.js"
      crossorigin="anonymous"
    ></script>
    <?php wp_head() ?>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header__wrapper">
          <a href="" class="branding"><img src="<?php echo get_field('logo') ?>" alt="" /></a>
          <div class="header__nav">
            <ul class="nav">
              <li><a href="#home">Home</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#projects">Projects</a></li>
              <li><a href="#contacts">Contacts</a></li>
              <ul class="social">
                <li id="email">
                  <a href=""><i class="fa-solid fa-envelope"></i></a>
                </li>
                <li id="twitter">
                  <a href=""><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li id="facebook">
                  <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                </li>
              </ul>
            </ul>

            <a href=""><img src="./img/logo.png" alt="" /></a>
          </div>
          <div class="toggle__menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </header>