<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/css/tailwind.css', 'resources/js/app.js'])

    <title>Document</title>
</head>

<body>
    <main class="main">
        <div class="flex h-full">
            <div class="flex h-full">

                @include('Dashboard.mobile-sidebar')
                <!-- Static sidebar for desktop -->
                @include('Dashboard.sidebar')
            </div>

            <div class="flex justify-center items-center mx-auto w-full">
                @include('Dashboard.attendance-form')
            </div>
        </div>
    </main>
</body>

</html>
