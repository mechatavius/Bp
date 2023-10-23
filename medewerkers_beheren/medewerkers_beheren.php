<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="medewerkers_beheren.css">
    <title>Medewerker</title>
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
    <table class="table">
    <h1>Medewerker lijst</h1>
        <tr>
            <th>ID</th>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Positie</th>
            <th>Salaris</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "medewerker";
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM medewerkers";
        $result = mysqli_query($conn, $query);
        
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['medewerker_id'] . "</td>";
                echo "<td>" . $row['voornaam'] . "</td>";
                echo "<td>" . $row['achternaam'] . "</td>";
                echo "<td>" . $row['positie'] . "</td>";
                echo "<td>" . $row['salaris'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        ?>
    </table>
    <br>
    <input type="button" onclick="location.href='medewerkers_formulier.php';" class="button" name="toevoegen" value="Medewerker toevoegen"/>
    <input type="button" onclick="location.href='medewerkers_verwijderen.php';" class="button" name="verwijderen" value="Medewerker verwijderen"/>
    <br><br>
    </div>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "medewerker";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if (isset($_POST['submit'])) {
        $voornaam = $_POST["voornaam"];
        $achternaam = $_POST["achternaam"];
        $positie = $_POST["positie"];
        $salaris = $_POST["salaris"];

        $sql = "INSERT INTO medewerkers (voornaam, achternaam, positie, salaris) VALUES ('$voornaam', '$achternaam', '$positie', $salaris)";
        
        if (mysqli_query($conn, $sql)) {
            echo "Medewerker succesvol toegevoegd";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
     }
    ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medewerker";

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['verwijderen'])) {
    $medewerkerId = $_POST['medewerker_id'];

    // Create and execute the SQL query to delete the employee
    $sql = "DELETE FROM medewerkers WHERE medewerker_id = $medewerkerId";

    if (mysqli_query($conn, $sql)) {
        echo "Medewerker is succesvol verwijderd";
    } else {
        echo "Fout bij verwijderen: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
</body>
</html>
