<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_login.css">
    <title>Admin login</title>
</head>
<body>

<div id="login" class="loginmenu">
    <h2>Inloggen</h2>
    <p>Meld aan met je gebruikersnaam en wachtwoord</p>
    <form id="login-form">
        <input type="text" id="username" placeholder="Gebruikersnaam" tabindex="1"  name="username" required><br><br>
        <input type="password" id="password" placeholder="Wachtwoord" tabindex="2"  name="password" required><br><br>
        <input style = "width: auto; height: auto; border-radius: 5px;" type="checkbox" id="rememberme" tabindex="3" name="rememberme">
        <label for="rememberme">Remember me</label><br><br>
        <button type="button" class="button" tabindex="4" onclick="login()">Inloggen</button>
    </form>
    <br>
</div>

<script>
// Simpele authenticatie - vervang dit met echte authenticatie
function login() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Voer hier je eigen authenticatielogica uit
    if (username === 'admin' && password === 'wachtwoord') {
        window.location.href = 'medewerkers_beheren.php';
    } else {
        alert('Ongeldige inloggegevens. Probeer opnieuw.');
    }
}
</script>
</body>
</html>