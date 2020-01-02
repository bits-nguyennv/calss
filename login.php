<?php
    session_start();
    if(isset($_SESSION['id'])){  
    header("location:index.php");
    }
?>
<html>
    <head>
        <title>Login Page</title>  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="style1.css">  
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign In</h3>
                    </div>
                    <div class="card-body">
                        <form action="content.php" method = "POST">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="name" name="name">
                                
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder=" password" name="password">
                            </div>
                            <div class="d-flex mb-3 bg-secondary">
                                <div class="p-2 mr-auto">
                                    <form action="content.php" method = "POST"> 
                                        <input type="submit" value="Login" class="btn float-right login_btn">
                                    </form>
                                </div>                                                             
                                <div class="p-2">
                                    <form action="from.php" method="POST">
                                        <input type="submit" value ="Sign Up" class= "btn float-right login_btn">
                                    </from>                           
                                </div>
                            </div>     
                        </form>          
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>