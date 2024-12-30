@extends('master.admin')
@section('body')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Create Category</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="bg-success text-white">{{ Session::get('success') }}</p>

                    <form action="{{route('admin-category.create')}}" method="post">
                        @csrf
                    <div class="input-group mb-3 w-50 mx-auto">
                        <input type="text" class="form-control" placeholder="Category Name"
                            aria-label="Category Name" aria-describedby="button-addon2" name="category_name">
                        <div class="input-group-append">
                            <button class="btn text-white bg-success" type="submit" id="button-addon2">Add Category</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
