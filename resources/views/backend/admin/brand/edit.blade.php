@extends('backend.master')
@section('content')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                @if (session()->has('success'))
                    <div class="alert alert-success">{{session()->get('success') }}</div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('/brand/update/'.$brand->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category_id">
                                    <option selected disabled> Select A Category</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $category->id }}">{{ $category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="{{ $brand->name }}" clase="form-control" placeholder="Enter Category Name"/>
                            </div>
                            <button type="submit" class="btn btn-block btn-success">Update</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
@endsection