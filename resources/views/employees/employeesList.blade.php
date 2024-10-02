<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table id="employeesDataTable" >
                        <thead>
                            <tr>
                                <th>Office Code</th>
                                <th>City</th>
                                <th>Phone</th>
                                <th>AddressLine1</th>
                                <th>AddressLine2</th>
                                <th>Country</th>
                                <th>Territory</th>

                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
