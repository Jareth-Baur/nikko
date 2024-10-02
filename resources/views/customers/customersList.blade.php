<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table id="customerDataTable" >
                        <thead>
                            <tr>
                                <th>Customer Number</th>
                                <th>Customer Name</th>
                                <th>City</th>
                                <th>Country</th>
                                <th>Manage By</th>
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
