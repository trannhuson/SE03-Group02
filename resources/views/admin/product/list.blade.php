
@section('title')
    List Category
@endsection
@extends('admin.layouts.main')

@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Category</h4>
                </p>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center"> ID </th>
                        <th class="text-center">  Product Name </th>
                        <th class="text-center">  Product Brand </th>
                        <th class="text-center">  Product Category </th>
                        <th class="text-center">  Product Image </th>
                        <th class="text-center">  Price </th>
                        <th class="text-center">  Promotion Price </th>
                        <th class="text-center"> Edit </th>
                        <th class="text-center"> Delete </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listProduct as $item)
                        <tr>
                            <td class="text-center">{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td class="text-center">  {{$item->brand->name}} </td>
                            <td class="text-center">  {{$item->category->name}} </td>
                            <td class="text-center"><img src="{{asset($item->images[0]->image_path)}}"></td>
                            <td class="text-center text-danger">  {{$item->unit_price}} </td>
                            <td class="text-center text-danger"> {{$item->promotion_price}}</td>
                            <td class="text-center" width="20px"><button class="btn btn-primary">Edit</button></td>
                            <td class="text-center" width="20px"><button class="btn btn-danger">Delete</button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="mt-3">
                	{{ $listProduct->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection

