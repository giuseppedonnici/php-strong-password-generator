<?php
session_start();
include_once __DIR__ . '/functions.php';

if (isset($_GET["length"])) {
    $password_length = $_GET['length'];
    $chars_to_use = $_GET["characters"] ?? [];
    $password = generate_password($password_length, $chars_to_use);
    $_SESSION["password"] = $password;
    header("Location: password.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="">
    <div class="container mt-5 text-secondary">

        <div class="text-center">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
        </div>

        <?php if (isset($password)) { ?>
            <div class="alert alert-primary" role="alert">
                La tua password è <?php echo $password ?>
            </div>
        <?php } ?>

        <form action="index.php" method="GET" class="mt-5">
            
            <div class="d-flex align-items-center justify-content-start">
                <label class="text-primary me-5" for="length">Lunghezza password:</label>
                <input class="form-control w-25" type="text" id="length" name="length" value="<?php echo $_GET["length"] ?? '' ?>">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="characters[]" value="N" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Numeri
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="characters[]" value="L" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                    Lettere
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="characters[]" value="S" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                    Simboli
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="repeat" value="1" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    Con ripetizioni
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="repeat" value="0" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Senza ripetizioni
                </label>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Invia</button>
            <button type="reset" class="btn btn-secondary mt-3">Annulla</button>
        </form>
    </div>

</body>

</html>