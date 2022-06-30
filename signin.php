<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">  
</head>
  <body>


      
    

    <div class="container text-center">

    <h1 class="registration">LOGIN</h1>

    <form action="log.php" method="post">

    <div class="form-group m-3">
    <label for="exampleInputEmail1" class="input">email</label><br>
    <input type="email" name="email" id="" require>
    </div>

    <div class="form-group m-3">
    <label for="exampleInputEmail1" class="input">first name</label><br>
    <input type="text" name="fname" id="">
    </div>

    <div class="form-group m-3">
    <label for="exampleInputEmail1" class="input">last name</label><br>
    <input type="text" name="lname" id="">
    </div>


    <div class="form-group m-3">
    <label for="exampleInputEmail1" class="input">password</label><br>
    <input type="password" name="password" id="" require>
    </div>


    

    <div class="form-group m-3">
    <input type="submit" value="GET OTP">
    </div>


    


    
    </form>
</div>





    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->
    </body>
</html>