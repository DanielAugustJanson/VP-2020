<?php
$username = "Daniel Janson";
$fulltimenow = date("d.m.Y H:i:s");
$partofday = "lihtsalt aeg";
$hournow = date("H");
if($hournow <6){
	$partofday = "uneaeg";
} // Tingimuse algust ja loppu tahistatakse loogikasulgudega {}
if($hournow >= 8 and $hournow <= 18){
	$partofday = "kooli aeg";
}

//Vaatame semestri kulgemist
$semesterstart = new DateTime("2020-8-31");
$semestrend = new DateTime("2020-12-13");
$semesterduration =  $semesterstart->diff($semesterend);                                         
$semesterdurationdays = $semesterduration->format("%r%a");
$today = new DateTime("now");
?>


<!-- Iga dokument algab dokumendi tyybi delkaratsiooniga -->
<!DOCTYPE html>

<!-- Iga veebilehe sisu jaab HTML sisse -->
<html lang="et">

<head>
<!-- Siia jaavad asjad mis defineerivad lehekulge ja peamiselt jaab selle sisu meile nahtamatuks -->

<!-- Defineerib mis tahemarke veebileht kasutab -->
<meta charset="utf-8">

<!-- Veebi pealkiri mida naeb selle tabis -->
<title><?php echo $username; ?> loob lehekülge</title>

</head>
<body>
  <h1>"Your name here"</h1>
  <p>See on paragraaf õppetöö jaoks</p>
  <p>Praegu on <?php echo $partofday; ?> </p>
  <p>See leht on loodud Veebiprogrammeerimise kursusel 2020. aastal <a href="https://www.tlu.ee">Tallinna Ülikoolis </a> Digitehnoloogia Instituudis. </p>
  <p>Lehekülg oli viimati värkendatud : <?php echo $fulltimenow; ?></p>

<!-- HTMLis tahistatakse elemedi algus nool sulgudega ja lopetatakse pandel elemendi ette "/" -->
</body>
</html>
