<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="medewerkers_beheren.css">
    <title>Medewerker verwijderen</title>
</head>
<body>
<div class="navbar">
        <div class="logo_icon_home">
            <a href="home.html"><img src="Express.png" alt="Home"></a>
        </div>
        <a href="Contact.html">Contact</a>
        <a style="float:right" href="inloggen.html">Inloggen</a>
    </div> 
    <br><br>
    <div class="medewerkerslijst">
<form  action="medewerkers_beheren.php" method="POST">
<h1>Medewerker verwijderen</h1>
<label for="medewerker_id">Medewerker ID om te verwijderen:</label><br><br>
<input type="number" name="medewerker_id" id="medewerker_id">
<br><br>
<input type="submit" class="button" name="verwijderen" value="Medewerker verwijderen" />
</form>
<br>
</div>
</body>
</html>