@section('title')
    Create Brand
@endsection
@extends('admin.layouts.main')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Brand</h4>
                <form class="forms-sample" method="POST" action="{{asset('admin/brand/add')}}">
                    @csrf
<<<<<<< HEAD
                     <div class="form-group">
=======
                    <div class="form-group">
>>>>>>> 1691943797af17da69abdd5fd6571da6badfcde2
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button type="button" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
