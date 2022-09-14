<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- HTML FORMS
            starts with <form></form> tags
            with required attributes such as 'action' and 'method'
            method has two values, POST and GET
                POST - values are not seen in the browser, and can be only accessed with PHP Superglobal Variable $_POST[];
                GET  - values are seen in the browsers address bar, and can be only accessed with PHP Superglobal Variable $_GET[];

                POST values are recommended for passwords, or values that you don't want to see in the browser.
                GET values are recommeded for minimal values in the address bar. Because the address bar has a 1000-character limit.

            action - destination file OR URL which processes the form data
    -->
    <form action="" method="post">
        <!-- Single line textbox -->
        Username: <input type="text" name="text_username" placeholder="Please enter your lastname"> <br>
        <!-- Single line password box -->
        Password: <input type="password" name="password_pwd" placeholder="Please enter your password"> <br>
        <!-- Radio Buttons -->
        Sex at birth:  <br>
            <input type="radio" name="radio_sex_male" value="Male"> Male <br>
            <input type="radio" name="radio_sex_female" value="Female"> Female <br>
        <!-- Checkbox Buttons -->
        Hobby: <br>
            <label><input type="checkbox" name="checkbox_hobby" value="Eating"> Eating </label><br>
            <label><input type="checkbox" name="checkbox_hobby" value="Sleeping"> Sleeping </label><br>
            <label><input type="checkbox" name="checkbox_hobby" value="Mag CR"> Mag CR </label><br>
            <label><input type="checkbox" name="checkbox_hobby" value="Watching KPAPS"> Watching KPAPS </label><br>
        <!-- Date -->
            Date: <input type="date" name="date" id=""> <br>
        <!-- Time -->
            Time: <input type="time" name="time" id=""> <br>
        <!-- Color Picker -->
            Choose your color: <input type="color" name="color" id=""> <br>
        <!-- Numbers -->
            Type any number: <input type="number" name="number" step="any" id=""> <br>
        <!-- Reset Button -->
            <input type="reset" value="Reset Me Please"> <br>
        <!-- Submit Button -->
            <button type="submit" name="submit_button">Submit this Form</button> <br>
            <input type="submit" name="submit_button" value="Submit this Form">  <br>
    </form>
</body>
</html>