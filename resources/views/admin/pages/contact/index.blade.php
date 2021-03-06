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
                <h1 class="m-0 text-dark">Messags</h1>
                {{-- <a href="{{ route('messag.create') }}" class="btn btn-sm btn-info ml-3">Add New</a> --}}

            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Messag Page</li>
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
            <h3 class="card-title"> You have <b> {{DB::table('contacts')->where('status', 0)->count()}}</b> Unread
                Message!
            </h3>
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
                        <th style="width: 35%">
                            Name
                        </th>
                        <th style="width: 25%">
                            Email
                        </th>

                        <th style="width: 15%">
                            Recived at
                        </th>

                        <th style="width: 15%">

                        </th>

                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($messages as $message)

                    @if($message->status==0)

                    <tr class="bg-secondary">

                        @else
                    <tr>

                        @endif


                        <td>
                            {{ $no++ }}
                        </td>

                        <td>
                            {{ $message->name }}
                        </td>
                        <td>
                            {{ $message->email }}

                        </td>

                        <td class="project_progress">
                            {{ $message->created_at->diffforhumans() }}
                        </td>

                        <td class="project-actions text-right d-flex justify-content-around">
                            <a class="btn btn-primary btn-sm" href="{{ route('contact.show', $message->id) }}"
                                id="msg{{$message->id}}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            {{-- <a class="btn btn-info btn-sm" href="{{ route('messag.edit', $messag->id) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                            </a> --}}
                            <form action="{{ route('contact.destroy', $message->id) }}" method="POST">
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


        //Ajax Request for Read/Unread message functionallity

         @foreach ( $messages as $message)
        $('#msg{{$message->id}}').click(function(){
            var msgId = {{$message->id}};
            $.ajax({
                type:'get',
                // url:'{{ url('/admin/update-message') }}',
                url:'{{ route('updateMsg') }}',
                data: { msgId:msgId },
                success: function(response){
                    console.log(response);

                }


            })
        })
        @endforeach





    });

</script>
@endsection