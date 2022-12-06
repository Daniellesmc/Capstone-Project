    @vite(['resources/css/app.css', 'resources/css/tailwind.css', 'resources/js/app.js'])

<div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex w-64 flex-col">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex min-h-0 flex-1 flex-col border-r border-white bg-white">
            <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">
                <div class="flex flex-shrink-0 items-center px-4">
                    <div class="icon">
                        <h2 class="logo text-orange-600">JustAttend</h2>
                    </div>
                    <!-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                        alt="Your Company"> -->
                </div>
                <nav class="mt-5 flex-1" aria-label="Sidebar">
                    <div class="space-y-1 px-2">

                        <a href="/dashboard"
                            class="text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ Route::current()->getName() === 'dashboard' ? 'bg-gray-200' : '' }}">
                            <svg class="text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                            Dashboard
                        </a>
                        {{-- <a href="/student-attendance"
                            class="text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ Route::current()->getName() === 'student-attendance' ? 'bg-gray-200' : '' }}">
                            <svg class="text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                            Student Attendance
                        </a> --}}
                    </div>
                </nav>
            </div>
            <div class="flex flex-shrink-0 border-t border-gray-200 p-4">
                <div class="flex flex-col items-start">
                    <div class="ml-3">
                        <p class="text-base font-medium text-gray-700 group-hover:text-gray-900">
                            {{ $user?->first_name . ' ' . $user?->last_name }} - <span
                                class="capitalize">{{ $user?->role }}</span></p>
                        <a href="{{ route('logout') }}"
                            class="text-sm font-bold text-orange-600 group-hover:text-yellow-500 w-0">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
