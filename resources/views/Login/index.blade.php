<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A web based app for managing attendance using QR code">
    <meta name="author" content="Danielle Coakley">

    <title>Online Student Attendance QR Code</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

</head>

<body>
    <main class="main">
        @include('Shared.navbar')


        <div class="form">
            <form action="" method="post">
                <h2>Login Here</h2>
                <input type="email" name="email" placeholder="Enter Email Here">
                <input type="password" name="" placeholder="Enter Password Here">
                <button class="btnn"><a href="#">Login</a></button>
                <p class="link">Don't have an account?<br><a href="signup.php">Sign up</a> here</a></p>
            </form>
        </div>
    </main>
</body>

</html>
