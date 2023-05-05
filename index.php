<?php 
$possible_characters = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789[*.!@#$%^&(){}[]:;<>,.?/~_+-=|\]";

$length = $_GET['length'];

if($length && is_numeric($length)) {
    for($i = 0; $i < $length; $i++) {
        $number = rand(0, strlen($possible_characters));
        $password .= $possible_characters[$number];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <div class="containe">
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
        <form action="index.php" method="GET">
            <label for="length">Lunghezza password:</label>
            <input type="text" id="length" name="length">
            <button type="submit">Invia</button>


        </form>
        <p>La password generata è: <?php echo $password ?></p>
    </div>
    
</body>
</html>