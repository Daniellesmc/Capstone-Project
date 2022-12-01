<div class="flex min-h-full flex-col justify-center py-12">
    <div class="mt-8 sm:mx-auto w-[450px]">
        <div class="bg-white py-8 shadow sm:rounded-lg px-7">
            <h2 class="mt-6 mb-12 text-center text-3xl font-bold tracking-tight text-gray-900">Log Your Attendance</h2>
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
                        <input id="student_id" name="student_id" required
                            class="block w-full appearance-none rounded-md border border-gray-300 p-3 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    </div>
                </div>



                <div class="pt-5">
                    <button type="submit"
                        class="flex w-full justify-center rounded-md border border-transparent bg-green-600 p-3.5 text-lg font-bold text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Sign
                        in</button>
                </div>
            </form>
        </div>
    </div>
</div>
