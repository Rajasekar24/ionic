<?php
    include 'navigation.php';
?>

<html>
    <head>
        <meta charset="utf-8"/>
        <title>Slim 3</title>
        <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
        <link href="css/style.css" rel="stylesheet">
        <style>
            body {
                margin: 0 0 0 0;
                padding: 0;
                width: 100%;
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                text-align: center;
                color: #aaa;
                font-size: 18px;
            }

            h1 {
                color: #719e40;
                letter-spacing: -3px;
                font-family: 'Lato', sans-serif;
                font-size: 100px;
                font-weight: 200;
                margin-bottom: 0;
            }
        </style>
    </head>
    <body>
        <?php if(isset($user)){
            include 'content.php'; 
        }?>
    </body>
</html>
