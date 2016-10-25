<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("assets/inc/header.php") ?>
  </head>
  <body>
  	<div class="container">
  		<div class="mynav">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar5">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img style="	width: 120px;" src="assets/images/logo.png" alt="Dispute Bills">Service Auto
            </a>
          </div>
          <div id="navbar5" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-li"><a href="index.php">Acasa</a></li>
              <li  class="nav-li"><a href="service.php">Service</a></li>
              <li class="nav-li"><a href="mecanica.php">Mecanica</a></li>
              <li class="nav-li "><a href="tractari.php">Tractari</a></li>
              <li class="nav-li"><a href="vopsitorie.php">Vopsitorie</a></li>
              <li class="nav-li active"><a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="row" style="text-align: center;">
        <div id="car" class="col-md-12">
      Ne puteti contacta completand formularul sau la adresa: str. Soseaua Berceni ,nr. 104, sect.4, Bucuresti
    </div>
  </div>
    <div class="row">
      <div id="car" class="col-md-3">
        <form action="contact.php" method="POST" id="form" >
          Nume </br><input type="text" name="nume"></br>
          Email </br><input type="email" name="email"></br>
          Telefon </br><input type="text" name="tel"></br>
        </form>
      </div>
      <div id="car" class="col-md-5" style="padding-left: 0px;">
        <form action="contact.php" method="POST" id="form" >
          Mesaj </br><textarea form="form" name="mesaj" cols="30" rows="6"></textarea></br>


        </form>
      </div>
      <div id="text" class="col-md-4 ">
    <div style="font-size: 25px; padding: 10px;"> Informatii de contact </div>
    S.C. AUTONIX SELECT S.R.L.

Reg com. J 40/1782/ 19.02.2010, CUI Ro 265 45842</br>

Adresa: str. Soseaua Berceni ,nr. 104, sect.4, Bucuresti</br>

Mobil: +4 0372.738.083</br>

Fix: +4 021.311.23.16</br>

Fax: +4 021.311.23.16</br>
      </div>
    </div>
      <div class="row" style="text-align: center;">
        <div id="car" class="col-md-5">
          <form action="contact.php" method="POST" id="form" >
            <input type="submit" name="submit" value="Trimite">


          </form>
        </div>
      </div>





<?php

if(isset($_POST['submit'])){
$to = "mustacescupaul@gmail.com";
$from = $_POST['email'];
$name = $_POST['nume'];
$subject = "Mesaj de pe website ";
$subject2 = "Copie a mesajului trimis catre AutoCaNou :";
$message = $name . " a scris :" . "\n\n" . $_POST['mesaj'];
$message2 = "Aceasta este o copie a mesajului dvs. " . $name . "\n\n" . $_POST['message'];

$headers = "De la:" . $from;
$headers2 = "De la:" . $to;
mail($to,$subject,$message,$headers);
mail($from,$subject2,$message2,$headers2);
echo "<div class=col-md-7>Mesajul a fost trimis!Multumim" . $first_name . ", va vom contacta in cel mai scurt timp.</div>";

}
?>
</div>
  <?php  include("bar.php");?>

  </body>

</html>
