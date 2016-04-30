<!DOCTYPE html>
<html>
    <head>
        <title> Sixth Semester </title>
    </head>
    <body>
        <h1> Student Database </h1> <br><br><br>
        <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
            USN :   <input type = "text" name = "usn"><br>
            Name :  <input type = "text" name = "name"><br>
            Age : <input type = "number" name = "age"><br><br><br>
            <input type="submit" name = "submit">
        </form>
    </body>
</html>

<?php 


    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpwd  = '';

    $conn = mysql_connect($dbhost,$dbuser,$dbpwd);
    
    if(! $conn)
        die("Failed to Connect !");
    
    if(! mysql_select_db('sixthsem',$conn))
    {
        $createDB = 'CREATE DATABASE `sixthsem`';

        $run_query1 = mysql_query($createDB,$conn);

        if(! $run_query1)
           // die("Failed to CreateDB");
        echo "Database Successfully Created";

        mysql_select_db('sixthsem',$conn);

        $createTable = 'CREATE TABLE tb(USN VARCHAR(20),Name VARCHAR(20),age INT)';
        $run_query2 = mysql_query($createTable,$conn);

        if(! $run_query2)
            die(mysql_error());
    }

    if(isset($_POST['submit']))
    {
        $usn = $_POST['usn'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        
        echo $usn;
        $insert = "INSERT INTO tb VALUES('$usn','$name','$age')";
        $run_query3 = mysql_query($insert,$conn);
        if(! $run_query3)
            die(mysql_error());
                   
    }
           
?>
