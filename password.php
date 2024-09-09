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
<form action="./index.php" method="get">
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">

                <div class="col-12">
                    <div class="card bg-success text-white ps-3 py-2 mt-5">

                        <span>
                            La password generata è:
                            <h3 class="ps-5"><?php echo $_SESSION['password']; ?></h3>
                        </span>

                    </div>
                </div>

                <div class="col-12">
                    <div class="mt-3">
                        <h5> Non ti piace? Genera un'altra password!</h5>
                        <button type="submit" class="btn btn-danger" name="destroy" >Indietro</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>
    <?php
    if(isset($_GET['destroy'])){
        session_destroy();
    }
    ?>
</body>
</html>