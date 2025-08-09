@extends('admin.master')

@section('content')



<div class="container-fluid py-4">




    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Category</h5>
            <a href="{{ route('view_category') }}" class="btn btn-primary btn-sm">
                ← Back to Categories
            </a>
        </div>


        <div class="card-body">
            <form action="{{ route('update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="category">Category Name</label>
                    <input type="text" name="category_name" id="category"
                        value="{{ old('category_name', $category->category_name) }}"
                        class="form-control" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('view_category') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection