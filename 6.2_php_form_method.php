<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        GET Message: <input type="text" name="text_message" required> <br>

        <button type="submit" name="submit_message">Submit Message</button>
    </form>
    <?php 
        if(isset($_GET['submit_message'])) {
            $text_message = trim($_GET['text_message']);
            if(empty($text_message)) {
                echo "<script> alert('Ops, type2x kag di mao.'); </script>";
            } else {
                echo "<script> alert('You entered the message: $text_message'); </script>";
            }
        }
    ?>


    <hr>
    <form action="" method="post">
        POST Message2: <input type="text" name="text_message2"><br>

        <button type="submit" name="submit_message2">Submit Message</button>
    </form>
</body>
</html>