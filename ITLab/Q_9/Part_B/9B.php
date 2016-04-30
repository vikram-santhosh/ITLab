<!DOCTYPE html> 
<html>
    <head>
        <title> Student Analysis</title>
    </head>
    <body>
        <h1> Java Post-Course Analysis</h1>
        <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
            Students Securing S Grade in Java
            <input type = "submit" name = "s_grade" value="S Grade">
        </form>
        
        <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
            Number Students Securing F Grade in Java
            <input type = "submit" name = "f_grade" value="F Grade">
        </form>
    </body>
</html>

<?php
    
    $dbhost = "localhost:3306";
    $dbuser = "root";
    $dbpwd = "";

    $conn = mysql_connect($dbhost,$dbuser,$dbpwd);
    if(! $conn)
        die(mysql_error());
    
    mysql_select_db('mydb');
    
    if(isset($_POST['s_grade']))
    {
        $query = "SELECT * FROM java WHERE grade = 'S'";
        $run_query = mysql_query($query,$conn);
        if(! $run_query)
            die(mysql_error());
            
        while ($row = mysql_fetch_assoc($run_query)) 
        {
            echo $row["name"];
        }
    }

    if(isset($_POST['f_grade']))
       {
           $query = "SELECT * FROM java WHERE grade = 'F'";
           $run_query = mysql_query($query,$conn);
           if(!$run_query)
               die(mysql_error());
           // $result = mysql_fetch_assoc($run_query);
            echo mysql_num_rows($run_query);
       }

    

?>