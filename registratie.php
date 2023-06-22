<!--. Author:
yasir.-->
<?php
// Controleer of het formulier ingevuld is

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hier krijg je je gegevens
    $username = $_POST["gebruikersnaam"];
    $password = $_POST["wachtwoord"];
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Registratie</title>
</head>
<body>
    <h2>Registratie</h2>
    <?php if (isset($successMessage)) { ?>
        <p><?php echo $successMessage; ?></p>
    <?php } ?>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="username">Gebruikersnaam:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Wachtwoord:</label>
        <input type="password" name="password" id="password" required><br><br>

        <label for="email">E-mailadres:</label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" value="Registreren">
    </form>
</body>
</html>