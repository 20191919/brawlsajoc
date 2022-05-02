<?php
require_once 'vendor/autoload.php';

 use GuzzleHttp\Client;

 /** @var $client Client */
   $client = new Client([

         'timeout' => 2.0
   ]);

   $jar = new \GuzzleHttp\Cookie\CookieJar;

   $tag = $_GET['sid'];



   $response = $client->request('GET', 'https://api.brawltime.ninja/api/player/'.$tag, [
'cookies' => $jar
]);

//echo $response->getStatusCode(),"<br>";
$body = $response->getBody();
$info = $body->getContents();

$bw = json_decode($info,true)["brawlers"];
$bs = json_decode($info,true);

 function vardump($var) {
  echo '<pre>';
  var_dump($var);
  echo '</pre>';
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="BSC">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Brawl Stars - <? echo $bs["name"]; ?></title>
    <link rel="stylesheet" href="css/main.css?<?php echo rand(1, 9999999);?>" media="screen">
<link rel="stylesheet" href="css/bsc.css?<?php echo rand(1, 9999999);?>" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/bs.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Страница 1">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-grey-80 u-header u-header" id="sec-1520"><div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-font-oswald u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1">BSC<br>
        </h2>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD">
          <div class="menu-collapse">
            <a class="u-button-style u-nav-link" href="#" style="font-size: calc(1em + 8px);">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#svg-050c"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-050c" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/" style="padding: 12px 20px;">Главная</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Главная.html" style="padding-right: 20px;">Главная</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <form action="check.php" method="get" class="u-grey-75 u-radius-2 u-search u-search-right u-search-1">
          <button class="u-search-button" type="submit">
            <span class="u-search-icon u-spacing-10 u-text-white">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xlink:href="#svg-148a"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-148a" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
            </span>
          </button>
          <input class="u-search-input" type="search" name="sid" value="" placeholder="Поиск...">
        </form>
      </div></header>
    <section class="u-clearfix u-custom-color-2 u-section-1" id="sec-56ab">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-grey-80 u-group u-group-1">
          <div class="u-container-layout u-valign-top u-container-layout-1">
            <h2 class="u-custom-font u-font-oswald u-text u-text-default u-text-1">Общая информация<span style="font-size: 1.125rem;"></span>
              <br>
            </h2>
            <div class="u-align-center u-container-style u-expanded-width u-grey-80 u-group u-opacity u-opacity-50 u-radius-2 u-shape-round u-group-2">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-expanded-width u-layout-grid u-list u-list-1">
                  <div class="u-repeater u-repeater-1">
                    <div class="u-container-style u-list-item u-repeater-item">
                      <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                        <h5 class="u-custom-font u-font-oswald u-text u-text-default u-text-2"><? echo $bs["name"]; ?></h5>
                        <p class="u-custom-font u-font-oswald u-text u-text-default u-text-grey-50 u-text-3">Никнейм</p>
                      </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                      <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                        <h5 class="u-custom-font u-font-oswald u-text u-text-default u-text-4"><? echo $bs["expLevel"]; ?></h5>
                        <p class="u-custom-font u-font-oswald u-text u-text-default u-text-grey-50 u-text-5">Уровень</p>
                      </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                      <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                        <h5 class="u-custom-font u-font-oswald u-text u-text-default u-text-6"><? echo $bs["trophies"]; ?></h5>
                        <p class="u-custom-font u-font-oswald u-text u-text-default u-text-grey-50 u-text-7">Кубков</p>
                      </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                      <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
                        <h5 class="u-custom-font u-font-oswald u-text u-text-default u-text-8"><? echo $bs["3vs3Victories"]+$bs["soloVictories"]+$bs["duoVictories"]; ?></h5>
                        <p class="u-custom-font u-font-oswald u-text u-text-default u-text-grey-50 u-text-9">Побед</p>
                      </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                      <div class="u-container-layout u-similar-container u-valign-top u-container-layout-7">
                        <h5 class="u-custom-font u-font-oswald u-text u-text-default u-text-10"><? echo count($bs["brawlers"]); ?> / 54</h5>
                        <p class="u-custom-font u-font-oswald u-text u-text-default u-text-grey-50 u-text-11">Бравлеры</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-container-style u-grey-80 u-group u-radius-2 u-shape-round u-group-3">
          <div class="u-container-layout u-valign-top u-container-layout-8">
            <h2 class="u-custom-font u-font-oswald u-text u-text-default u-text-12">Бойцы</h2>
            <div class="u-expanded-width u-list u-list-2">
              <div class="u-repeater u-repeater-2">
                  <?php $bw = json_decode($info,true)["brawlers"];
                    foreach ( $bw as $b )
                        { ?>
                          <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-9">
                    <img class="u-image u-image-default u-preserve-proportions u-image-1" src="https://media.brawltime.ninja/brawlers/<? $r = array('.', ' '); echo strtolower(str_replace($r, "_", $b["name"])) ?>/avatar.png?size=160" alt="" data-image-width="1200" data-image-height="1200">
                    <h6 class="u-custom-font u-font-oswald u-text u-text-default u-text-13"><? echo $b["name"] ?></h6>
                    <p class="u-custom-font u-font-oswald u-text u-text-default u-text-14"><? echo $b["trophies"] ?><br>
                    </p><span class="u-file-icon u-icon u-text-palette-3-base u-icon-1"><img src="images/1.png" alt=""></span><span class="u-file-icon u-icon u-text-palette-4-base u-icon-2"><img src="images/2.png" alt=""></span>
                    <p class="u-custom-font u-font-oswald u-text u-text-default u-text-15"><? echo $b["power"] ?><br>
                    </p>
                  </div></div>
                       <? } ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-54fd"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">by <a href="https://lolz.guru/require/">Require</a></p>
      </div></footer>
  </body>
</html>