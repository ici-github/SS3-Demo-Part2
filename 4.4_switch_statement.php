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
        $category = "sports";

        switch ($category) {
            case 'sports':
                echo "Nagsumbagay si Arsenal ug Capones tungod ni KC nya ang hinungdan kay kamo nay sumpay";
                break;
            case 'entertainment':
                echo "Gusto gyud mu chula si Capones kang * kay tungod lami sya mu lu2 sa kusina.";
                break;
            case 'politics':
                echo "Trending kagabii ang post sa IMF tungod sa ilang post nga naay SEX and Rock and Roll";
                break;
            default:
                echo "Welcome to Balita";
                break;
        }
    ?>
</body>
</html>