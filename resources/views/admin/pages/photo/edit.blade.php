@extends('admin.layouts.master')


@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Update image</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Image Update</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    {{-- Form  --}}
    <form action="{{ route('image.update',$image->id) }}" method="POST" enctype="multipart/form-data" id="mainform">
        @csrf
        @method('patch')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Image</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        {{-- {{ dump($errors) }} --}}
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" name="title" id="name" class="form-control" value="{{ $image->title }}">
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div>
                                <img src="{{url('')}}/{{$image->image}}" alt="img" width="20%" height="190">
                            </div>


                            <label for="image">Image Update</label>
                            <input type="file" name="image" id="image" class="form-control mb-2"
                                onchange="preview_image(event)">
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <img id="output_image" class="img-fluid" width="400px" />
                        </div>

                        <div class="form-group">
                            <label for="name">Select Image Placement</label>
                            <select type="text" name="placement" id="placement" class="form-control">
                                <option value="">Select Image Placement</option>
                                @foreach(\App\Models\ImagePlacements::all() as $placement)
                                    <option value="{{$placement->type}}" {{$image->type == $placement->type ? 'selected' : ''}}>{{$placement->type}}</option>
                                @endforeach
                            </select>
                            @error('placement')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="row p-3">
                        <div class="col-12">
                            <a href="{{ route('image.index') }}" class="btn btn-secondary">Cancel</a>
                            <input type="submit" value="Update image" class="btn btn-success float-right">
                        </div>
                    </div>


                </div>
                <!-- /.card -->
            </div>


        </div>
    </form>

</section>

@endsection

@section('extra-js')
<script>
    // Images Preview Single image

        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }

</script>

@endsection
