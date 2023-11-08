<?php
// haal al mijn instellingen op
require_once('../source/config.php');

// haal de database verbinding op
require_once( SOURCE_PATH . 'database.php');
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BO NVVN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <figure>
            <img src="IMG/NVVN-favicon copy.png" alt="" class="logo">
        </figure>
        <ul class="naviegatie">
            <li class="nav"><a href="SDGOne.php">SDG Pagina</a></li>
            <li class="nav"><a href="#Game">The Game</a></li>
            <li class="nav"><a href="#Info">Informatie</a></li>
        </ul>
    </header>


    
    <section class="threeblocks">
        <h2 class="threeblockstitle">De 17 SDG's</h2>
        <section class="threeblocksframe">
        <?php

         
                    include( "../source/views/home.php");
            ?>
             </section>
        </section>

    <section  id="Game" class="ctaframe">
        <figure class="ctainnerframe">
            <h2 class="ctamaintekst"></h2>
            <a class="ctainnerframectatext">CTA</a>
        </figure>
    </section>


    <section class="uitlegframe">
        <img class="uitlegimg" src="IMG/sdg 1.png" alt="">
        <div class="uitlegtekst">
            <h2 id="Info" class="h2">SDG</h1>
              <br>
            <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Delectus totam iusto dicta ipsa at sequi, 
                facilis odio voluptatibus amet harum quibusdam quia atque
                 fuga vel quasi voluptate nemo repellat enim?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolorem non dolore? Alias esse iure dolorum, 
                eius molestiae accusamus porro harum earum assumenda asperiores! Sapiente nostrum quod itaque nemo cupiditate.</h2>

        </div>
    </section>

    <footer>
      <div class="Footer-Blocks">Voor vragen email naar:</div>
      <div class="Footer-Blocks">info@nvvn.nl</div>
      <img src="img/NVVN-favicon copy.png" alt="">
      <div class="Footer-Blocks">Gemaakt door:</div>
      <div class="Footer-Blocks"><img src="img/SP_Logo.png" alt=""></div>
  </footer>
</body>