<?php
if ($_GET['page']) {
    $page = $_GET['page'];
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body style="margin: 0;">
        <iframe src="<?php echo ($page); ?>" style="border: 0; width: 100%; height: 100%">Your browser doesn't support iFrames.</iframe>
    </body>

    </html>
<?php
} else {
    echo ("Page not found");
}
?>