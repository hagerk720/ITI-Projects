<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body style="background-color:#dcddfc;">

    <div class="dropdown p-5">
        <h1>hhhhh</h1>
        <button class="btn dropdown-toggle" type="button" style="background-color:#f7cab7 ;" data-bs-toggle="dropdown" aria-expanded="false">
            Cities
        </button>
        <ul class="dropdown-menu " style=" background-color:#0e111e;">
            <?php $Cities =  getAllCities();
            foreach ($Cities as $city) {
            ?>
                <li><a class="dropdown-item" style=" color:#f7cab7; font-weight:bolder" href="?lon=<?php echo $city["coord"]["lon"]; ?>&lat=<?php echo $city["coord"]["lat"]; ?>"><?php echo $city["name"]; ?></a></li>
            <?php
            } ?>

        </ul>
    </div>

    <center>
        <h2>weather status</h2>
        <div class="card" style="width: 18rem;background-color:#edf1fa;">
            <?php $data = guzzle_get_weather();
            // var_dump($data);
            ?>
            <div class="card-body">
                <h3 class="card-header"><?php echo $data["name"]; ?></h3>
                <div class="card-title">
                    <h5><?php echo date("Y/m/d") ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"> Temperature: <?php echo $data["main"]["temp"]; ?></h6>
                </div>
                <h6 class="card-subtitle mb-2 text-muted"> 💧 humidity: <?php echo $data["main"]["humidity"]; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">💨 wind: <?php echo $data["wind"]["speed"]; ?></h6>

            </div>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>