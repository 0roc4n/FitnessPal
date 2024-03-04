<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Members List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <table class="table table-size mt-4 hover" id="example">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">List</th>
                            <th scope="col">Name</th>
                            <th>Gender</th>
                            <th>Plan</th>
                            <th>Started</th>
                            <th>Expiration</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                       
                            @foreach ($members as $index => $member)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->gender }}</td>
                                    <td>{{ $member->plan }}</td>
                                    <td>{{ $member->created_at }}</td>
                                    <td>{{ $member->updated_at }}</td>
                                    <td>
                                        Action
                                    </td>
                                </tr>
                            @endforeach
                  
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <script>
         $(document).ready(function() {
        $('#example').dataTable();


    } );

    </script>
</x-app-layout>
