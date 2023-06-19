@extends('layout.layoutclient')

@section('content')
    <div class="gambar">
        <img src="{{ URL::asset('/file/' . @$data->image) }}" alt="" />
    </div>

    <div class="text9">
        <h3 class="text9">{{ $data->nama_provinsi }}</h3>
    </div>

    <div class="text6">
        <h5>
            {{ $data->detail_provinsi }}
        </h5>
    </div>

    <div class="text9">
        <h2 class="text9">Kebudayaan {{ $data->nama_provinsi }}</h2>
    </div>
    <div class="text9">
        <h3 class="text9">Rumah Adat:</h3>
        @foreach ($collection as $item)
            <div class="text6">
                @if ($item->type == 'rumah adat')
                    <h5>-{{ $item->nama }}</h5>
                @endif
            </div>
        @endforeach
    </div>

    <div class="text9">
        <h3 class="text9">Alat Musik:</h3>
        @foreach ($collection as $item)
            <div class="text6">
                @if ($item->type == 'alat musik tradisional')
                    <h5>-{{ $item->nama }}</h5>
                @endif
            </div>
        @endforeach
    </div>

    <div class="text9">
        <h3 class="text9">Pakaian Adat:</h3>
        @foreach ($collection as $item)
            <div class="text6">
                @if ($item->type == 'pakaian adat')
                    <h5>-{{ $item->nama }}</h5>
                @endif
            </div>
        @endforeach
    </div>

    <div class="text9">
        <h3 class="text9">Tarian Tradisional:</h3>
        @foreach ($collection as $item)
            <div class="text6">
                @if ($item->type == 'tarian tradisional')
                    <h5>-{{ $item->nama }}</h5>
                @endif
            </div>
        @endforeach
    </div>

    <div class="text9">
        <h3 class="text9">Makanan Khas:</h3>
        @foreach ($collection as $item)
            <div class="text6">
                @if ($item->type == 'makanan khas')
                    <h5>-{{ $item->nama }}</h5>
                @endif
            </div>
        @endforeach
    </div>
    
@endsection
