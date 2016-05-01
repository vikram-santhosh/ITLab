<html>
    <head>
            <title>Movie Database</title>
    </head>
    <body>
        <h1>Movie Database</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
            Name : <br>
            <input type = "text" name = "name"><br>
            Actor : <br>
            <input type = "text" name = "actor"><br>
            Budget : <br>
            <input type = "text" name = budget><br><br>
            <input type="submit" name = "submit">
        </form>
    </body>
</html>

<?php
    
    $localdb = "localhost:3306";
    $dbuser = "root";
    $dbpwd  = "";
    
    
    $conn = mysql_connect($localdb,$dbuser,$dbpwd);
    if(! $conn)
        mysql_error();
    $db = mysql_select_db("movie",$conn);
    if(! $db)
    {
        $createDB = "CREATE DATABASE `movie`";
        if(! mysql_query($createDB,$conn))
            die(mysql_error());
        mysql_select_db("movie",$conn);
        $createTb = "CREATE TABLE tb(name VARCHAR(20),actor VARCHAR(20),budget VARCHAR(20))";
        if(! mysql_query($createTb,$conn))
            die(mysql_error());
    }
    
    //mysql_select_db("movie",$conn);
    
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $actor = $_POST['actor'];
        $budget = $_POST['budget'];
        $insert = "INSERT INTO tb VALUES('$name','$actor','$budget')";
        if(! mysql_query($insert,$conn))
            die(mysql_error());
    }

?>