<?php
function generate_password($password_length) {
    $password = '';
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+[]{};:,.<>?/';
    for ($i = 0; $i < $password_length; $i++) {
        $password .= $chars;
    }
    return $password;
}


if (isset($_GET['password_length']) && $_GET['password_length'] !== '') {

    $password_length = $_GET['password_length'];

    $password = generate_password($_GET ['password_length']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="./index.php" method="get">

    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <!-- card -->
                <div class="card bg-dark mt-5 pt-5 pb-4 text-white d-flex align-items-center"> 

                    <div class="card-title">
                        <!-- titolo -->
                        <h4 class="text-danger">
                            Not So Strong <h3 class="fw-bold ps-2 text-success">Password Generator</h3>
                        </h4>

                        <!-- sottotitolo -->
                        <h5>
                            Genera una password (abbastanza) sicura
                        </h5>
                    </div>

                    <div class="card-text mt-4">
                        <!-- input utente per scegliere la lunghezza della password -->
                        <label for="password_length">Numero di caratteri:</label>
                        <input type="number" name="password_length" id="password_length">
                    </div>

                    <div class="mt-4">
                        <!-- bottone per generare la password-->
                        <button type="submit" class="btn btn-success" >Genera Password</button>
                    </div>
                </div>

            </div>
            
            <?php if(isset($password)){ ?>

                <h1><?php echo $password ?></h1>

            <?php } ?>
            
        </div>
    </div>

    </form>

</body>
</html>