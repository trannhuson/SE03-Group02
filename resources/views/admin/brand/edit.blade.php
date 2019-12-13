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
                    
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputEmail3">Category_id</label>
                            <select class="form-control" name="category_id" >
                                @foreach($category as $item)
                                    <option 
                                    @if($brand->category->id == $item->id)
                                    {{"selected"}}
                                    @endif
                                    value="{{$item->id}}">{{$item->id}}</option>
                                @endforeach
                            </select>
                        </div>
                         <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" name = "name" placeholder="Name" value="{{$brand->name}}"/>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button type="button" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
