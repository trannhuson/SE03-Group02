@section('title')
    Edit Product
@endsection
@extends('admin.layouts.main')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Product : {{$product->name}}</h4>
                <form action="admin/product/edit/{{$product->id}}" method="POST" class="forms-sample">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name = "name" placeholder="Name" value="{{$product->name}}">
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputEmail3">Product</label>
                            <select class="form-control" name="category_id" >
                                @foreach($listCategory ?? '' as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="exampleInputEmail3">Brand</label>
                            <select class="form-control" name="brand_id" >
                                @foreach($listBrand ?? '' as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="form-group col-4">
                            <label for="exampleInputPassword4">Price</label>
                            <input type="text" class="form-control text-danger" name="unit_price" value="{{$product->unit_price}}">
                        </div>
                        <div class="form-group col-4">
                            <label for="exampleInputPassword4">Promotion Price</label>
                            <input type="text" class="form-control text-danger" name="promotion_price" value="{{$product->promotion_price}}">
                        </div>
                        <div class="form-group col-4">
                            <label for="exampleInputPassword4">Quantity</label>
                            <input type="text" class="form-control " name="quantity" value="{{$product->quantity}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Product Detail</label>
                        <textarea name="detail" class="form-control " id="editor1">{{$product->detail}}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label>Product Images</label>
                            <div class="dropzone" id="my-dropzone" name="myDropzone">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button type="button" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
        {{--    //dropzone--}}
    <link rel="stylesheet" href="{{ asset('dropzone/dist/dropzone.css') }}">
    <script src="{{ asset('dropzone/dist/dropzone.js') }}"></script>
    <script type="text/javascript">
        Dropzone.options.myDropzone= {
            url: '{{ url('admin/product/uploadImg') }}',
            headers: {
                'X-CSRF-TOKEN': '{!! csrf_token() !!}'
            },
            autoProcessQueue: true,
            uploadMultiple: true,
            parallelUploads: 5,
            maxFiles: 10,
            maxFilesize: 5,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            dictFileTooBig: 'Image is bigger than 5MB',
            addRemoveLinks: true,
            removedfile: function(file) {
                var name = file.name;
                console.log(file);
                name =name.replace(/\s+/g, '-').toLowerCase();    /*only spaces*/
                $.ajax({
                    type: 'POST',
                    url: '{{ url('admin/product/deleteImg') }}',
                    headers: {
                        'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                    },
                    data: "id="+name,
                    dataType: 'html',
                    success: function(data) {
                        console.log(data)
                        $("#msg").html(data);
                    }
                });
                var _ref;
                if (file.previewElement) {
                    if ((_ref = file.previewElement) != null) {
                        _ref.parentNode.removeChild(file.previewElement);
                    }
                }
                return this._updateMaxFilesReachedClass();
            },
            previewsContainer: null,
            hiddenInputContainer: "body",
        }
    </script>
    <style>
        .dropzone {
            border: 2px dashed #0087F7;
            border-radius: 5px;
            background: white;
        }
    </style>
@endsection
