@extends('layout.layout')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Province</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            Edit Province
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('update.province', $province->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Nama Provinsi</label>
                    <input type="text" value="{{ $province->nama_provinsi }}" name="nama_provinsi" class="form-control" id="title" placeholder="Masukan Nama Provinsi..."
                        required>
                </div>
                <div class="form-group">
                    <label for="description">Detail Provinsi</label>
                    <textarea class="form-control" name="detail_provinsi" id="description" cols="30" rows="3"
                         required>{{ $province->detail_provinsi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image_url">Image</label>
                    <input name="image" type="file" class="form-control" id="image_url">
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
                <a href="{{ route('index.province') }}" class="btn btn-danger">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection