<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A web based app for managing attendance using QR code">
    <meta name="author" content="Danielle Coakley">

    <title>Online Student Attendance QR Code</title>
    @vite(['resources/css/app.css', 'resources/css/tailwind.css', 'resources/js/app.js'])
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet" /> --}}

</head>

<body class="h-full">
    <main class="main">
        @include('Shared.navbar')


        <div class="h-full flex flex-col items-center justify-center">
            @if (session('success'))
                <div class="alert alert-success w-96 h-12 bg-red-600 mb-5 text-center flex justify-center items-center"
                    role="alert">
                    <p class="text-lg">
                        {{ session('success') }}
                    </p>
                </div>
            @endif

            <form class="form flex flex-col px-5 gap-5 items-center w-96 h-[500px] justify-center"
                action="{{ route('login.post') }}" method="post">
                @csrf
                <h2>Login Here</h2>
                <input type="" required name="email" placeholder="Enter Email Here" value="dc@gmail.com">
                <input type="password" required name="password" placeholder="Enter Password Here" value="secret">
                <button type="submit" class="btnn">Login</button>

                @if ($errors->has('email'))
                    <span class="text-danger text-red-600 font-bold">{{ $errors->first('email') }}</span>
                @endif
                @if ($errors->has('password'))
                    <span class="text-danger text-red-600 font-bold">{{ $errors->first('password') }}</span>
                @endif
                <p class="text-orange-500 text-center mt-5">Don't have an account?<br><a href="signup.php">Sign up</a>
                    here</a></p>
            </form>
        </div>
    </main>
</body>

</html>
