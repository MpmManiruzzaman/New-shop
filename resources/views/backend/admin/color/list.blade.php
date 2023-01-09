@extends('backend.master')
@section('content')
<div class="container-fluid">
    <div class="col-md-12">
        @if(session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success' )}}</div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>SL</th>
                <th>Category Name</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            @foreach ($colora as $color)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $color->category_id }}</td>
                    <td>
                        {{ $color->name}}
                    </td>
                    <td>
                         <a href="{{ url('/color/edit/'.$color->id) }}" class="btn btn-sm btn-info">Edit</a>
                         <a href="{{ url('/color/delete/'.$color->id) }}" onclick="return confirm('Are you Sure??')" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            
        </table>
    </div>
    {{ $colors->links() }}
</div>
@endsection