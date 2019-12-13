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
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputEmail3">Category_id</label>
                            <select class="form-control" name="category_id" >
                                @foreach($listCategory ?? '' as $item)
                                    <option value="{{$item->id}}">{{$item->id}}</option>
                                @endforeach
                            </select>
                        </div>
                         <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" name = "name" placeholder="Name">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button type="button" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
