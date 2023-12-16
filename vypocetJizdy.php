<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>jizda</title>
    </head>
    <body>
           
<!--<form method="POST" action="knihaJizd.php"> 
         pocatecniKm<br />
            <input name="pocatecniKm" type="text" /><br />
                koncoveKm<br />
            <input name="koncoveKm" type="text" /><br />
            <input type="submit" value="Odeslat" />
            </form>    
-->      
<?php
$spz = $_POST["zadejSpz"];
$startKm = $_POST['pocatecniKm'];
$finishKm = $_POST['koncoveKm'];

// Načtení wrapperu
require_once('Db.php');
Db::connect('127.0.0.1', 'kniha_jizd', 'root', '');
Db::query('
    INSERT INTO kilometry (SPZ, startKm, finishKm)
    VALUES (?, ?, ?)
',$_POST["zadejSPZ"], $_POST['pocatecniKm'], $_POST['koncoveKm']
 );

echo ("SPZ vozidla je: $spz,<br>"
        . "počáteční km: $startKm,<br>"
        . "konečné km: $finishKm,");


$kilometry = Db::queryAll('
			SELECT *
			FROM kilometry
		');
		echo('<h2>Výpis km</h2><table border="1">');
		foreach ($kilometry as $kilometr) {
			echo('<tr><td>' . htmlspecialchars($kilometr['SPZ']));
			echo('</td><td>' . htmlspecialchars($kilometr['startKm']));
			echo('</td><td>' . htmlspecialchars($kilometr['finishKm']));
			echo('</td></tr>');
		}
		echo('</table>');
                
/*                
                $uzivatele = Db::queryAll('
    SELECT *
    FROM uzivatele
');
echo('<h2>Uživatelé</h2><table border="1">');
foreach ($uzivatele as $uzivatel) {
    echo('<tr><td>' . htmlspecialchars($uzivatel['jmeno']));
    echo('</td><td>' . htmlspecialchars($uzivatel['prijmeni']));
    $datum = date("d.m.Y", strtotime($uzivatel['datum_narozeni']));
    echo('</td><td>' . htmlspecialchars($datum));
    echo('</td><td>' . htmlspecialchars($uzivatel['pocet_clanku']));
    echo('</td></tr>');
}
echo('</table>');
 * 
 * 
 */
                
               
                
                
                
                
                
                
                
    ?>

<!--echo ("$spz,$startKm,$finishKm");



//$spz = $_POST["zadejSPZ"];
//echo ("vozidlo: $spz");
//echo('<br/>');
//$jizda = $_POST['koncoveKm'] - $_POST['pocatecniKm'];
//echo("pocek kilometrů na jednu jízdu je : $jizda");
-->
 </body>
</html>      