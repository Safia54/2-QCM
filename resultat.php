<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
     integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title> résultats </title>
  </head>
  <body>

    <?php

//détection des erreurs
    ini_set('display_errors', 1);
    error_reporting(E_ALL);


//sanitiser email
     if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) !== false) {
       echo 'adresse mail valide !';
     }

     if ($_POST['email']== true) {
      mail($_POST['email']) AND mail('bihmedn@hotmail.com') ;
    }




//calcul de la note en fonction des deux qcm
    $note=0;

    // print_r($_POST);

    // echo $_POST['reponse1'];

    if (ISSET $_POST['submit']) { 

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
    }


if (ISSET $_POST['submit']) { 
    if ($_POST['question1']=='Re1A') {
          $note++;
        }
        if ($_POST['question2']=='Re2B') {
          $note++;
        }

        if ($_POST['question3']=='Re3C') {
          $note++;
        }

        if ($_POST['question4']=="Re4A") {
          $note++;
        }

        if ($_POST['question5']=="Re5C") {
          $note++;
        }

        if ($_POST['question6']=="Re6B") {
          $note++;
        }
    }

    // if ($note==0) {
    //     echo "Ta note est de 0/6";
    // }elseif ($note==1) {
    //     echo "Ta note est de 1/6";
    // }elseif ($note==2) {
    //     echo "Ta note est de 2/6";
    // }elseif ($note==3) {
    //     echo "Ta note est de 3/6";
    // }elseif ($note==4) {
    //     echo "Ta note est de 4/6";
    // }elseif ($note==5) {
    //     echo "Ta note est de 5/6";
    // }elseif ($note==6) {
    //     echo "Ta note est de 6/6";
    // } YA MOYEN PLUS COURT :

     echo '<div class="php"> Ta note est de '. $note . '/6 </div>' ;

    
    ?>


  </body>
</html>
