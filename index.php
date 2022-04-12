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
    <?php require_once ('php/connect.php')?>
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
              <a href="#Favorieten" class="textline">Favorieten</a>
              <a href="#Broodjes" class="textline">Broodjes</a>
              <a href="#Durum" class="textline">Dürüm</a>
              <a href="#Pizza" class="textline">Pizza</a>
              <a href="#Kapsalon" class="textline">Kapsalons</a>
              <a href="#Gezinsbakken" class="textline">Gezinsbakken</a>
              <a href="#Friet" class="textline">Friet</a>
              <a href="#Kids" class="textline">Kids</a>
              <a href="#Saus" class="textline">Saus</a>
              <a href="#Drinken" class="textline">Drinken</a>
            </div>
          </div>
        </div>
        <div class="gerechtenlijst">
          <div id="Favorieten" class="gerechtheader">
            <h1>Favorieten</h1>
          </div>
          <?php
          
            $sql = "SELECT * FROM gerechten";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach($result as $gerecht){
              if($gerecht['categorie'] == 'broodjes'){
              

          ?>
            <div class="gerechtenfirst">
              <div>
                <div class="gerechtenname"><?php echo $gerecht['titel']; ?></div>
                '<div class="gerechtendelen"><?php echo $gerecht['titel']; ?></div>
              </div>
              <div class="price"><?php echo $gerecht['titel']; ?></div>
              <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt="" /></div>
            </div>
          <?php
            }
          }
          ?>
          <div class="gerechten">
            <div>
              <div class="gerechtenname">(gerecht)</div>
              <div class="gerechtendelen">(onderdelenvoer)</div>
            </div>
            <div class="price">€0,00</div>
            <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt="" /></div>
          </div>
          <div class="gerechtenlijst">
            <div id="Broodjes" class="gerechtheader">
              <h1>Broodjes</h1>
            </div>
            <div class="gerechtenfirst">
              <div>
                <div class="gerechtenname">(gerecht)</div>
                <div class="gerechtendelen">(onderdelenvoer)</div>
              </div>
              <div class="price">€0,00</div>
              <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt="" /></div>
            </div>
          </div>
          <div class="gerechten">
            <div>
              <div class="gerechtenname">(gerecht)</div>
              <div class="gerechtendelen">(onderdelenvoer)</div>
            </div>
            <div class="price">€0,00</div>
            <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt="" /></div>
          </div>
        <div class="gerechtenlijst">
          <div id="Durum" class="gerechtheader">
            <h1>Dürüm</h1>
          </div>
          <div class="gerechtenfirst">
            <div>
              <div class="gerechtenname">(gerecht)</div>
                <div class="gerechtendelen">(onderdelenvoer)</div>
              </div>
              <div class="price">€0,00</div>
              <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt=""></div>
            </div>
          <div class="gerechten">
            <div>
              <div class="gerechtenname">(gerecht)</div>
                <div class="gerechtendelen">(onderdelenvoer)</div>
              </div>
              <div class="price">€0,00</div>
              <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt=""></div>
            </div>
        </div>
        <div class="gerechtenlijst">
          <div id="Pizza" class="gerechtheader">
            <h1>Pizza</h1>
          </div>
          <div class="gerechtenfirst">
            <div>
              <div class="gerechtenname">(gerecht)</div>
                <div class="gerechtendelen">(onderdelenvoer)</div>
              </div>
              <div class="price">€0,00</div>
              <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt=""></div>
            </div>
          <div class="gerechten">
            <div>
              <div class="gerechtenname">(gerecht)</div>
                <div class="gerechtendelen">(onderdelenvoer)</div>
              </div>
              <div class="price">€0,00</div>
              <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt=""></div>
            </div>
        </div>
        <div class="gerechtenlijst">
          <div id="Kapsalon" class="gerechtheader">
            <h1>Kapsalons</h1>
          </div>
          <div class="gerechtenfirst">
            <div>
              <div class="gerechtenname">(gerecht)</div>
                <div class="gerechtendelen">(onderdelenvoer)</div>
              </div>
              <div class="price">€0,00</div>
              <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt=""></div>
            </div>
          <div class="gerechten">
            <div>
              <div class="gerechtenname">(gerecht)</div>
                <div class="gerechtendelen">(onderdelenvoer)</div>
              </div>
              <div class="price">€0,00</div>
              <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt=""></div>
            </div>
        </div>
        <div class="gerechtenlijst">
          <div id="Gezinsbakken" class="gerechtheader">
            <h1>Gezinsbakken</h1>
          </div>
          <div class="gerechtenfirst">
            <div>
              <div class="gerechtenname">(gerecht)</div>
                <div class="gerechtendelen">(onderdelenvoer)</div>
              </div>
              <div class="price">€0,00</div>
              <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt=""></div>
            </div>
          <div class="gerechten">
            <div>
              <div class="gerechtenname">(gerecht)</div>
                <div class="gerechtendelen">(onderdelenvoer)</div>
              </div>
              <div class="price">€0,00</div>
              <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt=""></div>
            </div>
        </div>
        <div class="gerechtenlijst">
          <div id="Friet" class="gerechtheader">
            <h1>Friet</h1>
          </div>
          <div class="gerechtenfirst">
            <div>
              <div class="gerechtenname">(gerecht)</div>
                <div class="gerechtendelen">(onderdelenvoer)</div>
              </div>
              <div class="price">€0,00</div>
              <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt=""></div>
            </div>
          <div class="gerechten">
            <div>
              <div class="gerechtenname">(gerecht)</div>
                <div class="gerechtendelen">(onderdelenvoer)</div>
              </div>
              <div class="price">€0,00</div>
              <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt=""></div>
            </div>
        </div>
        <div class="gerechtenlijst">
          <div id="Kids" class="gerechtheader">
            <h1>Kids</h1>
          </div>
          <div class="gerechtenfirst">
            <div>
              <div class="gerechtenname">(gerecht)</div>
                <div class="gerechtendelen">(onderdelenvoer)</div>
              </div>
              <div class="price">€0,00</div>
              <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt=""></div>
            </div>
          <div class="gerechten">
            <div>
              <div class="gerechtenname">(gerecht)</div>
                <div class="gerechtendelen">(onderdelenvoer)</div>
              </div>
              <div class="price">€0,00</div>
              <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt=""></div>
            </div>
        </div>
        <div class="gerechtenlijst">
          <div id="Saus" class="gerechtheader">
            <h1>Saus</h1>
          </div>
          <div class="gerechtenfirst">
            <div>
              <div class="gerechtenname">(gerecht)</div>
                <div class="gerechtendelen">(onderdelenvoer)</div>
              </div>
              <div class="price">€0,00</div>
              <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt=""></div>
            </div>
          <div class="gerechten">
            <div>
              <div class="gerechtenname">(gerecht)</div>
                <div class="gerechtendelen">(onderdelenvoer)</div>
              </div>
              <div class="price">€0,00</div>
              <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt=""></div>
            </div>
        </div>
        <div class="gerechtenlijst">
          <div id="Drinken" class="gerechtheader">
            <h1>Drinken</h1>
          </div>
          <div class="gerechtenfirst">
            <div>
              <div class="gerechtenname">(gerecht)</div>
                <div class="gerechtendelen">(onderdelenvoer)</div>
              </div>
              <div class="price">€0,00</div>
              <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt=""></div>
            </div>
          <div class="gerechten">
            <div>
              <div class="gerechtenname">(gerecht)</div>
                <div class="gerechtendelen">(onderdelenvoer)</div>
              </div>
              <div class="price">€0,00</div>
              <div class="foodimg"><img src="/miniCrud/img/1240.jpg" alt=""></div>
            </div>
        </div>
        <script src="js/main.js"></script>
      </div>
    </main>
  </body>
</html>
