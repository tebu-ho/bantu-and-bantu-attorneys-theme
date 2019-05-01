<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bantu &amp; Bantu</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="handheldFriendly" content="true">
  <meta name="description" content="Bantu & Bantu">
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="styles/reset.css">
  <link rel="stylesheet" href="styles/grid--skeleton.min.css">
  <link rel="stylesheet" href="styles/main.css">
  <link rel="stylesheet" href="styles/hover-min.css">
</head>
<body>
  <div class="wrapper">
    <header role="banner">
      <div class="container">
        <nav role="navigation" style="padding:15px">
          <div class="logo">
            <a class="nav__icon" href="http://www.creativegemini.co.za/bantuandbantu/"><img src="img/bantu.png" alt="Header Logo"></a>
          </div>
          <label for="checkbox--nav" class="js-icon--navigation icon--navigation">
            <span class="icon--navigation__line"></span>
            <span class="icon--navigation__line"></span>
            <span class="icon--navigation__line"></span>
          </label>
          <input id="checkbox--nav" class="js-checkbox--nav checkbox--nav" type="checkbox" name="checkbox--nav">
          <ul class="js-nav__links nav__links">
            <li class="hvr-reveal"><a href="http://www.creativegemini.co.za/bantuandbantu/">Home</a></li>
            <li class="hvr-reveal"><a href="about.php">About Us</a></li>
            <li class="hvr-reveal"><a href="attorneys.php">Attorneys</a></li>
            <li class="hvr-reveal"><a href="services.php">Practices</a></li>
            <li class="hvr-reveal"><a class="link--active" href="#">Contact Us</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="map" class="sec--map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26466.67435590388!2d18.453872446775385!3d-33.98394620995498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc42c52081a7cb%3A0x79fbdc90a0e82eac!2sClaremont%2C+Cape+Town%2C+7708!5e0!3m2!1sen!2sza!4v1472041149542" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <section id="contact" class="sec--contact">
      <div class="container">
        <h1 class="heading--big">Contact us</h1>
        <p class="kicker">If you would like more information or wish to make an appointment, please<br>
          call our office or fill in the form below. Thank you.</p>
        <hr>
        <form id="contact-form" action="mail/contact.php" method="post">
          <div class="row">
            <div class="eight columns offset-by-two form__details">
              <div class="row">
                <div class="six columns"><input id="firstName" name="firstName" type="text" placeholder="First name" required /></div>
                <div class="six columns"><input id="lastName" name="lastName" type="text" placeholder="Last name" required /></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="eight columns offset-by-two form__details">
              <div class="row">
                <div class="six columns"><input id="email" name="email" type="email" placeholder="Email address" required /></div>
                <div class="six columns"><input id="tel" name="tel" type="tel" placeholder="Phone number" required /></div>
              </div>
            </div>
          </div>
          <div>
            <textarea id="message" name="message" placeholder="Type your message" rows="10" required></textarea>
          </div>
          <button id="submitBtn" class="btn btn--green" type="submit" role="button">Send Message&nbsp;<i class="fa fa-paper-plane"></i></button>
        </form>
      </div>
    </section>
    <?php include "includes/footer.php";?>