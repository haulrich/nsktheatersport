<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <meta http-equiv="Content-Style-Type" content="text/css">
    <title>NSK Theatersport 2018</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <style type="text/css">
    	body {
  	  	margin: 0;
  	  	padding: 0;
  	  	background-color: #000;
  	  	color: #fff;
  	  	font-family: Montserrat, Helvetica;
        min-width: 350px;
    	}

    	a {
  	  	color: #fff;
        text-decoration: none;
    	}

      a:hover {
        text-decoration: underline;
      }

      h1, h2, h3, h4, h5, h6, p {
        margin-top: .3rem;
      }

      h5 {
        margin-bottom: .2rem;
        font-size: 16px;
      }

    	html,body {
  	  	height: 100%;
    	}

      select {
    		-webkit-appearance: none;  /*Removes default chrome and safari style*/
    		-moz-appearance: none; /* Removes Default Firefox style*/
        appearance: none;
    		background: #fff;
    		text-indent: 0.01px; /* Removes default arrow from firefox*/
    		text-overflow: "";  /*Removes default arrow from firefox*/ /*My custom style for fonts*/
      }

      input, select, textarea {
        display: inline-block;
        margin: .3rem 0;
        padding: .8rem;
        border: 0px solid #FFF;
        font-size: 1em;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
      }

      input, select {
        width: 350px;
      }

      textarea {
        width: 100%;
      }

      input[type="number"] {
        width: 200px;
      }

      label {
        text-align: left;
      }

      input, button, select, textarea {
        border-radius: .3rem .3rem .3rem .3rem;
      }

      input.error, select.error {
        background-color: #FFC9C9;
        border: 1px solid #FFC9C9;
      }

      p.error {
        display: hide;
        margin: 0;
      }

      p.error.active {
        display: block;
        margin-top: .5rem;
        margin-bottom: .5rem;
        border-radius: .3rem;
        padding: .8rem;
        color: #fff;
        background-color: #FF4747;
        font-size: .7em;
      }

      input.errorSkip, select.errorSkip {
        background-color: #FFF;
      }

      button, input[type="submit"] {
        padding: .8rem 2rem;
        box-shadow: none;
        border: 0px solid #61223f;
        color: #fff;
        font-size: 1em;
        background-color: #61223f;
      }

      input[type="submit"] {
        width: 100%;
      }

      input[type="submit"]:hover {
        opacity: .8;
      }

      #menubar, #footer {
        background-color: #000;
        padding: 1em;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
      }

      header {
        z-index: 9999;
        position: fixed;
        top: 0;
        width: 100%;
        transition: top 0.3s;
        min-width: 350px;
      }

      main {
        margin-top: 56px;
        min-width: 350px;
      }

      footer {
        min-width: 350px;
      }

      #spelercontainer {
        border-top: 1px solid #fff;
        border-bottom: 1px solid #fff;
        margin-top: 1rem;
        padding-bottom: .5rem;
        margin-bottom: 1rem;
      }

      #speler1, #speler2, #speler3, #speler4, #speler5, #speler6 {
        width: 45%;
        padding: 1rem;
        display: inline-block;
        text-align: left;
      }

      #speler1naam, #speler2naam, #speler3naam, #speler4naam, #speler5naam, #speler6naam, #speler1student, #speler2student, #speler3student, #speler4student, #speler5student, #speler6student {
        max-width: 200px;
      }

      #speler5.nonactive, #speler6.nonactive {
        display:none;
      }

      #menutoggle {
        display: none;
      }

      #menuitems a {
        padding-right: 1em;
      }

      #menusocial a {
        font-size: 20px;
        margin-left: .5em;
      }

      #reserveercontainer {
        background-color: rgba(24, 26, 74, .4);
        padding: 2em;
        padding-bottom: 3em;
      }

      #inschrijfcontainer {
        background-color: rgba(24, 26, 74, .6);
        padding: 2em;
        padding-bottom: 3em;
      }

      #inschrijfform {
        width: 800px;
        margin: 0 auto;
      }

      #responsemessage.active, #responsemessagereserveren.active, #responsemessagevrienden.active {
        margin-top: .5rem;
        margin-bottom: 1em;
        border-radius: .3rem;
        padding: 1.5rem;
        line-height: 1.6em;
        color: #fff;
        background-color: #61223f;
      }

      #theatersportcontainer, #sponsorcontainer {
        background-color: rgba(24, 26, 74, .7);
      }

      #theatersportcontainer, #vriendencontainer {
        padding: 2em;
        padding-bottom: 3em;
      }

      #vriendencontainer {
        background-color: #000;
      }

      #vriendenflexrow {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: flex-start;
      }

      #vriendeninfo {
        padding-right: 1rem;
      }

      .accordion {
        margin-bottom: 1rem;
        width: 100%;
        text-align: left;
        transition: 0.4s;
        background-color: rgba(0,0,0,.8);
        padding: 0;
      }

      .accordion {
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        align-items: center;
      }

      .accordion h2 {
        margin: .3rem 0;
      }

      .accordion:after {
        content: '\002B';
        font-weight: bold;
      }

      .accordion.active:after {
        content: "\2212";
      }

      .panel {
        padding: 0;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
      }

      .phoneflex {
        display: flex;
        flex-wrap: nowrap;
        flex-direction: row;
        justify-content: flex-end;
        align-items: center;
        margin-top: .3rem;
        margin-bottom: 1rem;
      }

      .phoneflex input {
        margin-top: 0;
        margin-bottom: 0;
        max-width: 200px;
      }

      .phoneflex div {
        white-space: nowrap;
        margin-right: .4rem;
      }

      #vriendenformcontainer {
        width: 380px;
        padding-left: 1.2rem;
        border-left: 1px solid rgba(255,255,255, .6);
      }

      #vriendenform > div > input {
        width: 100%;
      }

      #vriendenform > div > select {
        width: 100%;
      }

      #vriendenform > div > input {
        max-width: 200px;
      }

      #nskcontainer {
        background-color: rgba(24, 26, 74, .8);
        padding: 2em;
        padding-bottom: 3em;
      }

      #sponsorcontainer, #inschrijfcontainer, #footerfondsen {
        text-align: center;
      }

      #sponsorcontainer {
        padding-top: 2em;
        padding-bottom: 1em;
        background-image: url("applaus.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
      }

      #sponsorcontainer div {
        max-width: 900px;
        margin: 0 auto;
      }

      #sponsorcontainer div img {
        padding: 1rem;
      }

      #sponsortext {
        display: block;
        padding: 2rem;
        max-width: 100%;
        margin: 0;
        background-color: rgba(0, 0, 0, .6);
      }

      #bannercontainer {
  	  	overflow: hidden;
  	  	text-align: center;
        position: relative;
        background: linear-gradient(#61223f 0%, #181a4a 100%);
  		  background: -webkit-linear-gradient(#61223f 0%, #181a4a 100%);
    	}

      #fotocontainer {
        background-color: #000;
      }

      #fotocontainer img {
        max-width: 1024px;
        display: block;
        margin: 0 auto;
      }

      #bannercontainer #logo {
        z-index: 1;
      }

      .containertext {
        max-width: 1024px;
        margin: 0 auto;
      }

      #logo {
  	  	width: 100%;
  	  	max-width: 1024px;
        margin-bottom: -5px;
    	}

    	#titlecontainer {
        background-color: #000;
  	  	position: absolute;
        right: 0;
        bottom: 1em;
        z-index: 4;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        align-items: center;
        padding: 1em;
    	}

      #titleText {
        text-align: right;
        padding: .5em;
      }

      #titleText h1, #titleText p {
        margin-bottom: .3rem;
      }

      #titleFB {
        padding: .5em;
        height: 100%;
      }

      #titleFB a i {
        font-size: 72px;
      }

      #footer p {
        margin-bottom: 0;
      }

      #footerfondsen {
        font-size: 13px;
        padding-top: .5rem;
      }

      #footerfondsen img {
        padding: .5rem;
        opacity: .6;
        padding-top: 0px;
        max-width: 200px;
      }

      #footercopy {
        text-align: center;
        font-size: 11px;
        padding-top: .8rem;
        padding-bottom: .8rem;
      }

      .full-width {
        width: 100%;
        max-width: 800px;
        margin-top: 1em;
        margin-bottom: 2rem;
      }

      .flexy {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .flexylarge {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        padding-bottom: 1rem;
      }

      .flexylarge input, .flexylarge select {
        align-self: flex-end;
      }

      .flexiest {
        display: flex;
        flex-direction: row;
        align-content: stretch;
        padding-bottom: 1rem;
        padding-right: 1rem;
      }

      .moneyz {
        display: inline-block;
        white-space: nowrap;
        flex-grow: 0;
        flex-shrink: 0;
        width: 60px;
        margin-right: 1rem;
      }

      @media screen and (min-width:995px){
        #menuitemssmall {
          display: none;
        }
      }

      @media screen and (max-width:1024px){
        #fotocontainer img {
          max-width: 100%;
        }
      }

      @media screen and (max-width:994px){
        #menuitemssmall div {
          display: flex;
          flex-direction: column;
        }

        #menuitemssmall div a {
          padding: 1em;
        }

        #menuitemssmall div a:hover {
          background-color: rgba(255,255,255,0.1);
          text-decoration: none;
        }

        #menuitemssmall {
          background-color: #000;
          z-index: 1000;
        }

        #menuitems {
          display: none;
        }

        #titlecontainer {
          position: static;
        }

        #titleFB a i {
          font-size: 60px;
          margin-left: 10px;
        }

        #menutoggle {
          display: block;
        }
      }

      @media screen and (max-width:850px){
        #inschrijfcontainer {
          width: auto;
          margin: 0 auto;
          max-width: 100%;
        }

        #inschrijfform {
          width: 100% !important;
          margin: 0 !important;
        }

        .flexy {
          flex-direction: column;
        }

        input, select, textarea {
          width: 100%;
          margin-bottom: 1em;
        }

        input[type="number"] {
          width: 100%;
        }

        #speler1, #speler2, #speler3, #speler4, #speler5, #speler6 {
          display: block;
          width: 100%;
          padding: 0;
        }

        #spelercontainer {
          padding: 1rem 2rem 1rem 2rem;
        }

        #speler1naam, #speler2naam, #speler3naam, #speler4naam, #speler5naam, #speler6naam, #speler1student, #speler2student, #speler3student, #speler4student, #speler5student, #speler6student {
          max-width: 100%;
        }

        #vriendenflexrow {
          flex-direction: column;
          align-items: center;
        }

        #vriendeninfo {
          padding: 0 1rem;
          width: 100%;
        }

        #vriendenformcontainer {
          width: 100%;
          padding-left: 0;
          border-left: none;
        }

        #vriendenform > div > input {
          width: 100%;
        }

        #vriendenform > div > select {
          width: 100%;
        }

        #vriendenform > div > input {
          max-width: 100%;
        }

        .phoneflex input {
          max-width: 100%;
        }

        #vriendenform > div > label {
          align-self: flex-start;
        }

        .nosmall {
          display: none;
        }
      }
    </style>
  </head>
  <body>
    <header id="header">
      <div id="menubar">
        <a href="#" id="menutoggle" onclick="toggle('menuitemssmall')"><i class="fas fa-bars"></i></a>
        <div id="menuitems">
          <a href="#top"><i class="fas fa-home"></i></a>
          <a href="#reserveren">reserveren</a>
          <a href="#inschrijf">inschrijven</a>
          <a href="#vrienden">vrienden van het NSK</a>
          <a href="#sponsoren">sponsoren</a>
          <a href="#theatersport">wat is theatersport?</a>
          <a href="#nsk">wat is het NSK?</a>
        </div>
        <div id="menusocial">
          <a href="https://www.facebook.com/events/389724698178622/" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/nsktheatersport/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="mailto:info@nsktheatersport.nl"><i class="fas fa-envelope"></i></a>
        </div>
      </div>
      <div id="menuitemssmall" style="display:none;">
        <div>
          <a href="#top" onclick="toggle('menuitemssmall')"><i class="fas fa-home"></i></a>
          <a href="#reserveren" onclick="toggle('menuitemssmall')">reserveren</a>
          <a href="#inschrijf" onclick="toggle('menuitemssmall')">inschrijven</a>
          <a href="#vrienden" onclick="toggle('menuitemssmall')">vrienden van het NSK</a>
          <a href="#sponsoren" onclick="toggle('menuitemssmall')">sponsoren</a>
          <a href="#theatersport" onclick="toggle('menuitemssmall')">wat is theatersport?</a>
          <a href="#nsk" onclick="toggle('menuitemssmall')">wat is het NSK?</a>
        </div>
      </div>
    </header>
    <a id="top"></a>
    <main>
    	<div id="bannercontainer">
    		<img src="logonsk.png" id="logo" alt="NSK Theatersport"/>
        <div id="titlecontainer">
          <div id="titleText">
            <h1>NSK Theatersport 2018</h1>
            <p>2/3/4 november - Utrecht, <a href="https://www.uu.nl/parnassos" target="_blank">Cultuurcentrum Parnassos</a></p>
          </div>
          <div id="titleFB">
            <a href="https://www.facebook.com/events/389724698178622/" target="_blank"><i class="fab fa-facebook"></i></a>
          </div>
        </div>
    	</div>
      <a id="reserveren"></a>
      <div id="reserveercontainer">
        <h2 style="text-align:center;">Reserveren</h2>
        <p style="text-align:center;">Om verzekerd te zijn van een plekje op de tribune, kun je hier je kaarten reserveren. Dagkaarten voor de zaterdag of zondag kosten € 6,- (regulier) of € 5,- voor studenten. Een ticket voor de finale op zondagavond kost € 7,50 (regulier) of € 6,50 (studenten).</p>
        <p style="text-align:center;">Als er meer reserveringen doorkomen dan er beschikbare plekken zijn, nemen we de reserveringen die het eerst zijn geplaatst in behandeling. Voor de finale geldt: zijn de kaarten een half uur voor aanvang niet opgehaald, dan komt de reservering te vervallen.</p>
        <p style="text-align:center;">Reserveer nu:</p>
        <?php
          $zadagErr = $zadag = $zodagErr = $zodag = $finalekaartErr = $finalekaart = $emailReser = $emailReserErr = $naamReser = $naamReserErr = "";

          if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reserveren'])) {
            if (empty($_POST["naamReser"])) {
              $naamReserErr = "naam verplicht";
            } else {
              $naamReser = test_input($_POST["naamReser"]);
            }

            if (empty($_POST["emailReser"])) {
              $emailReserErr = "we hebben een geldig e-mailadres nodig";
            } else {
              $emailReser = test_input($_POST["emailReser"]);
              // check if e-mail address is well-formed
              if (!filter_var($emailReser, FILTER_VALIDATE_EMAIL)) {
                $emailReserErr = "dit is geen e-mailadres";
              }
            }

            if (!empty($_POST["zadag"])) {
              $zadag = test_input($_POST["zadag"]);
            }

            if (!empty($_POST["zodag"])) {
              $zodag = test_input($_POST["zodag"]);
            }

            if (!empty($_POST["finalekaart"])) {
              $finalekaart = test_input($_POST["finalekaart"]);
            }

            if (empty($_POST["zadag"]) && empty($_POST["zodag"]) && empty($_POST["finalekaart"])) {
              $zadagErr = $zodagErr = $finalekaartErr = "reserveer iets";
            }
          }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '#reserveren'); ?>" id="reserveerform" style="max-width:500px;margin:0 auto;">
          <div id="responsemessagereserveren"></div>
          <div class="flexy">
            <label for="naamReser">naam:</label>
            <input
              id="naamReser"
              class="<?php if (!empty($naamReserErr)) echo "error";?>"
              type="text"
              name="naamReser"
              placeholder="naam"
              value="<?php echo $naamReser;?>"
              oninput="skipError('naamReser')">
          </div>
          <div class="flexy">
            <label for="emailReser">e-mail:</label>
            <input
              id="emailReser"
              class="<?php if (!empty($emailReserErr)) echo "error";?>"
              type="text"
              name="emailReser"
              value="<?php echo $emailReser;?>"
              placeholder="voorbeeld@gmail.com"
              oninput="skipError('emailReser')">
          </div>
          <div class="flexy">
            <label for="zadag">aantal dagkaarten zaterdag:</label>
            <input
              id="zadag"
              class="<?php if (!empty($zadagErr)) echo "error";?>"
              type="number"
              name="zadag"
              value="<?php echo $zadag;?>"
              oninput="skipError('zadag')">
          </div>
          <div class="flexy">
            <label for="zodag">aantal dagkaarten zondag:</label>
            <input
              id="zodag"
              class="<?php if (!empty($zodagErr)) echo "error";?>"
              type="number"
              name="zodag"
              value="<?php echo $zodag;?>"
              oninput="skipError('zodag')">
          </div>
          <div class="flexy">
            <label for="finalekaart">aantal finalekaarten:</label>
            <input
              id="finalekaart"
              class="<?php if (!empty($finalekaartErr)) echo "error";?>"
              type="number"
              name="finalekaart"
              value="<?php echo $finalekaart;?>"
              oninput="skipError('finalekaart')">
          </div>
          <button type="submit" name='reserveren' style="width:100%;margin-top:.5rem;">reservering versturen</button>
        </form>

        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reserveren'])) {
            $noError = false;

            $errorArray = [$emailReserErr, $naamReserErr, $zadagErr, $zodagErr, $finalekaartErr];
            $filledErrorArray = array_filter($errorArray, function ($e) {
              return $e != "";
            });

            if (sizeof($filledErrorArray) == 0) {
              $noError = true;
            } else {
              $noError = false;
            }

            if ($noError) {
              $mail_to = 'nsktheatersport2018@gmail.com';
              $subject = 'Reservering ' . $naamReser . '| za: ' . $zadag . ', zo: ' . $zodag . ', fin: ' . $finalekaart;

              $body_message = 'naam: '. $naamReser . "\r\n";
              $body_message .= 'mail: ' . $emailReser . "\r\n";
              $body_message .= 'dagkaarten zaterdag: ' . $zadag . "\r\n";
              $body_message .= 'dagkaarten zondag: ' . $zodag . "\r\n";
              $body_message .= 'finalekaarten: ' . "\r\n". $finalekaart;

              $headers = "Content-type:text/plain;charset=UTF-8" . "\r\n";
              $headers .= 'From: '. $emailReser . "\r\n";
              $headers .= 'Reply-To: '. $emailReser . "\r\n";

              $mail_status = mail($mail_to, $subject, $body_message, $headers);

              if ($mail_status) {
                $zadagErr = $zadag = $zodagErr = $zodag = $finalekaartErr = $finalekaart = $emailReser = $emailReserErr = $naamReser = $naamReserErr = "";
                ?>
                <script language="javascript" type="text/javascript">
                  var o = document.getElementById('naamReser');
                  var q = document.getElementById('emailReser');
                  var r = document.getElementById('zadag');
                  var s = document.getElementById('zodag');
                  var t = document.getElementById('finalekaart');
                  var x = document.getElementById('responsemessagereserveren');
                  x.innerHTML = 'De reservering is verzonden! Onze reactie valt binnen een week te verwachten.';
                  o.value = ""; q.value = ""; r.value = ""; s.value = "5"; t.value = ""; u.value = "";
                </script>
              <?php
              }
            } else { ?>
              <script language="javascript" type="text/javascript">
              var x = document.getElementById('responsemessagereserveren');
              x.innerHTML = 'Naam, e-mail en minstens één kaartwens verplicht';
              </script>
            <?php
            }
          }
        ?>

      </div>
      <a id="inschrijf"></a>
      <div id="inschrijfcontainer">
        <div class="containertext">
          <h2>Inschrijven</h2>
          <p>De inschrijvingen voor de spelers van het NSK 2018 zijn geopend. Vul het formulier hieronder in om je team op te geven. Wie het eerst komt, wie het eerst maalt. Geef je gerust op met meerdere teams per vereniging, maar weet dat we bij een teveel aan aanmeldingen voorrang geven aan teams van verschillende verenigingen. Na aanmelding ontvang je verdere instructies over jullie deelname per e-mail.</p>

          <?php
            $teamNaamErr = $verenigingErr = $emailErr = $aantalErr = "";
            $teamNaam = $vereniging = $email = $aantal = $commentaar = "";
            $speler1naam = $speler2naam = $speler3naam = $speler4naam = $speler5naam = $speler6naam = "";
            $speler1leeftijd = $speler2leeftijd = $speler3leeftijd = $speler4leeftijd = $speler5leeftijd = $speler6leeftijd = 18;
            $speler1student = $speler2student = $speler3student = $speler4student = $speler5student = $speler6student = "student";
            $speler1naamErr = $speler2naamErr = $speler3naamErr = $speler4naamErr = $speler5naamErr = $speler6naamErr = "";
            $speler1leeftijdErr = $speler2leeftijdErr = $speler3leeftijdErr = $speler4leeftijdErr = $speler5leeftijdErr = $speler6leeftijdErr = "";
            $studentenErr = $speler1studentErr = $speler2studentErr = $speler3studentErr = $speler4studentErr = $speler5studentErr = $speler6studentErr = "";
            $slapers = $supporters = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['inschrijven'])) {
              if (empty($_POST["teamNaam"])) {
                $teamNaamErr = "jawel, tijd voor een teamnaam";
              } else {
                $teamNaam = test_input($_POST["teamNaam"]);
              }

              if (!empty($_POST["vereniging"])) {
                $vereniging = test_input($_POST["vereniging"]);
              }

              if (empty($_POST["email"])) {
                $emailErr = "we hebben een geldig e-mailadres nodig";
              } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "dit is geen e-mailadres";
                }
              }

              if (!empty($_POST["aantal"])) {
                $aantal = test_input($_POST["aantal"]);
              }

              if (empty($_POST["speler1naam"])) {
                $speler1naamErr = "Wie oh wie?";
              } else {
                $speler1naam = test_input($_POST["speler1naam"]);
              }

              if (empty($_POST["speler1leeftijd"])) {
                $speler1leeftijdErr = "leeftijd is verplicht";
              } else {
                $speler1leeftijd = test_input($_POST["speler1leeftijd"]);
                if (!preg_match("/^[0-9]*$/", $speler1leeftijd)) {
                  $speler1leeftijdErr = "alleen hele nummers";
                }
              }

              if (empty($_POST["speler2naam"])) {
                $speler2naamErr = "Wie oh wie?";
              } else {
                $speler2naam = test_input($_POST["speler2naam"]);
              }

              if (empty($_POST["speler2leeftijd"])) {
                $speler2leeftijdErr = "leeftijd is verplicht";
              } else {
                $speler2leeftijd = test_input($_POST["speler2leeftijd"]);
                if (!preg_match("/^[0-9]*$/", $speler2leeftijd)) {
                  $speler2leeftijdErr = "alleen hele nummers";
                }
              }

              if (empty($_POST["speler3naam"])) {
                $speler3naamErr = "Wie oh wie?";
              } else {
                $speler3naam = test_input($_POST["speler3naam"]);
              }

              if (empty($_POST["speler3leeftijd"])) {
                $speler3leeftijdErr = "leeftijd is verplicht";
              } else {
                $speler3leeftijd = test_input($_POST["speler3leeftijd"]);
                if (!preg_match("/^[0-9]*$/", $speler3leeftijd)) {
                  $speler3leeftijdErr = "alleen hele nummers";
                }
              }

              if (empty($_POST["speler4naam"])) {
                $speler4naamErr = "Wie oh wie?";
              } else {
                $speler4naam = test_input($_POST["speler4naam"]);
              }

              if (empty($_POST["speler4leeftijd"])) {
                $speler4leeftijdErr = "leeftijd is verplicht";
              } else {
                $speler4leeftijd = test_input($_POST["speler4leeftijd"]);
                if (!preg_match("/^[0-9]*$/", $speler4leeftijd)) {
                  $speler4leeftijdErr = "alleen hele nummers";
                }
              }

              if ($_POST["aantal"] === "5") {
                if (empty($_POST["speler5naam"])) {
                  $speler5naamErr = "Wie oh wie?";
                } else {
                  $speler5naam = test_input($_POST["speler5naam"]);
                }

                if (empty($_POST["speler5leeftijd"])) {
                  $speler5leeftijdErr = "leeftijd is verplicht";
                } else {
                  $speler5leeftijd = test_input($_POST["speler5leeftijd"]);
                  if (!preg_match("/^[0-9]*$/", $speler5leeftijd)) {
                    $speler5leeftijdErr = "alleen hele nummers";
                  }
                }
              }

              if ($_POST["aantal"] === "6") {
                if (empty($_POST["speler5naam"])) {
                  $speler5naamErr = "Wie oh wie?";
                } else {
                  $speler5naam = test_input($_POST["speler5naam"]);
                }

                if (empty($_POST["speler5leeftijd"])) {
                  $speler5leeftijdErr = "leeftijd is verplicht";
                } else {
                  $speler5leeftijd = test_input($_POST["speler5leeftijd"]);
                  if (!preg_match("/^[0-9]*$/", $speler5leeftijd)) {
                    $speler5leeftijdErr = "alleen hele nummers";
                  }
                }

                if (empty($_POST["speler6naam"])) {
                  $speler6naamErr = "Wie oh wie?";
                } else {
                  $speler6naam = test_input($_POST["speler6naam"]);
                }

                if (empty($_POST["speler6leeftijd"])) {
                  $speler6leeftijdErr = "leeftijd is verplicht";
                } else {
                  $speler6leeftijd = test_input($_POST["speler6leeftijd"]);
                  if (!preg_match("/^[0-9]*$/", $speler6leeftijd)) {
                    $speler6leeftijdErr = "alleen hele nummers";
                  }
                }
              }

              $spelerArray = [$_POST["speler1student"], $_POST["speler2student"], $_POST["speler3student"], $_POST["speler4student"]];

              if ($_POST["aantal"] === "6") {
                $smallSpelers = [$_POST["speler5student"], $_POST["speler6student"]];
                $spelerArray = array_merge($spelerArray,$smallSpelers);
              };

              if ($_POST["aantal"] === "5") {
                $smallSpelers = [$_POST["speler5student"]];
                $spelerArray = array_merge($spelerArray,$smallSpelers);
              };

              $studentArray = array_filter($spelerArray, function ($e) {
                return $e == "student";
              });

              if (sizeof($studentArray) < 2) {
                $speler1student = test_input($_POST["speler1student"]);
                $speler2student = test_input($_POST["speler2student"]);
                $speler3student = test_input($_POST["speler3student"]);
                $speler4student = test_input($_POST["speler4student"]);
                $speler5student = test_input($_POST["speler5student"]);
                $speler6student = test_input($_POST["speler6student"]);
                $studentenErr = "je team heeft minimaal twee studenten nodig";
                if ($speler1student != "student") {
                  $speler1studentErr = "niet genoeg studenten";
                }
                if ($speler2student != "student") {
                  $speler2studentErr = "niet genoeg studenten";
                }
                if ($speler3student != "student") {
                  $speler3studentErr = "niet genoeg studenten";
                }
                if ($speler4student != "student") {
                  $speler4studentErr = "niet genoeg studenten";
                }
                if ($speler5student != "student") {
                  $speler5studentErr = "niet genoeg studenten";
                }
                if ($speler6student != "student") {
                  $speler6studentErr = "niet genoeg studenten";
                }
              } else {
                $speler1student = test_input($_POST["speler1student"]);
                $speler2student = test_input($_POST["speler2student"]);
                $speler3student = test_input($_POST["speler3student"]);
                $speler4student = test_input($_POST["speler4student"]);
                $speler5student = test_input($_POST["speler5student"]);
                $speler6student = test_input($_POST["speler6student"]);
              };

              if (!empty($_POST["betaling"])) {
                $betaling = test_input($_POST["betaling"]);
              }

              if (!empty($_POST["slapers"])) {
                $slapers = test_input($_POST["slapers"]);
              }

              if (!empty($_POST["supporters"])) {
                $supporters = test_input($_POST["supporters"]);
              }

              if (!empty($_POST["commentaar"])) {
                $commentaar = test_input($_POST["commentaar"]);
              }
            }

            function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
          ?>

          <form id="inschrijfform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '#inschrijf'); ?>">
            <p id="responsemessage"></p>
            <div class="flexy">
              <label for="teamNaam">naam van het team:</label>
              <input
                id="teamNaam"
                class="<?php if (!empty($teamNaamErr)) echo "error";?>"
                type="text"
                name="teamNaam"
                value="<?php echo $teamNaam;?>"
                placeholder="teamnaam"
                oninput="skipError('teamNaam')">
            </div>
            <p class="error <?php if (!empty($teamNaamErr)) echo "active";?>"><?php echo $teamNaamErr; ?></p>
            <div class="flexy">
              <label for="vereniging">(eventuele) naam van jullie theatersportvereniging:</label>
              <input
                id="vereniging"
                class="<?php if (!empty($verenigingErr)) echo "error";?>"
                type="text"
                name="vereniging"
                value="<?php echo $vereniging;?>"
                placeholder="verenigingsnaam"
                oninput="skipError('vereniging')">
            </div>
            <p class="error <?php if (!empty($verenigingErr)) echo "active";?>"><?php echo $verenigingErr; ?></p>
            <div class="flexy">
              <label for="email">e-mail contactpersoon:</label>
              <input
                id="email"
                class="<?php if (!empty($emailErr)) echo "error";?>"
                type="text"
                name="email"
                value="<?php echo $email;?>"
                placeholder="voorbeeld@gmail.com"
                oninput="skipError('email')">
            </div>
            <p class="error <?php if (!empty($emailErr)) echo "active";?>"><?php echo $emailErr; ?></p>
            <div class="flexy">
              <label for="aantal">aantal spelers in ons team:</label>
              <select
                id="aantal"
                name="aantal"
                value="<?php echo $aantal; ?>"
                onchange="setAantal(this)"
                onselect="setAantal(this)">
                <option <?php if (isset($aantal) && $aantal=="4") echo "selected";?> value="4">4</option>
                <option <?php if (isset($aantal) && $aantal=="5") echo "selected";?> value="5">5</option>
                <option <?php if (isset($aantal) && $aantal=="6") echo "selected";?> value="6">6</option>
              </select>
            </div>
            <div id="spelercontainer">
            <p class="error <?php if (!empty($studentenErr)) echo "active";?>"><?php echo $studentenErr; ?></p>
              <div id="speler1">
                <h5>speler 1</h5>
                <div class="flexy">
                  <label for="speler1naam">naam:</label>
                  <input
                    id="speler1naam"
                    class="<?php if (!empty($speler1naamErr)) echo "error";?>"
                    type="text"
                    name="speler1naam"
                    value="<?php echo $speler1naam;?>"
                    placeholder="voor en achternaam"
                    oninput="skipError('speler1naam')">
                </div>
                <div class="flexy">
                  <label for="speler1leeftijd">leeftijd:</label>
                  <input
                    id="speler1leeftijd"
                    class="<?php if (!empty($speler1leeftijdErr)) echo "error";?>"
                    type="number"
                    name="speler1leeftijd"
                    value="<?php echo $speler1leeftijd;?>"
                    placeholder="18"
                    oninput="skipError('speler1leeftijd')">
                </div>
                <div class="flexy">
                  <label for="speler1student">studiestatus:</label>
                  <select
                    id="speler1student"
                    class="<?php if (!empty($speler1studentErr)) echo "error";?>"
                    name="speler1student"
                    value="<?php echo $speler1student;?>"
                    onchange="skipError('speler1student')">
                    <option <?php if (isset($speler1student) && $speler1student=="student") echo "selected";?> value="student">student</option>
                    <option <?php if (isset($speler1student) && $speler1student=="opvulling") echo "selected";?> value="opvulling">geen student</option>
                  </select>
                </div>
              </div>
              <div id="speler2">
                <h5>speler 2</h5>
                <div class="flexy">
                  <label for="speler2naam">naam:</label>
                  <input
                    id="speler2naam"
                    class="<?php if (!empty($speler2naamErr)) echo "error";?>"
                    type="text"
                    name="speler2naam"
                    value="<?php echo $speler2naam;?>"
                    placeholder="voor en achternaam"
                    oninput="skipError('speler2naam')">
                </div>
                <div class="flexy">
                  <label for="speler2leeftijd">leeftijd:</label>
                  <input
                    id="speler2leeftijd"
                    class="<?php if (!empty($speler2leeftijdErr)) echo "error";?>"
                    type="number"
                    name="speler2leeftijd"
                    value="<?php echo $speler2leeftijd;?>"
                    placeholder="18"
                    oninput="skipError('speler2leeftijd')">
                </div>
                <div class="flexy">
                  <label for="speler1student">studiestatus:</label>
                  <select
                    id="speler2student"
                    class="<?php if (!empty($speler2studentErr)) echo "error";?>"
                    name="speler2student"
                    value="<?php echo $speler2student;?>"
                    onchange="skipError('speler2student')">
                    <option <?php if (isset($speler2student) && $speler2student=="student") echo "selected";?> value="student">student</option>
                    <option <?php if (isset($speler2student) && $speler2student=="opvulling") echo "selected";?> value="opvulling">geen student</option>
                  </select>
                </div>
              </div>
              <div id="speler3">
                <h5>speler 3</h5>
                <div class="flexy">
                  <label for="speler3naam">naam:</label>
                  <input
                    id="speler3naam"
                    class="<?php if (!empty($speler3naamErr)) echo "error";?>"
                    type="text"
                    name="speler3naam"
                    value="<?php echo $speler3naam;?>"
                    placeholder="voor en achternaam"
                    oninput="skipError('speler3naam')">
                </div>
                <div class="flexy">
                  <label for="speler3leeftijd">leeftijd:</label>
                  <input
                    id="speler3leeftijd"
                    class="<?php if (!empty($speler3leeftijdErr)) echo "error";?>"
                    type="number"
                    name="speler3leeftijd"
                    value="<?php echo $speler3leeftijd;?>"
                    placeholder="18"
                    oninput="skipError('speler3leeftijd')">
                </div>
                <div class="flexy">
                  <label for="speler1student">studiestatus:</label>
                  <select
                    id="speler3student"
                    class="<?php if (!empty($speler3studentErr)) echo "error";?>"
                    name="speler3student"
                    value="<?php echo $speler3student;?>"
                    onchange="skipError('speler3student')">
                    <option <?php if (isset($speler3student) && $speler3student=="student") echo "selected";?> value="student">student</option>
                    <option <?php if (isset($speler3student) && $speler3student=="opvulling") echo "selected";?> value="opvulling">geen student</option>
                  </select>
                </div>
              </div>
              <div id="speler4">
                <h5>speler 4</h5>
                <div class="flexy">
                  <label for="speler4naam">naam:</label>
                  <input
                    id="speler4naam"
                    class="<?php if (!empty($speler4naamErr)) echo "error";?>"
                    type="text"
                    name="speler4naam"
                    value="<?php echo $speler4naam;?>"
                    placeholder="voor en achternaam"
                    oninput="skipError('speler4naam')">
                </div>
                <div class="flexy">
                  <label for="speler4leeftijd">leeftijd:</label>
                  <input
                    id="speler4leeftijd"
                    class="<?php if (!empty($speler4leeftijdErr)) echo "error";?>"
                    type="number"
                    name="speler4leeftijd"
                    value="<?php echo $speler4leeftijd;?>"
                    placeholder="18"
                    oninput="skipError('speler4leeftijd')">
                </div>
                <div class="flexy">
                  <label for="speler1student">studiestatus:</label>
                  <select
                    id="speler4student"
                    class="<?php if (!empty($speler4studentErr)) echo "error";?>"
                    name="speler4student"
                    value="<?php echo $speler4student;?>"
                    onchange="skipError('speler4student')">
                    <option <?php if (isset($speler4student) && $speler4student=="student") echo "selected";?> value="student">student</option>
                    <option <?php if (isset($speler4student) && $speler4student=="opvulling") echo "selected";?> value="opvulling">geen student</option>
                  </select>
                </div>
              </div>
              <div id="speler5" class="nonactive">
                <h5>speler 5</h5>
                <div class="flexy">
                  <label for="speler5naam">naam:</label>
                  <input
                    id="speler5naam"
                    class="<?php if (!empty($speler5naamErr)) echo "error";?>"
                    type="text"
                    name="speler5naam"
                    value="<?php echo $speler5naam;?>"
                    placeholder="voor en achternaam"
                    oninput="skipError('speler5naam')">
                </div>
                <div class="flexy">
                  <label for="speler5leeftijd">leeftijd:</label>
                  <input
                    id="speler5leeftijd"
                    class="<?php if (!empty($speler5leeftijdErr)) echo "error";?>"
                    type="number"
                    name="speler5leeftijd"
                    value="<?php echo $speler5leeftijd;?>"
                    placeholder="18"
                    oninput="skipError('speler5leeftijd')">
                </div>
                <div class="flexy">
                  <label for="speler1student">studiestatus:</label>
                  <select
                    id="speler5student"
                    class="<?php if (!empty($speler5studentErr)) echo "error";?>"
                    name="speler5student"
                    value="<?php echo $speler5student;?>"
                    onchange="skipError('speler5student')">
                    <option <?php if (isset($speler5student) && $speler5student=="student") echo "selected";?> value="student">student</option>
                    <option <?php if (isset($speler5student) && $speler5student=="opvulling") echo "selected";?> value="opvulling">geen student</option>
                  </select>
                </div>
              </div>
              <div id="speler6" class="nonactive">
                <h5>speler 6</h5>
                <div class="flexy">
                  <label for="speler6naam">naam:</label>
                  <input
                    id="speler6naam"
                    class="<?php if (!empty($speler6naamErr)) echo "error";?>"
                    type="text"
                    name="speler6naam"
                    value="<?php echo $speler6naam;?>"
                    placeholder="voor en achternaam"
                    oninput="skipError('speler6naam')">
                </div>
                <div class="flexy">
                  <label for="speler6leeftijd">leeftijd:</label>
                  <input
                    id="speler6leeftijd"
                    class="<?php if (!empty($speler6leeftijdErr)) echo "error";?>"
                    type="number"
                    name="speler6leeftijd"
                    value="<?php echo $speler6leeftijd;?>"
                    placeholder="18"
                    oninput="skipError('speler6leeftijd')">
                </div>
                <div class="flexy">
                  <label for="speler1student">studiestatus:</label>
                  <select
                    id="speler6student"
                    class="<?php if (!empty($speler6studentErr)) echo "error";?>"
                    name="speler6student"
                    value="<?php echo $speler6student;?>"
                    onchange="skipError('speler6student')">
                    <option <?php if (isset($speler6student) && $speler6student=="student") echo "selected";?> value="student">student</option>
                    <option <?php if (isset($speler6student) && $speler6student=="opvulling") echo "selected";?> value="opvulling">geen student</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="flexy" style="padding-bottom:1rem;">
              <div>
                <span>hiermee komt het totale deelnemersbedrag op: </span>
              </div>
              <div class="nosmall">
                <span id="times">4</span> x €50,-
              </div>
              <div class="nosmall">=</div>
              <div>
                €<span id="total">200</span>,-
              </div>
            </div>
            <div class="flexylarge">
              <label for="betaling">om het studentenbudget te ontlasten, bieden we onze teams de mogelijkheid om het deelnemersbedrag in twee termijnen te betalen in plaats van in één keer (eind sept en eind okt). Heeft jouw team hier interesse in?</label>
              <select
                id="betaling"
                name="betaling"
                value="<?php echo $betaling;?>">
                <option <?php if (isset($betaling) && $betaling=="nee") echo "selected";?> value="nee">nee joh gaat lukken</option>
                <option <?php if (isset($betaling) && $betaling=="ja") echo "selected";?> value="ja">ja heel fijn</option>
              </select>
            </div>
            <div class="flexylarge">
              <label for="slapers">de laatste hand wordt aan dit plan gelegd, maar grote kans dat er dit jaar voor de spelers van buiten Utrecht een hostelbed geregeld kan worden. Zijn er spelers in jullie team die hiervan gebruik willen maken en zo ja, hoeveel?</label>
              <input
                id="slapers"
                class="<?php if (!empty($slapersErr)) echo "error";?>"
                type="number"
                name="slapers"
                value="<?php echo $slapers;?>"
                placeholder="aantal slapers"
                oninput="skipError('slapers')">
            </div>
            <div class="flexylarge">
              <label for="supporters">voor de vaste supporters die ons het hele weekend vergezellen, reserveren we twee dagkaarten en een kaartje voor het feest op zaterdag. Van hoeveel vaste supporters weten jullie nu al dat ze mee komen?</label>
              <input
                id="supporters"
                class="<?php if (!empty($supportersErr)) echo "error";?>"
                type="number"
                name="supporters"
                value="<?php echo $supporters;?>"
                placeholder="aantal supporters"
                oninput="skipError('supporters')">
            </div>
            <div style="text-align:left;">
              <label for="commentaar">verdere vragen of opmerkingen:</label>
              <textarea id="commentaar" name="commentaar" rows="2">
                <?php echo $commentaar;?>
              </textarea>
            </div>
            <input type="submit" name="inschrijven" value="schrijf ons in">
          </form>

          <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['inschrijven'])) {
              $fiveOrSix = false;
              $noError = false;
              if ($_POST['aantal'] === "4") {
                $fiveOrSix = true;
              };
              if ($_POST['aantal'] === "5") {
                if (!empty($_POST["speler5naam"]) && !empty($_POST["speler5leeftijd"])) {
                  $fiveOrSix = true;
                }
              };
              if ($_POST['aantal'] === "6") {
                if (!empty($_POST["speler5naam"]) && !empty($_POST["speler5leeftijd"]) && !empty($_POST["speler6naam"]) && !empty($_POST["speler6leeftijd"])) {
                  $fiveOrSix = true;
                }
              };
              $errorArray = [$teamNaamErr, $verenigingErr, $emailErr, $aantalErr];
              $filledErrorArray = array_filter($errorArray, function ($e) {
                return $e != "";
              });

              if (sizeof($filledErrorArray) == 0) {
                $noError = true;
              } else {
                $noError = false;
              }

              if (!empty($_POST["teamNaam"]) && !empty($_POST["email"]) && !empty($_POST["commentaar"]) && sizeof($studentArray) >= 2 && !empty($_POST["speler1naam"]) && !empty($_POST["speler2naam"]) && !empty($_POST["speler3naam"]) && !empty($_POST["speler4naam"]) &&
              !empty($_POST["speler1leeftijd"]) && !empty($_POST["speler2leeftijd"]) && !empty($_POST["speler3leeftijd"]) && !empty($_POST["speler4leeftijd"]) && $fiveOrSix === true && $noError === true) {
                $field_teamnaam = $_POST['teamNaam'];
                $field_vereniging = $_POST['vereniging'];
                $field_email = $_POST['email'];
                $field_aantal = $_POST['aantal'];
                $field_naam1 = $_POST["speler1naam"];
                $field_naam2 = $_POST["speler2naam"];
                $field_naam3 = $_POST["speler3naam"];
                $field_naam4 = $_POST["speler4naam"];
                $field_naam5 = $_POST["speler5naam"];
                $field_naam6 = $_POST["speler6naam"];
                $field_leeftijd1 = $_POST["speler1leeftijd"];
                $field_leeftijd2 = $_POST["speler2leeftijd"];
                $field_leeftijd3 = $_POST["speler3leeftijd"];
                $field_leeftijd4 = $_POST["speler4leeftijd"];
                $field_leeftijd5 = $_POST["speler5leeftijd"];
                $field_leeftijd6 = $_POST["speler6leeftijd"];
                $field_student1 = $_POST["speler1student"];
                $field_student2 = $_POST["speler2student"];
                $field_student3 = $_POST["speler3student"];
                $field_student4 = $_POST["speler4student"];
                $field_student5 = $_POST["speler5student"];
                $field_student6 = $_POST["speler6student"];
                $field_betaling = $_POST['betaling'];
                $field_slapers = $_POST['slapers'];
                $field_supporters = $_POST['supporters'];
                $field_commentaar = $_POST['commentaar'];

                $mail_to = 'nsktheatersport2018@gmail.com';
                $subject = 'Ingevuld inschrijfformulier team: ' . $field_teamnaam;

                $body_message = 'Teamnaam: '. $field_teamnaam . "\r\n";
                $body_message .= 'Vereniging: ' . $field_vereniging . "\r\n";
                $body_message .= 'E-mail contactpersoon: ' . $field_email . "\r\n";
                $body_message .= 'Aantal spelers: ' . $field_aantal . "\r\n";
                $body_message .= '(eventuele ingevulde velden boven dit aantal spelers zijn automatisch ingevuld en kunnen worden genegeerd)' . "\r\n\r\n" . "speler 1:" . "\r\n";
                $body_message .= 'naam: ' . $field_naam1 . "\r\n";
                $body_message .= 'leeftijd: ' . $field_leeftijd1 . "\r\n";
                $body_message .= 'deze persoon is: ' . $field_student1 . "\r\n\r\n";

                $body_message .= 'speler 2:' . "\r\n" . 'naam: ' . $field_naam2 . "\r\n";
                $body_message .= 'leeftijd: ' . $field_leeftijd2 . "\r\n";
                $body_message .= 'deze persoon is: ' . $field_student2 . "\r\n\r\n";
                $body_message .= 'speler 3:' . "\r\n" . 'naam: ' . $field_naam3 . "\r\n";
                $body_message .= 'leeftijd: ' . $field_leeftijd3 . "\r\n";
                $body_message .= 'deze persoon is: ' . $field_student3 . "\r\n\r\n";
                $body_message .= 'speler 4:' . "\r\n" . 'naam: ' . $field_naam4 . "\r\n";
                $body_message .= 'leeftijd: ' . $field_leeftijd4 . "\r\n";
                $body_message .= 'deze persoon is: ' . $field_student4 . "\r\n\r\n";
                $body_message .= 'speler 5:' . "\r\n" . 'naam: ' . $field_naam5 . "\r\n";
                $body_message .= 'leeftijd: ' . $field_leeftijd5 . "\r\n";
                $body_message .= 'deze persoon is: ' . $field_student5 . "\r\n\r\n";
                $body_message .= 'speler 6:' . "\r\n" . 'naam: ' . $field_naam6 . "\r\n";
                $body_message .= 'leeftijd: ' . $field_leeftijd6 . "\r\n";
                $body_message .= 'deze persoon is: ' . $field_student6 . "\r\n\r\n";

                $body_message .= 'Interesse betaalregeling: ' . $field_betaling . "\r\n";
                $body_message .= 'Slaapplekken nodig: ' . $field_slapers . "\r\n";
                $body_message .= 'Supporters mee: ' . $field_supporters . "\r\n";
                $body_message .= 'Vragen of opmerkingen: ' . "\r\n". $field_commentaar;

                $headers = "Content-type:text/plain;charset=UTF-8" . "\r\n";
                $headers .= 'From: '. $field_email . "\r\n";
                $headers .= 'Reply-To: '. $field_email . "\r\n";

                $mail_status = mail($mail_to, $subject, $body_message, $headers);

                if ($mail_status) {
                  $teamNaam = $vereniging = $email = $aantal = $commentaar = "";
                  $speler1naam = $speler2naam = $speler3naam = $speler4naam = $speler5naam = $speler6naam = "";
                  $speler1leeftijd = $speler2leeftijd = $speler3leeftijd = $speler4leeftijd = $speler5leeftijd = $speler6leeftijd = 18;
                  $speler1student = $speler2student = $speler3student = $speler4student = $speler5student = $speler6student = "student";
                  $slapers = $supporters = "";
                  ?>
                  <script language="javascript" type="text/javascript">
                    var y = document.getElementById('teamNaam');
                    var z = document.getElementById('vereniging');
                    var a = document.getElementById('email');
                    var b = document.getElementById('aantal');
                    var c = document.getElementById('speler1naam');
                    var d = document.getElementById('speler2naam');
                    var e = document.getElementById('speler3naam');
                    var f = document.getElementById('speler4naam');
                    var i = document.getElementById('speler1leeftijd');
                    var j = document.getElementById('speler2leeftijd');
                    var k = document.getElementById('speler3leeftijd');
                    var l = document.getElementById('speler4leeftijd');
                    var o = document.getElementById('speler1student');
                    var p = document.getElementById('speler2student');
                    var q = document.getElementById('speler3student');
                    var r = document.getElementById('speler4student');
                    var s = document.getElementById('betaling');
                    var t = document.getElementById('slapers');
                    var u = document.getElementById('supporters');
                    var v = document.getElementById('commentaar');
                    var x = document.getElementById('responsemessage');
                    x.innerHTML = 'de inschrijving is verzonden! Jullie krijgen binnen een week een mail met verdere stappen. Let op: pas na ontvangstbevesting per mail is jullie inschrijving compleet. Als je na een week nog geen bericht hebt ontvangen, geef een gil. Je hoort van ons!';
                    y.value = ""; z.value = ""; a.value = ""; b.value = "4"; c.value = ""; d.value = ""; e.value = ""; f.value = ""; i.value = "18"; j.value = "18"; k.value = "18"; l.value = "18"; o.value = "student"; p.value = "student"; q.value = "student"; r.value = "student"; s.value = "nee"; t.value = ""; u.value = ""; v.value = "";
                  </script>
                <?php
                }
              } else { ?>
                <script language="javascript" type="text/javascript">
                var x = document.getElementById('responsemessage');
                x.innerHTML = 'de inschrijving is niet verzonden. Kijk hieronder waar het aan schort';
                </script>
              <?php
              }
            }
          ?>
        </div>
      </div>
      <a id="vrienden"></a>
      <div id="vriendencontainer">
        <div class="containertext">
          <h2 style="text-align:center;">Vrienden van het NSK</h2>
          <div style='text-align:center;padding-bottom:1rem;'>Het NSK komt er aan! Om ieder jaar weer een daverend toernooi neer te zetten en toch een studentenprijs te bieden aan zowel spelers als bezoekers, hebben we onze vrienden nodig. Jij maakt het verschil tussen droog brood en tosti kaas. En tussen luchtbedjes en slaapzalen. Draag als je dat kan dus een extra steentje bij en zie wat deze vriendschap allemaal voor jou kan betekenen!</div>
          <p id='responsemessagevrienden'></p>
          <div id="vriendenflexrow">
            <div id="vriendeninfo">
              <div class="accordion"><h2>hoe werkt het?</h2></div>
              <div class="panel">
                <!-- <div style='text-align:center;padding-bottom:1rem;'><img src="luuk_juicht.gif" width='100' height='100' alt='juichen' style='border-radius:50%;border:3px solid rgba(250,250,250,.8);' /></div> -->
                <p>als vrienden onder elkaar houden we het graag gemakkelijk:</p>
                <ol>
                  <li>vul het formulier hiernaast in</li>
                  <li>binnen drie werkdagen ontvang je een appje met een tikkie</li>
                  <li>tik 'm aan!</li>
                </ol>
              </div>
              <div class="accordion"><h2>tegenprestaties</h2></div>
              <div class="panel">
                <div style='text-align:center;padding-bottom:1rem;'><img src="jorik_oooh.gif" width='100' height='100' alt='oooohhh' style='border-radius:50%;border:3px solid rgba(250,250,250,.8);' /></div>
                <div class='flexiest'><div class="moneyz">€ 5,-</div>
                <div>good vibes en een prachttoernooi</div></div>
                <div class='flexiest'><div class="moneyz">€ 7,50</div>
                <div>je wordt bij name genoemd tijdens de opening van het toernooi</div></div>
                <div class='flexiest'><div class="moneyz">€ 10,-</div>
                <div>je mag een uitdaging indienen voor de voorronde</div></div>
                <div class='flexiest'><div class="moneyz">€ 15,-</div>
                <div>je mag op een versierde stoel (zowel publiek als speler)</div></div>
                <div class='flexiest'><div class="moneyz">€ 20,-</div>
                <div>je eigen gepersonaliseerde bedankgif</div></div>
                <div class='flexiest'><div class="moneyz">€ 30,-</div>
                <div>je mag een uitdaging bedenken voor de kwartfinale</div></div>
                <div class='flexiest'><div class="moneyz">€ 40,-</div>
                <div>je mag een uitdaging bedenken voor de halve finale</div></div>
                <div class='flexiest'><div class="moneyz">€ 50,-</div>
                <div>een versierde plek vooraan bij de finale (incl. finalekaartje uiteraard)</div></div>
              </div>
            </div>
            <div id="vriendenformcontainer">
              <h2>word een vriend</h2>

              <?php
                $vriendnaam = $vriendachternaam = $vriendmail = $vriendtel = $vriendsuggestie = $vriendvraag = "";
                $vriendnaamErr = $vriendachternaamErr = $vriendmailErr = $vriendtelErr = "";
                $vriendbedrag = "5";

                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['vrienden'])) {
                  if (empty($_POST["vriend_name"])) {
                    $vriendnaamErr = "verplicht";
                  } else {
                    $vriendnaam = test_input($_POST["vriend_name"]);
                  }

                  if (empty($_POST["vriend_lastname"])) {
                    $vriendachternaamErr = "verplicht";
                  } else {
                    $vriendachternaam = test_input($_POST["vriend_lastname"]);
                  }

                  if (empty($_POST["vriend_mail"])) {
                    $vriendmailErr = "geef je e-mailadres op";
                  } else {
                    $vriendmail = test_input($_POST["vriend_mail"]);
                    // check if e-mail address is well-formed
                    if (!filter_var($vriendmail, FILTER_VALIDATE_EMAIL)) {
                      $vriendmailErr = "dit is geen e-mailadres";
                    }
                  }

                  if (empty($_POST["vriend_phone"])) {
                    $vriendtelErr = "we hebben een telefoonnummer nodig";
                  } else {
                    $vriendtel = test_input($_POST["vriend_phone"]);
                    if (!preg_match('/^[0-9]{8}$/', $vriendtel)) {
                      $vriendtelErr = "is dit echt je telefoonnummer?";
                    }
                  }

                  if (!empty($_POST["vriend_value"])) {
                    $vriendbedrag = test_input($_POST["vriend_value"]);
                  }

                  if (!empty($_POST["vriend_input"])) {
                    $vriendsuggestie = test_input($_POST["vriend_input"]);
                  }

                  if (!empty($_POST["vriend_questions"])) {
                    $vriendvraag = test_input($_POST["vriend_questions"]);
                  }
                }
              ?>
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '#vrienden'); ?>" id="vriendenform">
                <div class='flexy'>
                  <label for="name">naam:</label>
                  <input
                    type="text"
                    id="name"
                    value="<?php echo $vriendnaam;?>"
                    class="<?php if (!empty($vriendnaamErr)) echo "error";?>"
                    oninput="skipError('name')"
                    name="vriend_name"
                    placeholder="voornaam" />
                </div>
                <div class='flexy'>
                  <label for="lastname">achternaam:</label>
                  <input
                    type="text"
                    id="lastname"
                    value="<?php echo $vriendachternaam;?>"
                    class="<?php if (!empty($vriendachternaamErr)) echo "error";?>"
                    oninput="skipError('lastname')"
                    name="vriend_lastname"
                    placeholder="achternaam" />
                </div>
                <div class='flexy'>
                  <label for="mail">e-mail:</label>
                  <input
                    type="email"
                    id="mail"
                    name="vriend_mail"
                    value="<?php echo $vriendmail;?>"
                    class="<?php if (!empty($vriendmailErr)) echo "error";?>"
                    oninput="skipError('mail')"
                    placeholder="voorbeeld@gmail.com" />
                </div>
                <p class="error <?php if (!empty($vriendmailErr)) echo "active";?>"><?php echo $vriendmailErr; ?></p>
                <div style='padding-top:.7rem;'>
                  <label for="phone">mobiel telefoonnummer (voor het tikkie):</label>
                  <div class="phoneflex">
                    <div>06 - </div>
                    <input
                      type="tel"
                      id="phone"
                      name="vriend_phone"
                      value="<?php echo $vriendtel;?>"
                      class="<?php if (!empty($vriendtelErr)) echo "error";?>"
                      oninput="skipError('phone')"
                      placeholder="18273645"
                    />

                  </div>
                </div>
                <p class="error <?php if (!empty($vriendtelErr)) echo "active";?>"><?php echo $vriendtelErr; ?></p>
                <div>
                  <label for="value">als vriend leg ik graag een bedrag in van:</label>
                  <select
                    id='value'
                    name="vriend_value"
                    style="margin-bottom:1rem;"
                    value="<?php echo $vriendbedrag;?>">
                    >
                    <option <?php if (isset($vriendbedrag) && $vriendbedrag == "5") echo "selected";?> value="5">€ 5,-</option>
                    <option <?php if (isset($vriendbedrag) && $vriendbedrag == "7.50") echo "selected";?> value="7.50">€ 7,50</option>
                    <option <?php if (isset($vriendbedrag) && $vriendbedrag == "10") echo "selected";?> value="10">€ 10,-</option>
                    <option <?php if (isset($vriendbedrag) && $vriendbedrag == "15") echo "selected";?> value="15">€ 15,-</option>
                    <option <?php if (isset($vriendbedrag) && $vriendbedrag == "20") echo "selected";?> value="20">€ 20,-</option>
                    <option <?php if (isset($vriendbedrag) && $vriendbedrag == "30") echo "selected";?> value="30">€ 30,-</option>
                    <option <?php if (isset($vriendbedrag) && $vriendbedrag == "40") echo "selected";?> value="40">€ 40,-</option>
                    <option <?php if (isset($vriendbedrag) && $vriendbedrag == "50") echo "selected";?> value="50">€ 50,-</option>
                  </select>
                </div>
                <div>
                  <label for="input">(eventuele) input voor je tegenprestatie - doe die suggestie alvast hier!</label>
                  <textarea style="margin-bottom:1rem;" id="input" name="vriend_input" placeholder="plaats hier je suggestie"></textarea>
                </div>
                <div>
                  <label for="questions">vragen of opmerkingen:</label>
                  <textarea id="questions" style="margin-bottom:1rem;" name="vriend_questions"></textarea>
                </div>
                <button type="submit" name='vrienden'>versturen</button>
              </form>

              <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['vrienden'])) {
                  $noError = false;

                  $errorArray = [$vriendnaamErr, $vriendachternaamErr, $vriendmailErr, $vriendtelErr];
                  $filledErrorArray = array_filter($errorArray, function ($e) {
                    return $e != "";
                  });

                  if (sizeof($filledErrorArray) == 0) {
                    $noError = true;
                  } else {
                    $noError = false;
                  }

                  if (!empty($vriendnaam) && !empty($vriendachternaam) && !empty($vriendbedrag) && !empty($vriendtel) && !empty($vriendmail) && $noError) {
                    $mail_to = 'nsktheatersport2018@gmail.com, e.a.peene@gmail.com';
                    $subject = 'Nieuwe vriend: ' . $vriendnaam . ' ' . $vriendachternaam . ', 06-' . $vriendtel . '. bedrag: ' . $vriendbedrag;

                    $body_message = 'naam: '. $vriendnaam . "\r\n";
                    $body_message .= 'achternaam: ' . $vriendachternaam . "\r\n";
                    $body_message .= 'mail: ' . $vriendmail . "\r\n";
                    $body_message .= 'tel: 06-' . $vriendtel . "\r\n";
                    $body_message .= 'bijdrage: ' . $vriendbedrag . "\r\n";
                    $body_message .= 'suggestie: ' . $vriendsuggestie . "\r\n";
                    $body_message .= 'Vragen of opmerkingen: ' . "\r\n". $vriendvraag;

                    $headers = "Content-type:text/plain;charset=UTF-8" . "\r\n";
                    $headers .= 'From: '. $vriendmail . "\r\n";
                    $headers .= 'Reply-To: '. $vriendmail . "\r\n";

                    $mail_status = mail($mail_to, $subject, $body_message, $headers);

                    if ($mail_status) {
                      $vriendnaam = $vriendachternaam = $vriendmail = $vriendtel = $vriendsuggestie = $vriendvraag = "";
                      $vriendnaamErr = $vriendachternaamErr = $vriendmailErr = $vriendtelErr = "";
                      $vriendbedrag = "5";
                      ?>
                      <script language="javascript" type="text/javascript">
                        var o = document.getElementById('name');
                        var p = document.getElementById('lastname');
                        var q = document.getElementById('mail');
                        var r = document.getElementById('phone');
                        var s = document.getElementById('value');
                        var t = document.getElementById('input');
                        var u = document.getElementById('questions');
                        var x = document.getElementById('responsemessagevrienden');
                        x.innerHTML = 'Bedankt, vriend! Een tikkie komt jouw kant op! Heb je binnen een paar dagen geen bericht, geef dan een gil.';
                        o.value = ""; p.value = ""; q.value = ""; r.value = ""; s.value = "5"; t.value = ""; u.value = "";
                      </script>
                    <?php
                    }
                  } else { ?>
                    <script language="javascript" type="text/javascript">
                    var x = document.getElementById('responsemessagevrienden');
                    x.innerHTML = 'We hebben iets meer info nodig. Kijk hieronder.';
                    </script>
                  <?php
                  }
                }
              ?>
            </div>
          </div>
        </div>
      </div>
      <a id="theatersport"></a>
      <div id="theatersportcontainer">
        <div class="containertext">
          <h2>Wat is theatersport?</h2>
          <p>Theatersport is een vorm van theater waarbij geïmproviseerde wedstrijden voor een publiek worden gespeeld. Aan de hand van zogenaamde ‘games’ strijden twee teams tegen elkaar om per ronde de beste ‘game’ neer te zetten. Dit gebeurt allemaal aan de hand van suggesties van het publiek. Alles aan deze scènes, van het verhaal tot de liedjes, is volledig geïmproviseerd.</p>
          <p>Theatersport draait om creativiteit, samenspel, vertrouwen, humor en durf. De scènes die ontstaan kunnen hilarisch, ontroerend, spannend en absurd zijn, soms allemaal tegelijkertijd. Theatersport is bij veel mensen bekend door programma’s als De Grote Improvisatieshow, De Lama’s, De Alpaca’s, De Vloer Op en Whose Line is it Anyway?</p>
        </div>
      </div>
      <div id="fotocontainer">
        <img src="theaterfoto.jpg" alt="nsk is theater" />
      </div>
      <a id="nsk"></a>
      <div id="nskcontainer">
        <div class="containertext">
          <h2>Wat is het NSK?</h2>
          <p>Het Nederlands Studentenkampioenschap (NSK) Theatersport is een bruisend theatersporttoernooi dat sinds 1992 jaarlijks plaatsvindt in verschillende steden in Nederland. Het NSK wordt georganiseerd door het team dat het jaar ervoor het kampioenschap heeft gewonnen en heeft over de jaren heen plaatsgevonden in onder andere Maastricht, Enschede, Leiden, Tilburg, Nijmegen, Zwolle en Groningen. Dit jaar vindt het toernooi voor de tweede keer plaats in Utrecht.</p>
          <p>Voor een weekend komen studenten en theatersportliefhebbers uit Nederland en Vlaanderen samen om nieuwe games, ideeën en technieken te delen. Door het grote aantal studenten dat deelneemt, blijft het NSK elk jaar vernieuwend. Elk jaar betreden tijdens het NSK nieuwe spelers het podium om te strijden om de felbegeerde Duc en de eer om het volgende toernooi te mogen organiseren. De sfeer tijdens het toernooi is altijd broederlijk, wat de wedstrijden alleen maar leuker maakt.</p>
        </div>
      </div>
      <a id="sponsoren"></a>
      <div id="sponsorcontainer">
        <div>
          <h2>Sponsoren</h2>
          <a href="https://vandestreekbier.nl/" target="_blank"><img src="vandestreek_wit.png" alt="van de streek bier" /></a>
          <a href="http://www.bigoak.nl/" target="_blank"><img src="bigoak_wit.png" alt="big oak administraties advies" /></a>
          <a href="http://stichtsetaveerne.nl/" target="_blank"><img src="stichtse_wit.png" alt="de stichtse taveerne" /></a>
          <a href="https://www.rijschoolindividu.nl/" target="_blank"><img src="individu_wit.png" alt="rijschool individu" /></a>
          <a href="http://www.captainkrimson.com/" target="_blank"><img src="geert_wit.png" alt="geert meuffels" /></a>
          <a href="http://bosquet.nl/" target="_blank"><img src="bosquet_wit.png" alt="bosquet" /></a>
          <a href="https://www.escaping.nl/" target="_blank"><img src="escaping_wit.png" alt="escaping utrecht" /></a>
          <a href="https://aliasweb.nl/" target="_blank"><img src="alias_wit.png" alt="studiestichting alias" /></a>
        </div>
        <p id="sponsortext">Geïnteresseerd in het sponsoren van het NSK 2018? <a href="mailto:sponsoringnsk@gmail.com">Neem contact met ons op</a>.</p>
      </div>
    </main>
    <footer>
      <div id='footer'>
        <div>
          <a href="#top"><i class="fas fa-home"></i><span style='font-size:11px;margin-left:.5em;'>terug naar boven</span></a>
        </div>
        <div id="menusocial">
          <a href="https://www.facebook.com/events/389724698178622/" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/nsktheatersport/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="mailto:info@nsktheatersport.nl"><i class="fas fa-envelope"></i></a>
        </div>
      </div>
      <div id="footerfondsen">
        <p>het NSK 2018 wordt mede mogelijk gemaakt door:</p>
        <a href="https://kfhein.nl/" target="_blank"><img src="kfhein_wit.png" alt="kf hein fonds"/></a>
        <a href="https://elisemathilde.nl/" target="_blank"><img src="elise_mathilde_wit.png" alt="stichting elise mathilde fonds"/></a>
        <a href="https://www.utrecht.nl/" target="_blank"><img src="utrecht_wit.png" alt="gemeente utrecht"/></a>
        <a href="https://www.vsbfonds.nl/" target="_blank"><img src="vsb_wit.png" alt="vsb fonds"/></a>
      </div>
      <div id="footercopy">
        <p>foto's op deze site door <i class="far fa-copyright"></i> <a href=" http://www.superformosa.nl/" target="_blank">SUPER FORMOSA PHOTOGRAPHY</a></p>
        <p><i class="far fa-copyright"></i> 2018 vereniging organisatie NSK. Alle rechten voorbehouden</p>
      </div>
    </footer>
    <!-- JS -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var x = document.getElementById('aantal');
        setAantal({ value: aantal.value });
      }, false);

      function setAantal(select){
        var aantalSpelers = select.value;
        var six = document.getElementById('speler6');
        var five = document.getElementById('speler5');
        var times = document.getElementById('times');
        var total = document.getElementById('total');

        times.innerHTML = aantalSpelers;
        total.innerHTML = aantalSpelers * 50;

        if (aantalSpelers === "6") {
          five.classList.remove("nonactive");
          six.classList.remove("nonactive");
        } else if (aantalSpelers === "5") {
          five.classList.remove("nonactive");
          if (!six.classList.contains("nonactive")) {
            six.classList.add("nonactive");
          }
        } else {
          if (!six.classList.contains("nonactive")) {
            six.classList.add("nonactive");
          }
          if (!five.classList.contains("nonactive")) {
            five.classList.add("nonactive");
          }
        }
      }

      function toggle(id) {
         var e = document.getElementById(id);
         if(e.style.display == 'block')
            e.style.display = 'none';
         else
            e.style.display = 'block';
      }

      function skipError(id) {
        var e = document.getElementById(id);
        e.classList.add("errorSkip");

        if (id.includes("student")) {
          var student1 = document.getElementById('speler1student');
          var student2 = document.getElementById('speler2student');
          var student3 = document.getElementById('speler3student');
          var student4 = document.getElementById('speler4student');
          var student5 = document.getElementById('speler5student');
          var student6 = document.getElementById('speler6student');
          student1.classList.add("errorSkip");
          student2.classList.add("errorSkip");
          student3.classList.add("errorSkip");
          student4.classList.add("errorSkip");
          student5.classList.add("errorSkip");
          student6.classList.add("errorSkip");
        };
      }

      var acc = document.getElementsByClassName("accordion");
      var panels = document.getElementsByClassName("panel");
      var i;
      var j;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          var activeAcc = this.classList.contains('active');
          for(j = 0; j < panels.length; j++){
            acc[j].classList.remove("active");
            panels[j].style.maxHeight = null;
          }
          if (!activeAcc) {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
            }
          }
        });
      }

      //hide menubar
      var prevScrollpos = window.pageYOffset;
      window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
          document.getElementById("header").style.top = "0";
        } else {
          document.getElementById("header").style.top = "-57px";
        }
        prevScrollpos = currentScrollPos;
      }

      //empty responsemessage
      var tempMessage = document.getElementById('responsemessage');
      if (!!tempMessage && tempMessage.innerHTML !== ""){
        tempMessage.classList.add('active');
        setTimeout(function(){
          tempMessage.classList.remove('active');
          tempMessage.innerHTML = "";
        }, 20000);
      }

      var tempMessageReser = document.getElementById('responsemessagereserveren');
      if (!!tempMessageReser && tempMessageReser.innerHTML !== ""){
        tempMessageReser.classList.add('active');
        setTimeout(function(){
          tempMessageReser.classList.remove('active');
          tempMessageReser.innerHTML = "";
        }, 20000);
      }

      var tempMessageVriend = document.getElementById('responsemessagevrienden');
      if (!!tempMessageVriend && tempMessageVriend.innerHTML !== ""){
        tempMessageVriend.classList.add('active');
        setTimeout(function(){
          tempMessageVriend.classList.remove('active');
          tempMessageVriend.innerHTML = "";
        }, 20000);
      }
    </script>
  </body>
</html>
