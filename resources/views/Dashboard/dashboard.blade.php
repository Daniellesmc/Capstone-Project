<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        </div>
    </main>
</body>

</html>
