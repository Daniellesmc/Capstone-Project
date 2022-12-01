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


            <div class="grid grid-cols-3 gap-3 h-12 justify-center items-center mx-auto mt-12">
                @foreach ($user_attendances as $ua)
                    <div class="bg-white w-[400px] rounded-lg p-7">
                        <h2 class="text-black text-2xl font-bold">{{ date_format($ua->created_at, 'F j, Y') }} at
                            {{ date_format($ua->created_at, 'g:i a') }}</h2>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
