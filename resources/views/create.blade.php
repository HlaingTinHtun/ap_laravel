@extends('layout')

@section('content')

    <div class="container">
        
        <div class="card">
        <div class="card-header" style="text-align:center">
            New Post
        </div>
        <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  
        <form action="/posts" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{old('name')}}">
            </div>
           
            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea class="form-control" name="description" placeholder="Enter Desc">{{old('description')}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/posts" class="btn btn-success">Back</a>
        </form>
        </div>
        </div>
    </div>
@endsection