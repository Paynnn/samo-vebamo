<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="citanje.php" method ="post">
    <div>
        <label for="ime">Unesite ime</label>
        <input type="text" name="ime" id="ime">
    </div>
    <div>
        <label for="email">Unesite email</label>
        <input type="text" name="email" id="email">
    </div>
    <div>
        <label for="opis">Unesite opis</label>
        <input type="text" name="opis" id="opisivati">
    </div>
    <div>
        <label for="cena">Unesite cenu</label>
        <input type="number" name="cena" id="cenovnik">
    </div>
    <div>
        <label for="slika">Unesite cenu</label>
        <input type="file" name="slika" id="slika">
    </div>
    <button type="submit">Potvrdi</button>
</form>
</body>
</html>