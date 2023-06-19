@extends('layout.layout')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Collection Tables</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="{{route('create.collection')}}">Create</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Daerah</th>
                            <th>Detail</th>
                            <th>Type</th>
                            <th>Image</th>
                            <th>3D File</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->province->nama_provinsi }}</td>
                            <td>{{ $item->detail }}</td>
                            <td>{{ $item->type }}</td>
                            <td>
                                <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#imageModal{{$item->id}}">
                                    <i class="far fa-eye fa-sm text-white-50"></i>&nbsp; View Image</a>
                                </a>
                                &nbsp;
                                <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{ URL::asset('/file/' . @$item->image) }}" download="{{ $item->image }}"
                                    class="tag">Download Image</a>
                                <div class="modal fade" id="imageModal{{$item->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="imageModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ URL::asset('/file/' . @$item->image) }}"
                                                    class="img-fluid" alt="Image Preview">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </td>
                            <td>
                                <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{ URL::asset('/file/' . @$item->File) }}" download="{{ $item->File  }}"
                                    class="tag">Download 3D File</a>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{route('edit.collection', $item->id)}}">Edit</a>
                                <form action="{{ route('destroy.collection', $item->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $('#dataTable').DataTable();
    })
</script>
@endsection