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
    <title>Just Attendance | Student Attendance</title>
    @vite(['resources/css/app.css', 'resources/css/tailwind.css', 'resources/js/app.js'])

</head>

<body>
    <main class="main">

        <div class="flex h-full">
            <div class="flex h-full">
                @include('Dashboard.Teacher.teacher-dashboard')
            </div>
            <div class="grid grid-cols-3 gap-3 h-12 justify-center items-center mx-auto mt-12">
                @foreach ($user_attendances as $ua)
                    <div class="bg-white w-[400px] rounded-lg p-7">
                        <h2 class="text-black text-2xl font-bold">{{ date_format($ua->created_at, 'F j, Y') }} at
                            {{ date_format($ua->created_at, 'g:i a') }}</h2>
                        <p>{{ $ua->first_name }} {{ $ua->last_name }}</p>
                        <p>{{ $ua->student_id }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
