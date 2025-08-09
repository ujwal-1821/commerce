@extends('admin.master')

@section('content')


<div class="container-fluid py-4">



    <!-- Create Category Form -->
    <form class="row mb-4" action="{{route('category.store')}}" method="POST">
        @csrf
        <div class="col-md-10">
            <input type="text" name="category" class="form-control" placeholder="Enter the category">
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-success w-100">Submit</button>
        </div>
    </form>

    <!-- Category Table -->
    <div class="table-responsive">
        <table class="table table-bordered  w-100">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)

                <tr>
                    <td>{{ $category->id}}</td>
                    <td>{{ $category->category_name}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>
                      <a href="{{ route('edit', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('delete', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>

@endsection