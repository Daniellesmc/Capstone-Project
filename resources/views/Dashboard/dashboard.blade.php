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

    <title>Just Attend | Dashboard</title>
</head>

<body>
    <main class="main">
        <div class="flex h-full">
            <div class="flex h-full">
                @if ($user->role === 'student')
                    @include('Dashboard.Student.student-dashboard')
                @endif
                @if ($user->role === 'admin')
                    @include('Dashboard.Teacher.teacher-dashboard')
                @endif

                @include('Dashboard.mobile-sidebar')
                <!-- Static sidebar for desktop -->
                {{-- @include('Dashboard.sidebar') --}}
            </div>
            @if ($user->role === 'student')
                <div class="flex justify-center items-center mx-auto w-full">
                    @include('Dashboard.attendance-form')
                </div>
            @endif
            @if ($user->role === 'admin')
                @include('Attedance.Student.calendar')
            @endif
        </div>
    </main>
</body>

</html>
