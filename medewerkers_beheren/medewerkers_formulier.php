<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="medewerkers_beheren.css">
    <title>Medewerker toevoegen</title>
</head>
<body>
<style>
        table,tr,td,th {
            display: absolute;
            margin: 0px auto;
        }
    </style>
<div class="navbar">
        <div class="logo_icon_home">
        <a href="home.html"><img src="Express.png"></a>
        </div>
       <a href="Contact.html">Contact</a>
       <a style="float:right" href="inloggen.html"> Inloggen</a>
   </div> 
   <br><br>
   <div class="medewerkerslijst">
   <h1>Medewerker toevoegen</h1>
<form action= "medewerkers_beheren.php" method="post">
    <table>
        <tr>
        <th>Voornaam</th>
        <th><input type = "text" name = "voornaam" required></th>
        </tr>
        <tr>
        <th>Achternaam</th>
        <th><input type = "text" name = "achternaam" required></th>
        </tr>
        <tr>
        <th>Straat</th>
        <th><input type = "text" name = "straat"></th>
        </tr>
        <tr>
        <th>Postcode</th>
        <th><input type = "text" name = "postcode"></th>
        </tr>
        <tr>
        <th>Plaats</th>
        <th><input type = "search" name = "plaats"></th>
        </tr>
        <tr>
        <th>E-mailadres</th>
        <th><input type = "email" name = "e-mailadres"></th>
        </tr>
        <tr>
        <th>Telefoon nummer</th>
        <th><input type = "tel" name = "telefoon_nummer"></th>
        </tr>
        <tr>
        <th>Positie</th>
        <th><input type = "text" name = "positie" required></th>
        </tr>
        <tr>
        <th>Salaris</th>
        <th><input type = "text" name = "salaris" required></th>
        </tr>
        </table>
        <br>
        <input type = "submit" class="button" name="submit" value = "Medewerker toevoegen">
        <input type = "reset" class="button" name="reset" value = "Reset">
    </form>
    <br>
    </div>
</body>
</html>