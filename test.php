<body>
    <header class="header">
        <figure>
            <img src="IMG/NVVN-favicon copy.png" alt="" class="logo">
        </figure>
        <ul class="naviegatie">
            <li class="nav">fdasfsda</li>
            <li class="nav">fdsafssdafas</li>
            <li class="nav">fdsafdsfdsafsd</li>
        </ul>
    </header>
    <section class="threeblocks">
        <h2 class="threeblockstitle">De 17 SDG's</h2>
        <section class="threeblocksframe">
               


            <?php

            // handle incomming request
            // controleer de url, is er misschien een categorie geselecteerd?
            $url = explode('/', trim($_SERVER['REQUEST_URI']));
            // remove empty values 
            $url = array_values(array_filter($url));
            // and set a default
            if (empty($url[0])) {
                $url[] = 'home';
            }
            
            switch ($url[0]) {
                case 'sdg':
                    define('SDG_SLUG', htmlspecialchars($url[1]));
                    include(VIEWS_PATH . 'single.php');
                    break;
                case 'home':
                default:
                    include( "../source/views/home.php");
            }
            ?>

 
 
      

    <section class="ctaframe">
        <figure class="ctainnerframe">
            <h2 class="ctamaintekst"></h2>
            <a class="ctainnerframectatext">CTA</a>
        </figure>
    </section>


    <section class="uitlegframe">
        <img class="uitlegimg" src="IMG/sdg 1.png" alt="">
        <div class="uitlegtekst">
            <h2 class="h2">SDG</h1>
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
      <div class="Footer-Blocks">Contact<br><a class="Footer-Blocks-A" href="https://www.google.com/">info@nvvn.nl</a></div>
      <img src="img/NVVN-favicon copy.png" alt="">
      <div class="Footer-Blocks">Gemaakt door:</div>
      <div class="Footer-Blocks"><img src="img/SP_Logo.png" alt=""></div>
  </footer>
</body>