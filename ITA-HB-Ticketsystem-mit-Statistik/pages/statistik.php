<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<header>
    <title>Statistik</title>
    <link type="text/css" rel="stylesheet" href="../css/style.css" />
    <meta charset="utf-8" />
</header>

<body bgcolor="#101010">
    <div class="formbackground" style="padding-top: 1px;">
        <a href="../"><img src="../pictures/chris-industriesscaled.png" class="img" /></a>
        <div class="form">

            <h1> Statistik </h1>

            <?php 
        //Besuchergesamt
         $pfad = "../data/ticketsystem/";
         $datei = "usercount.txt";
         $zeiger = fopen($pfad.$datei,"r");
         $besuchergesamt = fgets($zeiger);
         fclose($zeiger);
        
         //Abgeschickte Tickets
         $datei = "sendcount.txt";
         $zeiger = fopen($pfad.$datei,"r");
         $sendcount = fgets($zeiger);
         fclose($zeiger);


         //Besuche Pro Tag
         $today = date("d.m.Y", time());
         $pfad = "../data/ticketsystem/";
		 $datei = "useraday.txt";
	     $zeiger = fopen($pfad.$datei,"r");
		 $useraday = fgets($zeiger);
		 fclose($zeiger);
         $useraday = substr($useraday,10,4);
        
         //Besuche per week
         $pfad = "../data/ticketsystem/";
		 $datei = "useraweek.txt";
	     $zeiger = fopen($pfad.$datei,"r");
		 $useraweek = fgets($zeiger);
		 fclose($zeiger);
         $useraweek = substr($useraweek,10,4);

        echo"<h2>Ticketsystem</h2>";
        echo"<h3>Gesamt Besucherzahl: ".$besuchergesamt."</h3>";

        echo"<h3>Besucherzahl pro Tag: ".$useraday."</h3>";


        echo"<h3>Abgeschickte Tickets: ".$sendcount."</h3>";

        echo"<h3>Besucherzahl pro Woche: ".$useraweek."</h3>"

        ?>
        </div>
    </div>
</body>





</html>