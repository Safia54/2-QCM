<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
     integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title> résultats du qcm </title>
  </head>
  <body>

<form action="traitement.php" method="post">
    <div class="titre_intro">
      <h1> Les résultats du Quizz </h1>
      <hr/>
      <h2> Quel éco-citoyen es-tu ? </h2>
      <p> Cultivons les plantes </p>
      <hr/>
    </div>


<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $note=0;

    // print_r($_POST);

    // echo $_POST['reponse1'];



    if ($_POST['reponse1']=='R1A') {
      $note++;
    }
    if ($_POST['reponse2']=='R2B') {
      $note++;
    }

    if ($_POST['reponse3']=='R3C') {
      $note++;
    }

    if ($_POST['reponse4']=="R4A") {
      $note++;
    }

    if ($_POST['reponse5']=="R5B") {
      $note++;
    }

    if ($_POST['reponse6']=="R6B") {
      $note++;
    }





     $message='<div class = php>' . $_POST['Prénom']. ', ta note est de ' . $note . '/6 ! ' . '</div>';

     echo $message ;

     if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) !== false) {
       echo '<div class = php1>' . "L'adresse mail est valide et le résultat est envoyé à l'adresse !" . '</div>';
     }

     if ($_POST['email']== true) {
      mail($_POST['email'], "résultat du qcm", $message) ;
      mail("bihmedn@hotmail.com", "résultat du qcm", $message) ;
    }
?>






    
    <ol>
      <li>
        <fieldset>

          <legend> La bonne réponse est A ? </legend>


          <label for="R1A"> <img src="img/bouton-vert.png"> <input type="radio" id="R1A" name="reponse1" value="R1A" class="vrai" /> Réponse A </label> <br/>
          <label for="R1B"> <img src="img/bouton-rouge.png"> <input type="radio" id="R1B" name="reponse1" value="R1B"/> Réponse B </label> <br/>
          <label for="R1C"> <img src="img/bouton-rouge.png"> <input type="radio" id="R1C" name="reponse1" value="R1C"/> Réponse C </label> <br/>


        </fieldset>
      </li>

      <li>
        <fieldset>


          <legend> La bonne réponse est B ? </legend>


          <label for="R2A"> <img src="img/bouton-rouge.png"> <input type="radio" id="R2A" name="reponse2" value="R2A" class="faux"/> Réponse A </label> <br/>
          <label for="R2B"> <img src="img/bouton-vert.png">  <input type="radio" id="R2B" name="reponse2" value="R2B" class="vrai"/> Réponse B </label> <br/>
          <label for="R2C"> <img src="img/bouton-rouge.png"> <input type="radio" id="R2C" name="reponse2" value="R2C" class="faux"/> Réponse C </label> <br/>


        </fieldset>
      </li>

      <li>
        <fieldset>
          <legend> La bonne réponse est C ? </legend>

          <label for="R3A"> <img src="img/bouton-rouge.png"> <input type="radio" id="R3A" name="reponse3" value="R3A" class="faux" /> Réponse A </label> <br/>
          <label for="R3B"> <img src="img/bouton-rouge.png"> <input type="radio" id="R3B" name="reponse3" value="R3B" class="faux"/> Réponse B </label> <br/>
          <label for="R3C"> <img src="img/bouton-vert.png"> <input type="radio" id="R3C" name="reponse3" value="R3C" class="vrai"/> Réponse C </label> <br/>


        </fieldset>
      </li>


      <li>
        <fieldset>
          <legend> Qui a volé l'orange du marchand ? </legend>

          <label for="R4A"> <img src="img/bouton-vert.png"> <input type="radio" id="R4A" name="reponse4" value="R4A" class="vrai"/> Réponse A : Michal </label> <br/>
          <label for="R4B"> <img src="img/bouton-rouge.png"> <input type="radio" id="R4B" name="reponse4" value="R4B" class="faux"/> Réponse B : Jasmine </label> <br/>
          <label for="R4C"> <img src="img/bouton-rouge.png"> <input type="radio" id="R4C" name="reponse4" value="R4C" class="faux"/> Réponse C : Le marchand lui-même </label> <br/>
        </fieldset>
      </li>


      <li>
        <fieldset>
          <legend> Qui est Teddy Riner ? </legend>

          <label for="R5A"> <img src="img/bouton-rouge.png"> <input type="radio" id="R5A" name="reponse5" value="R5A" class="faux"/> Réponse A : Un programmeur </label> <br/>
          <label for="R5B"> <img src="img/bouton-vert.png"> <input type="radio" id="R5B" name="reponse5" value="R5B" class="vrai"/> Réponse B : Un judoka </label> <br/>
          <label for="R5C"> <img src="img/bouton-rouge.png"> <input type="radio" id="R5C" name="reponse5" value="R5C" class="faux"/> Réponse C : Le mix entre le prof Teddy et Ryver</label> <br/>
        </fieldset>
      </li>


      <li>
        <fieldset>
          <legend> Qui est Safia ? </legend>

          <label for="R6A"> <img src="img/bouton-rouge.png"> <input type="radio" id="R6A" name="reponse6" value="R6A" class="faux" /> Réponse A : une journaliste </label> <br/>
          <label for="R6B"> <img src="img/bouton-vert.png"> <input type="radio" id="R6B" name="reponse6" value="R6B" class="vrai"/> Réponse B : une slameuse </label>  <br/>
          <label for="R6C"> <img src="img/bouton-rouge.png"> <input type="radio" id="R6C" name="reponse6" value="R6C" class="faux"/> Réponse C : une webdéveloppeuse </label> <br/>
        </fieldset>
      </li>


    </ol>

    <div class="boutton_retour">
      <a href="index.html" class="btn btn-info btn-lg"> Recommencer le QCM</a>
    </div>


  </form>

  </body>
</html>
