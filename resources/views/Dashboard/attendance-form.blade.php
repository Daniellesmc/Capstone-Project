<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title> QR Code</title>
    @vite(['resources/css/app.css', 'resources/css/tailwind.css', 'resources/js/app.js'])


</head>

<body>

    <div class="flex gap-16 justify-center mx-auto items-center w-full pl-24">
        <div class="flex min-h-full flex-col justify-center py-12 Absolute left-0">
            <div class="mt-8 sm:mx-auto w-[400px] ">
                <div class="bg-white py-8 shadow sm:rounded-lg px-7 Absolute left-0">
                    <h2 class="mt-6 mb-12 text-center text-3xl font-bold tracking-tight text-gray-900">Scan Your QR Code
                    </h2>

                    {{-- Scanner --}}
                    <video id="preview"></video>
                    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
                    <script type="text/javascript">
                        let scanner = new Instascan.Scanner({
                            video: document.getElementById('preview')
                        });
                        scanner.addListener('scan', function(content) {
                            console.log(content);
                        });
                        Instascan.Camera.getCameras().then(function(cameras) {
                            if (cameras.length > 0) {
                                scanner.start(cameras[0]);
                            } else {
                                console.error('No cameras found.');
                            }
                        }).catch(function(e) {
                            console.error(e);
                        });
                    </script>
                    <p class="text-center underline underline-offset-1">Scan your QR Code</p>
                </div>
            </div>
        </div>

        {{--Successful logged in message--}}
        <div class="flex min-h-full flex-col justify-center py-10">
            <div class="mt-8 sm:mx-auto w-[450px] Absolute right-0">
                <div class="bg-white py-8 shadow sm:rounded-lg px-7">
                    @if (session('success'))
                        <div class="p-3 alert alert-success w-96 roundedlg bg-green-600 text-white mb-5 text-center flex justify-center items-center"
                            role="alert">
                            <p class="text-base">
                                {{ session('success') }}
                            </p>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="p-3 alert alert-success w-96 roundedlg bg-red-600 text-white mb-5 text-center flex justify-center items-center"
                            role="alert">
                            <p class="text-base">
                                {{ session('error') }}
                            </p>
                        </div>
                    @endif

                    {{--Attendance box--}}
                    <h2 class="mt-6 mb-12 text-center text-3xl font-bold tracking-tight text-gray-900">Log Your
                        Attendance
                    </h2>
                    <form class="space-y-6" action="{{ route('attendance.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="text" class="block text-sm font-medium text-gray-700">First Name*</label>
                            <div class="mt-1">
                                <input id="first_name" name="first_name" required
                                    class="block w-full appearance-none rounded-md border border-gray-300 p-3 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name*</label>
                            <div class="mt-1">
                                <input id="last_name" name="last_name" required
                                    class="block w-full appearance-none rounded-md border border-gray-300 p-3 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="student_id" class="block text-sm font-medium text-gray-700">Student ID*</label>
                            <div class="mt-1">
                                <input id="student_id" disabled name="student_id" required
                                   value="{{ $user->student_id }}" 
                                    class="text-gray-400 block w-full appearance-none rounded-md border border-gray-300 p-3 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>



                        <div class="pt-5">
                            <button type="submit"
                                class="flex w-full justify-center rounded-md border border-transparent bg-orange-600 p-3.5 text-lg font-bold text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Submit
                                Attendance</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
