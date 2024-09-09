<?php

session_start();

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

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card bg-dark mt-5 pt-5 pb-4 text-white ps-5"> 

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

                <div class="card-text mt-3">
                    <div>
                        <!-- input utente per scegliere la lunghezza della password -->
                        <label for="password_length">Inserisci il numero di caratteri (min. 6 - max. 18)</label>
                        <input type="number" name="password_length" id="password_length" min="6" max="18" value="6">
                    </div>
                </div>

                <div class="mt-3">
                    <!-- bottone per generare la password-->
                    <button type="submit" class="btn btn-success" >Genera Password</button>
                </div>
            </div>

            <div class="col-12">
                <div class="card bg-success text-white ps-3 py-2">

                    <span>
                        La password generata è:
                        <h3 class="ps-5"><?php echo $_SESSION['password']; ?></h3>
                    </span>

                </div>
            </div>

        </div>
    </div>
</div>


</body>
</html>