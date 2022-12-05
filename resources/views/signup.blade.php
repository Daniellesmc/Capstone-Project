<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="A web based app for managing attendance using QR code">
  <meta name="author" content="Danielle Coakley">


    <title>Online Student Attendance QR Code</title>
    <link rel="stylesheet" href="styles.css"/>

</head>
<body>
    <div class= "main">
      <div class="navbar">
          <div class="icon">
            <h2 class="logo">JustAttend</h2>
          </div>

          <div class="menu">
            <ul>
              <li><a class="active" href="welcome.blade.php">HOME</a></li>
              <li><a href="About.html">ABOUT</a></li>
              
            </ul>
          </div>

            <div class="search">
            <input class="srch" type="search" name="" placeholder="Type To Text">
            <a href="#"> <button class="btn">Search</button></a> 

         <div class = "container">
            <style>
                body {font-family: Arial, Helvetica, sans-serif;}
                    * {box-sizing: border-box;}
            </style>
         </div> 

            <div class="container">
                <h1>Create an account</h1>
             <!--   <p>Please fill in this form to create an account.</p> -->
                 <hr>
                <form action = "signup.inc.php" method="post"></form>
               
               <!-- <label for="email"><b>Email</b></label> -->
                <input type="text" placeholder="Enter your email" name="email" required>
                

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Create a password" name="psw" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Re-enter Password" name="psw-repeat" required>

                <div class="clearfix">
                   <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> -->
                    <button type="submit" class="btnn"><a href= "JustAttend.html">Create Account</a></button>
                </div>

               
                


            
             </div>
        </form> 
     </div>
</div>
</body>
</html>

