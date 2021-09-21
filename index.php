<?php

$pageName = $_GET['action'] ?? null;

?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8"> 

        <title>Blog - Bartosz Orzechowski</title>

        <meta name="description" content="Blog-osobisty">

        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="css/fontello.css" type="text/css" />

        <link rel="shortcut icon" href="favicon.ico"  type="image/x-icon">
        

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Lato&display=swap" rel="stylesheet">

        <script src="timer.js"></script>
    </head>

    <body onload="odliczanie();">
        <ol>
          <li><a href="#">Informacje</a>
            <ul>
              <li><a href="?action=oferta">Oferta</a></li>
              <li><a href="?action=cv">Cv</a></li>
              <li><a href="?action=kontakt">Kontakt</a></li>
              <li><a href="?action=kim-jestem">Kim jestem?</a></li>
            </ul>
          </li>
      
          <li><a href="#">Rozrywka</a>
            <ul>
              <li><a href="papier.html" target="_blank" >Papier, kamień, nożyce</a></li>
              <li><a href="https://www.filmweb.pl/ranking/film" target="_blank" >Filmy</a></li>
              <li><a href="https://www.empik.com/bestsellery/ksiazki" target="_blank" >Książki</a></li>
              <li><a href="https://www.google.com/search?q=%C5%9Bmieszne+zdj%C4%99cia&safe=active&sxsrf=ALeKk00WpuE-vLBIvr2av0oLVJireJbZBA:1622102850101&source=lnms&tbm=isch&sa=X&ved=2ahUKEwix-6yBtOnwAhUfCRAIHf9XDHgQ_AUoAXoECAEQAw&biw=1745&bih=861" target="_blank" >Zdjęcia</a></li>
              <li><a href="formularz.html" target="_blank">Przykładowy formularz</a></li>
            </ul>
          </li>
      
          <li><a href="#">Edukacja</a>
            <ul>
              <li><a href="monitory.html" target="_blank" >Monitory</a></li>
            </ul>
          </li>
        </ol>

        <div id="container">

          <div class="rectangle">
              <a href="index.php" class="tilelink" >
                  <div id="logo">Bartosz Orzechowski</div>
              </a>
              <div id="zegar"></div>
              <div style="clear: both;"></div>
          </div>

          <div class="square">
              <a href="?action=kim-jestem" class="tilelink" >
                  <div class="tile1">
                  <i class="icon-user"></i><br />Kim Jestem?
              </div>
              </a>
              <a href="?action=oferta" class="tilelink" >
              <div class="tile12">
                  <i class="icon-laptop"></i><br />Oferta
              </div>
              </a>
              <div style="clear: both;"></div>
              <a href="?action=cv" class="tilelink" >
              <div class="tile2">
                  <i class="icon-graduation-cap"></i><br />Curriculum vitae
              </div>
              </a>
              <a href="?action=kontakt" class="tilelink" >
              <div class="tile3">
                  <i class="icon-mail"></i><br />Kontakt ze mną
              </div>
              </a>
              <div style="clear: both;"></div>
              <div class="tile4">
                <i>Talk is cheap. Show me the code!</i><br />- Linus Torvalds, twórca Linuxa
            </div>
          </div>
          <div class="square">
              <div class="tile5">
                <?php if ($pageName === 'cv'): ?>
                Cv<br /> <br />Umiem zaprogramować bota w Discord.js oraz stworzyć stronę.
                <?php elseif ($pageName === 'kim-jestem'): ?>
                Kim jestem?<br /> <br />Jestem Bartoszem. Uczę sie programować😀
                <?php elseif ($pageName === 'kontakt'): ?>
                Kontakt<br /> <br />Aby się ze mną skontaktować napisz maila pod adres: <i>orzechowski.blog@gmail.com</i> 
                <?php elseif ($pageName === 'oferta'): ?>
                Co zaoferuję?<br /> <br />Stworzę bota oraz stronę www.
                <?php else: ?>
                Strona główna<br /> <br />To moja pierwsza strona
                <?php endif; ?>
              </div>
              <a href="https://www.youtube.com/channel/UCKkdhkgC7cJcLzosQZ2vLdw" target="_blank" class="tilelink" >
                  <div class="yt">
                      <i class="icon-youtube-play"></i>
                  </div>
              </a>
              <a href="https://www.facebook.com/bartosz.orzechowski.1485" target="_blank" class="tilelink" >
                  <div class="fb">
                      <i class="icon-facebook-official"></i>
                  </div>
              </a>
              <a href="https://www.instagram.com/bat_1369/?hl=pl" target="_blank" class="tilelink" >
                  <div class="ig">
                      <i class="icon-instagram"></i>
                  </div>
              </a>
              <a href="https://twitter.com/BartoszOrzecho6" target="_blank" class="tilelink" >
                  <div class="tw">
                      <i class="icon-twitter"></i>
                  </div>
              </a>
              <div style="clear: both;"></div>
          </div>

          <div class="rectangle1">2021 &copy; Bartosz Orzechowski - moja pierwsza strona! <i class="icon-mail-alt"></i> orzechowski.blog@gmail.com</div>
        
        </div>          
        
        
      
    </body>

</html>    