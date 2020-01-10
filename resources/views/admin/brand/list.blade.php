
@section('title')
    List Brand
@endsection
@extends('admin.layouts.main')

@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Brand</h4>
                </p>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center"> ID </th>
                        <th class="text-center"> Brand Name </th>
                        <th class="text-center"> Edit </th>
                        <th class="text-center"> Delete </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listBrand as $item)
                        <tr>
                            <td class="text-center">{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td class="text-center" width="20px"><a href="admin/brand/edit/{{$item->id}}"><button class="btn btn-primary"> Edit</button></a></td>
                            <td class="text-center" width="20px"><a href="admin/brand/delete/{{$item->id}}"><button class="btn btn-danger">Delete</button></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

