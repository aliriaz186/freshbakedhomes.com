@extends('admin.layouts.master')


@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add Video Link</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Video Add</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    {{-- Form  --}}
    <form action="{{ route('video.store') }}" method="POST" enctype="multipart/form-data" id="mainform">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Video Link</h3>

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
                            <input type="text" name="title" id="name" class="form-control" value="{{old('title')}}">
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">

                            <label for="video">Video Link</label>
                            <input type="text" name="link" id="video" class="form-control">
                            @error('video')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="row p-3">
                        <div class="col-12">
                            <a href="{{ route('video.index') }}" class="btn btn-secondary">Cancel</a>
                            <input type="submit" value="Add Link" class="btn btn-success float-right">
                        </div>
                    </div>


                </div>
                <!-- /.card -->
            </div>


        </div>
    </form>

</section>

@endsection