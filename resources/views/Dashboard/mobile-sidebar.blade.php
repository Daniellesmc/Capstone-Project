<div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">

    <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

    <div class="fixed inset-0 z-40 flex">

        <div class="relative flex w-full max-w-xs flex-1 flex-col bg-white focus:outline-none">

            <div class="absolute top-0 right-0 -mr-12 pt-2">
                <button type="button"
                    class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">Close sidebar</span>
                    <!-- Heroicon name: outline/x-mark -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="h-0 flex-1 overflow-y-auto pt-5 pb-4">
                <div class="flex flex-shrink-0 items-center px-4">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                        alt="Your Company">
                </div>
                <nav aria-label="Sidebar" class="mt-5">
                    <div class="space-y-1 px-2">

                        <a href="#"
                            class="bg-gray-100 text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">


                            <svg class="text-gray-500 mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                            Dashboard
                        </a>
                    </div>
                </nav>
            </div>
            <div class="flex flex-shrink-0 border-t border-gray-200 p-4">
                <a href="#" class="group block flex-shrink-0">
                    <div class="flex items-center">
                        <div class="ml-3">
                            <p class="text-base font-medium text-gray-700 group-hover:text-gray-900">
                                {{ $user->first_name . ' ' . $user->last_name }}
                                </p>
                            <p class="text-sm font-medium text-gray-500 group-hover:text-gray-700">View
                                profile</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="w-14 flex-shrink-0" aria-hidden="true">
            <!-- Force sidebar to shrink to fit close icon -->
        </div>
    </div>
</div>
