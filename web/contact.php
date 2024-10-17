<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jautā man!</title>
</head>
<body>
    <form action="">
        <div class="form-example">
            <label for="vards">Ieraksti vārdu</label>
            <input type="text" name="vards" id="vards" required />
        </div>
        <div class="form-example">
            <label for="email">Ievadi email </label>
            <input type="email" name="email" id="email" required />
        </div>

    </form>

    <select name="izvele" id="izvele">
        <option value="--Izvelies opciju--">--Izvelies opciju--</option>
        <option value="Atsauksme">Atsauksme</option>
        <option value="Ieteikums">Ieteikums</option>
        <option value="Jautājums">Jautājums</option>
    </select>
    <br>
    <div>
    <label for="">Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</label>
    <input type="checkbox" name="protams" id="protams">

  
    </div>
    <br>
    <div>
    <label for="">Vai piekrīti mūsu mājaslapas lietošanas noteikumiem?</label>


    <input type="checkbox" name="protams" id="protams">
    
    </div>

    <button type="button">Apstiprināt</button>

    <ul>
        <li><a href="index.php">index</a></li>
        <li><a href="portfolio.php">portfolio</a></li>
    </ul>

</body>
</html>