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
            <div class="flex  bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Welcome back ') . auth()->user()->name }}
                </div>
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
                    <form method="POST" action="{{ route('admin.applications.activate') }}">
                        @csrf

                        @if (config('app.application'))
                            <input type="hidden" name="isActive" value="0">
                        @else
                            <input type="hidden" name="isActive" value="1">
                        @endif

                        @if (config('app.application'))
                            <button type="submit"
                                class="bg-grey-600 text-white font-semibold px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                                Deactivate
                            </button>
                        @else
                            <button type="submit"
                                class="bg-blue-600 text-white font-semibold px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                                Activate
                            </button>
                        @endif
                    </form>
                </div>
            </div>


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
