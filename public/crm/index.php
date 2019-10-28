<?php
    include '../../boot.php'; // laadt alle benodigdheden in

    $query = 'SELECT * FROM users ORDER By id DESC LIMIT 3';

    $db = new DB;
    $users = $db->get($query);

    if(! Auth::check()) {
        Http::redirect('');
    }

    /* Dit zet de tijd variable voor uren */
    $time = date("H");
    /* Als de tijd voor 12:00 is dan zegt hij 'Goedemorgen' */
    if ($time < "12") {
        $greetings = "Goedemorgen";
    } else
    /* Als de tijd gelijk aan/hoger dan 12:00 is en voor 17:00 zegt hij 'Goedemiddag' */
    if ($time >= "12" && $time < "17") {
        $greetings = "Goedemiddag";
    } else
    /* Áls de tijd gelijk aan/hoger dan 17:00 uur is en lager dan 19:00 dan zegt hij 'Goedenavond' */
    if ($time >= "17" && $time < "19") {
        $greetings = "Goedenavond";
    } else
    /* Als de tijd gelijk aan/hoger dan 19:00 uur is dan zegt hij 'Slaaplekker avast' */
    if ($time >= "19") {
        $greetings = "Slaaplekker alvast";
    }



    $title = 'CRM';
    include "../../partials/head.php";

    include "../../partials/menu.php";
?>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  </head>


  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <h2>CRM</h2>
    <p class="lead"></p>
  </div>

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">
      <?= $greetings; ?> <?= $user['first_name']; ?>,
    </h4>
    <hr>
    <p class="mb-0">Welkom op het CRM systeem, hierop vind u alle gegevens van de webshop. Momenteel is dit een beta versie.</p>
  </div>

  <button type="button-films" class="btn btn-secondary">Films</button>
  <button type="button-gebruikers" class="btn btn-info">Gebruikers</button>
  <button type="button-updates" class="btn btn-warning">Updates</button>
  <button type="button-logs" class="btn btn-danger">Logs</button>


<?php include "../../partials/footer.php"; ?>
