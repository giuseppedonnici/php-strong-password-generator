<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container text-center mt-5">
        <h1 class="text-secondary">La password generata è:</h1>
        <p class="badge text-bg-success fs-1"><?php echo $_SESSION['password']; ?></p>
        <p>
            <a href="index.php" class="btn btn-primary mt-3">Back</a>
        </p>
    </div>
</body>
</html>

