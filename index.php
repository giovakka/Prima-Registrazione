<html>
<header>
<body>

<h1>Registrazione Utenti</h1>
<form method="POST" action="registrazione.php">
<table>
    <tr>
        <td>Nome:</td>
        <td><input type="text" name="nome"></td>
    </tr>
    <tr>
        <td>Cognome:</td>
        <td><input type="text" name="cognome"></td>
    </tr>
    <tr>
        <td>Mail:</td>
        <td><input type="text" name="mail"></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type="password" name="pwd"</td>
    </tr>
    <tr>
        <td>Data di nascita:</td>
        <td><input type="date" name="d_nascita"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Registrati"></td>
    </tr>
</table>
</form>

<?php
echo md5("123");
?>

</body>
</html>