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

        <form class="form" action="{{ route('signup.store') }}" method="POST">
            @csrf
            <h2>Sign Up</h2>
            <input type="first_name" name="first_name" placeholder="First Name">
            <input type="last_name" name="last_name" placeholder="Last Name">
            <input type="" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" class="btnn">Submit</button>
        </form>
    </main>
</body>

</html>
