<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $category = 'sports';

    if ($category == 'sports') {
        echo "Nasipaan si Khent Maverick ni Chariss kay di kabalo mu tira ug armas.";
    } elseif ($category == 'showbiz') {
        echo "Nagsumbagay si Jessa ug si Heart kay naibog sila ni Jeff Michael.";
    } elseif ($category == 'current events') {
        echo "Naay isa sa IT3 nga naibog kang _________ kay wala na sila ni ex.";
    } elseif ($category == 'weather') {
        echo "Karong adlawa mug-ot ang panahon sama sa iyang kasingkasing nga mug-ot kay wala na si Erlinda ug si Ralph";
    } else {
        echo "Welcome to IT3 News Update";
    }

    if ($category == 'sports') {
        echo "Nasipaan si Khent Maverick ni Chariss kay di kabalo mu tira ug armas.";
    } else {
        echo "Welcome to IT3 News Update";
    }

    if ($category == 'showbiz') {
        echo "Nagsumbagay si Jessa ug si Heart kay naibog sila ni Jeff Michael.";
    } else {
        echo "Welcome to IT3 News Update";
    }
?>
</body>
</html>