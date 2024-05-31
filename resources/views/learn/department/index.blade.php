@extends('frontend.include.layout2')


@section('content')
    <div class="section-start">
        <div class="container">
            <div class="">
                <a href="{{ route('department.create') }}" class="btn btn-success">Add Department</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                         
                            <tr>
                                <th scope="row">{{ $department->id }}</th>
                                <td>{{ $department->name }}</td>
                                <td><span class="badge bg-{{ $department->status == 1 ? 'success' : 'danger' }}">{{ $department->status == 1 ? 'Active' : 'Inactive' }}</span></td>
                                <td>
                                    <a href="{{ route('department.edit', $department->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $department->id }}">Delete</a>
                                </td>
                            </tr>

                            <!-- Delete Confirmation Modal -->
                            <div class="modal fade" id="deleteModal-{{ $department->id }}" tabindex="-1" aria-labelledby="deleteModalLabel-{{ $department->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="deleteModalLabel-{{ $department->id }}">Confirm Delete</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete the course "{{ $department->name }}"?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <form action="{{ route('department.delete', $department->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
