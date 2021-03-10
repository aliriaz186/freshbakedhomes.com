@extends('admin.layouts.master')

@section('extra-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('admin-assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet"
    href="{{ asset('admin-assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection


@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 d-flex">
                <h1 class="m-0 text-dark">Images</h1>
                <a href="{{ route('image.create') }}" class="btn btn-sm btn-info ml-3">Add New</a>

            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Image Page</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->



<section class="content">
    <!-- Default box -->
    <div class="card">
        <x-admin.message />
        <div class="card-header">
            <h3 class="card-title">Images</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                    title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body p-2">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                aria-describedby="example1_info">
                <thead>
                    <tr>
                        <th style="width: 7%">
                            #
                        </th>
                        <th style="width: 20%">
                            Title
                        </th>
                        <th style="width: 15%">
                            Placement
                        </th>
                        <th style="width: 25%">
                            Image
                        </th>

                        <th style="width: 15%">
                            Created at
                        </th>

                        <th style="width: 15%">

                        </th>

                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($images as $image)

                    <tr>
                        <td>
                            {{ $no++ }}
                        </td>

                        <td>
                            {{ $image->title }}
                        </td>
                        <td>
                            {{ $image->type }}
                        </td>
                        <td>
                            <img src="{{url('')}}/{{$image->image}}" alt="img" width="100%" height="190" class="">
                        </td>

                        <td class="project_progress">
                            {{ $image->created_at }}
                        </td>

                        <td class="project-actions text-right d-flex justify-content-around">
                            {{-- <a class="btn btn-primary btn-sm" href="{{ route('category.show', $category->id) }}">
                            <i class="fas fa-folder">
                            </i>
                            View
                            </a> --}}
                            <a class="btn btn-info btn-sm" href="{{ route('image.edit', $image->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>

                            <form action="{{ route('image.destroy', $image->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure to delete!')">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </button>
                            </form>

                        </td>


                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>


@endsection

@section('extra-js')
<!-- DataTables -->
<script src="{{ asset('admin-assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });

    });

</script>
@endsection
