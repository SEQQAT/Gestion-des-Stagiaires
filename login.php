<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authenfication</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/boostratp.css" >
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
           
    <form action="verfication.php" method="POST">

    
         <div class="wrapper fadeInDown">
            <div id="formContent">
            <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first">
                 <img src="alten.png" id="icon" alt="User Icon" />
                </div>
                <?php if (isset($_GET['error'])) { ?>
     		    <p class="error"><?php echo $_GET['error']; ?></p>
            
     	         <?php } ?>
                <!-- Login Form -->
                <input type="text" id="username" class="fadeIn second" name="username" placeholder="login" >
                <input type="password" id="password" class="fadeIn third " name="password" placeholder="password">
                <input type="submit" id='submit' class="fadeIn fourth" value="Log In">
                    <!-- Remind Passowrd -->
              
        

</div>

 </div>
 </form>
 </div>
      
 


</body>
</html>


