<html>
    <head>
        <title>FROM</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <div class="jumbotron text-center">
            <form action="content.php" method="POST">
                Name:<br>
                <input type="text" name ="name">
                <br>
                Password:<br>
                <input type="text" name ="password" >
                <br><br>
                <input type="submit" value ="Submit">
            </form>
        </div>
    </body>  
</html>
<?php
session_start();
if(isset($_SESSION['use']) && $_SESSION['pass']){
    var_dump($_SESSION);
}
die();
?>


