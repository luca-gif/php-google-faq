<?php

include "db.php";

$miaVariabile = "ciao";

echo "testo iniziale  $miaVariabile | $miaVariabile | $miaVariabile  testoFinale";

echo 'testo iniziale ' .  $miaVariabile . ' testoFinale';


?>
<!-- Riscrivere questa pagina del sito google, ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.
Per la formattazione del testo della FAQ inserite il markup HTML direttamente nel “database”
 -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <title>FAQ</title>


</head>

<body>

  <header>
    <div class="left-side">

      <img src="https://www.igizmo.it/wp-content/uploads/2020/01/google_logo-696x265.png" alt="google policies">
      <div>Privacy e termini</div>

    </div>

    <div class="right-side">

      <div class="account">L</div>

    </div>
  </header>

  <nav>
    <ul>
      <?php foreach ($navList as $list) : ?>
      <li>
        <?php echo $list ?>
      </li>
      <?php endforeach; ?>
    </ul>
  </nav>



  <main>

    <?php foreach ($faq as $value) : ?>

    <?php echo $value['domanda'] ?>
    <?php echo $value['risposta'] ?>

    <?php endforeach; ?>

  </main>

  <footer>
    <div class="container">
      <div class="footer-left">
        <ul>
          <li>Google</li>
          <li>Tutto su Google</li>
          <li>Privacy</li>
          <li>Terminy</li>
        </ul>
      </div>

      <div class="footer-right">
        <select name="" id="">
          <option value="">Italiano</option>
          <option value="">Portoghese</option>
          <option value="">Spagnolo</option>
        </select>
      </div>
    </div>
  </footer>

</body>

</html>