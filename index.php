<?php
// Standard Variablen
$datenbank = ["tim.pietrowski"=>"1234", jannik.haake=>"1234"];
$feedback = "";
$error_message = "Dein Benutzername oder Passwort stimmt nicht überein.";

// Validation und Verifizierung
function validation()






// HTML Layout
<head>
<title>Research</title>
<meta charset="utf-8">
<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
<html lang="de">
<link rel="stylesheet" href="style.css">
</head>

<body>
<div id="sektion">
    <div id="sektioneins">
        <div id="textwrapper">
            <h1>Research Office</h1>
        </div>
    </div>
    <div id="logindiv">
        <div id="loginwrapper">
            <h2>Login</h2>
        </div>
        <div id="formwrapper">
            <form method="post" action="dashboard.html"></form>
            <br>
            <input id="benutzer" type="text" name="benutzer" placeholder="Benutzername"> 
            <br>
            <br>
            <input id="passwort" type="password" name="passwort" placeholder="Passwort">
            <br>
            <span id="error"><p>Test</p></span>
            <br>
            <button id="button" type="submit">Anmelden</button>
        </form>
        </div>
        <div id="linkwrapper">
            <p><a href= "https://www.friends2learn.de">Passwort vergessen</a></p>
        </div>
    </div>
    <div id="logowrapper">
        <img src="logo.ico" />
    </div>
</div>    
</body>