<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"rel="stylesheet">
  <link rel="stylesheet" href="home.css">
  
  <script src="homescript.js"></script>
  
<title>Travel Planner</title>
</head>
<body>
  
    <nav>
      <div class="nav__logo">FEASTFLOW</div>
      <ul class="nav__links">
        <li class="link"><a href="home.php">Home</a></li>
        <li class="link"><a href="#">Book</a></li>
        <li class="link"><a href="#">Contact Us</a></li>
        
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Account</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="edit.php">Edit Profile</a></li>
          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
       </ul>
        </div> 

      </ul>
    </nav>
    
    <header class="section__container header__container">
      <div class="header__image__container">
        <div class="header__content">
          <h1>Welcome to FEASTFLOW Online Booking! 🌟 </h1>
          <p>Whether you're planning a special event, corporate meeting, or a celebration with loved ones, we're here to make your experience exceptional. Let's get started on crafting a memorable culinary experience for you and your guests! 🍽️✨.</p>
      
    </header>

    <section class="section__container popular__container">
      <h2 class="section__header">Catering Packages</h2>
      <div class="popular__grid">
        <div class="popular__card">
        <img src="wedding.jpg" alt="location" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Wedding Catering</h4>
              <h4>$58,000</h4>
            </div>
            <p>San Pablo City, Laguna</p>
          </div>
          <a href="wedding.php">
          <button type="button" class="btn btn-primary" >See More</button>
          </a>
        </div>

        <div class="popular__card">
          <img src="debute.jpg" alt="location" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Debut Catering</h4>
              <h4>$39.000</h4>
            </div>
            <p>Siniloan, Laguna</p>
          </div>
          <a href="siniloan.php">
          <button type="button" class="btn btn-primary" >See More</button>
          </a>
        </div>

        <div class="popular__card">
          <img src="fam.png" alt="location" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Family Feast Package</h4>
              <h4>$15,500</h4>
            </div>
            <p>San Pablo, Laguna</p>
          </div>
          <a href="laguna2.php">
          <button type="button" class="btn btn-primary" >See More</button>
          </a>
        </div>

        <div class="popular__card">
          <img src="Corporate.jpg" alt="location" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Corporate Catering</h4>
              <h4>$44,890</h4>
            </div>
            <p>Pagsanjan, Laguna</p>
          </div>
          <a href="pagsanjan.php">
          <button type="button" class="btn btn-primary" >See More</button>
          </a>
        </div>

        <div class="popular__card">
          <img src="Kids.jpg" alt="location" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Kids Party Catering </h4>
              <h4>$28,250</h4>
            </div>
            <p>Santa Rosa, Laguna</p>
          </div>
          <a href="santarosa.php">
          <button type="button" class="btn btn-primary" >See More</button>
          </a>
        </div>

        <div class="popular__card">
          <img src="private.jpg" alt="location" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Private Party Catering</h4>
              <h4>$52,300</h4>
            </div>
            <p>Calauan, Laguna</p>
          </div>
          <a href="laguna.php">
          <button type="button" class="btn btn-primary" >See More</button>
          </a>
        </div>
      </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://ajax.google.apis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/d0fb38c542.js" crossorigin="anonymous"></script>
</body>
</html>