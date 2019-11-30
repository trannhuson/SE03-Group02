
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
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th> ID </th>
                        <th>  name </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($listCategory as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td><button class="btn btn-primary">Edit</button></td>
                                <td><button class="btn btn-danger">Delete</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

