<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Plans') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="text-end">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Plan</a>
                    </div>
                <table class="table mt-4 hover" id="example">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">List</th>
                            <th scope="col">Plan Name</th>
                            <th>Description</th>
                            <th>Validity</th>
                            <th>Fee</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                       
                            @foreach ($plans as $index => $plan)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $plan->plan_name }}</td>
                                    <td>{{ $plan->plan_desc }}</td>
                                    <td>{{ $plan->validity }}</td>
                                    <td>{{ $plan->fee }}</td>
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

    <!-- Add Plan Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Plan</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
        </div>
        <div class="modal-body">
            <form action="plan-add" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="planname" class="form-label">Plan Name:</label>
                    <input type="text" name="plan_name" class="form-control rounded" required>
                </div>
                <div class="mb-3">
                    <label for="plandesc" class="form-label">Plan Description:</label>
                    <textarea type="text" name="plan_desc" class="form-control rounded" required>

                    </textarea>
                </div>
                <div class="mb-3">
                    <label for="planname" class="form-label">Validity:</label>
                    <input type="number" name="validity" class="form-control rounded" required>
                </div>
                <div class="mb-3">
                    <label for="planname" class="form-label">Amount to Pay:</label>
                    <input type="number" name="fee" class="form-control rounded" required>
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </div>
        </form>
    </div>
    </div>
    <script>
         $(document).ready(function() {
        $('#example').dataTable();


    } );

    </script>
</x-app-layout>
