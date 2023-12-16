<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>jizda</title>
    </head>
    <body>

<form method="POST" action="vypocetJizdy.php">
    SPZ včetně mezer mezi čísly<br />
    <input name="zadejSpz" type="text" pattern=".*\s+.*" required/><br />  <!--vytvoří okénko pro zadání SPZ-->
    pocatecni kilometry<br />
    <input name="pocatecniKm" type="text" /><br /> <!--vytvoří okénko pro zadání počátečních km -->
    koncove kilometry<br />
    <input name="koncoveKm" type="text" /><br />    <!--vytvoří okénko pro zadání koncových km -->
    <input type="submit" value="Odeslat" />
    </form>    
        
 
 </body>
</html>
