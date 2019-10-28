<?php

    $query1 = 'SELECT * FROM users ORDER By id DESC LIMIT 1';

    $db = new DB;
    $users = $db->get($query1);

    /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");
    /* If the time is less than 1200 hours, show good morning */
    if ($time < "12") {
        $greetings = "Goedemorgen ";
    } else
    /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
    if ($time >= "12" && $time < "17") {
        $greetings = "Goedemiddag ";
    } else
    /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
    if ($time >= "17" && $time < "19") {
        $greetings = "Goedenavond ";
    } else
    /* Finally, show good night if the time is greater than or equal to 1900 hours */
    if ($time >= "19") {
        $greetings = "Slaaplekker alvast ";
    }
?>



    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">VODHopper</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="<?= Http::asset('public/'); ?>">Home</a>
        <a class="p-2 text-dark" href="<?= Http::asset('public/films'); ?>">Films</a>
        <?php if(Auth::check()) { ?>
        <a class="p-2 text-dark" href="<?= Http::asset('public/profiel'); ?>">Mijn profiel</a>
         <?php } ?>
        <?php if (Auth::check('is_admin')) { ?>
        <a class="p-2 text-dark" href="<?= Http::asset('public/crm'); ?>">CRM</a>
        <?php } ?>
      </nav>


        <?php if(Auth::check()) { ?>
      <div class="dropdown">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php foreach($users as $user) { ?>
            <?= $greetings; ?> <?= $user['first_name']; ?>,
        <?php } ?>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#"></a>
          <a class="dropdown-item" href="<?= Http::asset('public/uitloggen'); ?>">Uitloggen</a>
        </div>
      </div>
        <?php } else { ?>
      <a class="btn btn-outline-primary" href="<?= Http::asset('public/inloggen'); ?>">Inloggen</a>
        <?php } ?>
    </div>
    </div>

