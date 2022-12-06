<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    @vite(['resources/css/app.css', 'resources/css/tailwind.css', 'resources/js/app.js'])

    <title>Document</title>
</head>

<body>
    <main class="main">
        <div class="flex h-full">
            <div class="flex h-full">
                @if ($user->role === 'student')
                    @include('Dashboard.Student.student-dashboard')
                @endif
                @if ($user->role === 'admin')
                    @include('Dashboard.Student.student-dashboard')
                @endif

                @include('Dashboard.mobile-sidebar')
                <!-- Static sidebar for desktop -->
                {{-- @include('Dashboard.sidebar') --}}
            </div>


            {{-- <div class="grid grid-cols-3 gap-3 h-12 justify-center items-center mx-auto mt-12">
                @foreach ($user_attendances as $ua)
                    <div class="bg-white w-[400px] rounded-lg p-7">
                        <h2 class="text-black text-2xl font-bold">{{ date_format($ua->created_at, 'F j, Y') }} at
                            {{ date_format($ua->created_at, 'g:i a') }}</h2>
                    </div>
                @endforeach
            </div> --}}
        </div>
    </main>
    <div class="flex justify-end pl-16 w-96">
        @include('Attedance.Student.calendar')
    </div>
</body>

</html>
