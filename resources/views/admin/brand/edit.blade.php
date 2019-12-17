@section('title')
    Edit Brand
@endsection
@extends('admin.layouts.main')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Brand : {{$brand->name}}</h4>
                <form class="forms-sample" method="POST" action="admin/brand/edit/{{$brand->id}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    
                   <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{$brand->name}}">
                    </div>
                    
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button type="button" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
