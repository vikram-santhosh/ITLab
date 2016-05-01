<html>
    <body>
        <h1> Registration Form</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            Name <br>
            <input type="text" name="name"><br><br>
            USN <br>
            <input type="texgt" name="usn"><br><br>
            <input type="submit" name="submit"><br><br>
        </form><br>

    </body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $usn = $_POST['usn'];

        $regex_name = '/[a-zA-Z]+/';
        $regex_usn = '/[1][M][S]\d{2}[A-Z]{2}\d{3}/';

        if(! preg_match($regex_name,$name))
        {
            echo "Please enter a name consisting of alphabets\n";
        }
        if(! preg_match($regex_usn,$usn))
        {
            echo "Please a valid USN\n";
        }
    }


?>