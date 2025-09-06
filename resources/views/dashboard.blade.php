<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
    @if (session('error'))
        <div class="py-0">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline text-red-900" style="color: red;">{{ session('error') }}</span>
                </div>
            </div>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 font-bold">
                    <h1>
                        {{ __('Welcome ') . auth()->user()->name }}
                    </h1>
                </div>
                <div class="flex" style="float: right;">
                    <div class="p-6" style="right: 0;">
                        <form method="POST" action="{{ route('admin.applications.export') }}">
                            @csrf
                            {{-- <input type="hidden" name="type" value="scholarship_applications">
                            <input type="hidden" name="format" value="excel">
                            <input type="hidden" name="fields" value="name,institution,course_of_study,level,local_government,ward"> --}}
                            <button type="submit"
                                class="bg-blue-600 text-white font-semibold px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                                Export applications to Excel
                            </button>
                        </form>
                    </div>

                    <div class="p-6" style="right: 0;">
                        <form method="POST" action="{{ route('admin.applications.download.zip') }}">
                            @csrf
                            {{-- <input type="hidden" name="type" value="scholarship_applications">
                            <input type="hidden" name="format" value="excel">
                            <input type="hidden" name="fields" value="name,institution,course_of_study,level,local_government,ward"> --}}
                            <button type="submit"
                                class="bg-blue-600 text-white font-semibold px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                                Download Zip
                            </button>
                        </form>
                    </div>

                    <div class="p-6" style="right: 0;">
                        <div class="relative inline-block text-left">
                            <div>
                                <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true" onclick="toggleDropdown()">
                                    Application Status
                                    <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>

                            <div style="width: 130%" class="relative right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" id="dropdown-menu">
                                <div class="p-4 pb-1 mt-1 mb-1 font-semibold flex flex-row" >
                                    Current status: &nbsp;<span style="color:{{ config('app.application') ? "green":"red" }};"> {{ config('app.application') ? " Activated":" Deactivated" }} </span>
                                </div>
                                <div class="p-1 mt-1 mb-2" role="none">
                                    @if (config('app.application'))
                                        <form method="POST" action="{{ route('admin.applications.activate') }}" class="block">
                                            @csrf
                                            <input type="hidden" name="isActive" value="0">
                                            <button type="submit" class="text-white-700 bg-red-600 font-bold hover:bg-red-300 block w-full px-4 py-2 text-left text-sm hover:bg-gray-100 border border-r-2 rounded-lg" role="menuitem">
                                                Deactivate Applications
                                            </button>
                                        </form>
                                    @else
                                        <form method="POST" action="{{ route('admin.applications.activate') }}" class="block">
                                            @csrf
                                            <input type="hidden" name="isActive" value="1">
                                            <button type="submit" class="text-gray-700 bg-green-600 font-bold hover:bg-green-300 block w-full px-4 py-2 text-left text-sm hover:bg-gray-100 border border-r-2 rounded-lg" role="menuitem">
                                                Activate Applications
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <script>
                            function toggleDropdown() {
                                const dropdown = document.getElementById('dropdown-menu');
                                dropdown.classList.toggle('hidden');
                            }

                            // Close dropdown when clicking outside
                            document.addEventListener('click', function(event) {
                                const button = document.getElementById('menu-button');
                                const dropdown = document.getElementById('dropdown-menu');

                                if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                                    dropdown.classList.add('hidden');
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-2">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Name</th>
                            <th scope="col" class="px-6 py-3">Institution</th>
                            <th scope="col" class="px-6 py-3">Course</th>
                            <th scope="col" class="px-6 py-3">Level</th>
                            <th scope="col" class="px-6 py-3">Local Government</th>
                            <th scope="col" class="px-6 py-3">Ward</th>
                            <th scope="col" class="px-6 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($scholarshipApplications as $scholarshipApplication)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $scholarshipApplication->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $scholarshipApplication->institution }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $scholarshipApplication->course_of_study }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $scholarshipApplication->level }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $scholarshipApplication->local_government }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $scholarshipApplication->ward }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $scholarshipApplications->links() }}
            </div>
        </div>
    </div>


</x-app-layout>
