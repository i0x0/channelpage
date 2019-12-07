<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="main.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>

<body>
    <h1 id="control">Control</h1>
    <div class="grid-container" style="grid-auto-flow: row;">
        <?php
        $appsRaw = file_get_contents('json/main.json');
        $apps = json_decode($appsRaw, true);
        foreach ($apps['data'] as $field => $value) {
            $jsonFile = json_decode(file_get_contents($value), true);
            $jsonFileLocation = $jsonFile['location'];
            if ($jsonFile['description']) {
                $jsonFileDesc = $jsonFile['description'];
            }
            echo ("
                <div class='badge badge-dark'>
                <a class='badge badge-dark' href='./assets/system/frame.php?page={$jsonFileLocation}'>{$field}</a>
                <h5 style='center'>Description: {$jsonFileDesc}</h5>
                </div>
            ");
        }
        ?></div>
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>