@extends('layout.layout')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Collection</h1>

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
            Add Collection
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('store.collection') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" required>
                </div>
                <div class="form-group">
                    <label for="daerah">Daerah</label>
                    <select name="daerah" id="daerah" class="form-control">
                        @foreach ($data as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_provinsi }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="detail">Detail</label>
                    <textarea class="form-control" name="detail" id="detail" cols="30" rows="3"
                         required></textarea>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <select name="type" class="form-control" id="type" required>
                        <option value="Rumah Adat">Rumah Adat</option>
                        <option value="Alat Musik Tradisional">Alat Musik Tradisional</option>
                        <option value="Pakaian Adat">Pakaian Adat</option>
                        <option value="Tarian Tradisional">Tarian Tradisional</option>
                        <option value="Makanan Khas">Makanan Khas</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image_url">Image</label>
                    <input name="image" type="file" class="form-control" id="image_url" required>
                </div>
                <div class="form-group">
                    <label for="3d_file">3D File</label>
                    <input name="File" type="file" class="form-control" id="3d_file" required>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
                <a href="{{ route('index.collection') }}" class="btn btn-danger">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection