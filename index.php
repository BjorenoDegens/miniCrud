<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/miniCrud/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap"
    rel="stylesheet"
    />
    <title>Dun&Döner</title>
  </head>
  <body>
    <header>
      <div class="firstheaderbox">
        <div class="boxheader">
          <div class="headertext">
            <div class="mail"></div>
            <a href="./index.php" id="mailIndex">
              <p>Contact</p>
            </a>
          </div>
          <div class="headertext">
            <div class="phone"></div>
            <a href="tel:06-12345678">Telefoon</a>
          </div>
          <img class="imgheader" src="/miniCrud/img/logo_465x320.png" alt="" />
          <div class="headertext">
            <div class="adres"></div>
            <a
              href="https://www.google.com/maps/place/Cafetaria+Haalderen/@51.8863004,5.924765,17z/data=!4m13!1m7!3m6!1s0x47c7a7445b12dedd:0xce36fb5d6a90e5ea!2sVan+der+Mondeweg+28,+6685b,+6685+BP+Haalderen,+Nederland!3b1!8m2!3d51.8863004!4d5.9269537!3m4!1s0x47c7a7445b7cc331:0xe2ee3fc20a90100e!8m2!3d51.8863005!4d5.927035?hl=nl-NL"target="_blank"
            >
              <p>Maps</p>
            </a>
          </div>
          <div class="headertext">
             <a href="/miniCrud/index.php" id="inlogIndex" ><div class="shoppingcard"></div></a>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="menu-spacer">
          <div class="menu">
            <form role="search" id="form">
              <input
                type="search"
                id="query"
                name="q"
                placeholder="Search..."
              />
              <button><label for="search">search</label></button>
            </form>
            <div class="menugerechten">
              <?php
              require_once('php/connect.php');
      
              $categorieen = ['favorieten', 'broodjes', 'pizza','dürüm','friet','gezinsbakken','kapsalon','kids','drinken','saus'];
            foreach($categorieen as $categorie) {
              ?>
              <a href="#" class="textline"><?php echo $categorie; ?></a>
              <?php
            }
              ?>
            </div>
          </div>
        </div>
        <div class="gerechtenlijst">
          <?php

            foreach($categorieen as $categorie) {
              echo '<div id="'.$categorie.'" class="gerechtheader">';
              echo '<h1>'.$categorie.'</h1>';
              echo '</div>';

              $sql = "SELECT * FROM gerechten WHERE categorie = :categorie";
              $stmt = $connect->prepare($sql);
              $stmt->bindParam(':categorie', $categorie);
              $stmt->execute();
              $result = $stmt->fetchAll();
              foreach($result as $gerecht){
              
              ?>
                <div class="gerechten">
                  <div>
                    <div class="gerechtenname"><?php echo $gerecht['titel']; ?></div>
                    '<div class="gerechtendelen"><?php echo $gerecht['beschrijving']; ?></div>
                  </div>
                  <div class="price">€<?php echo $gerecht['prijs']; ?></div>
                  <div class="foodimg"><?php echo $gerecht['afbeelding']; ?></div>
                </div>
              <?php
              }
            }
          ?>
        
        </div>
        <script src="js/main.js"></script>
      </div>
    </main>
  </body>
</html>
