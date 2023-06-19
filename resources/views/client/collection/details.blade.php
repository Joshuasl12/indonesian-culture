@extends('layout.layoutclient')

@section('content')
    
    <div id="aSide" style="display: flex; width: 100%; justify-content: center;">
        <model-viewer src="{{ URL::asset('/file/' . @$data->File) }}" alt="3d model" class="model-viewer" auto-rotate
            camera-controls ar ios-src="{{ URL::asset('/file/' . @$data->File) }}"></model-viewer>
    </div>

    <div class="text5">
        <h3>{{ $data->nama }}</h3>
        <h6>3D Model</h6>
    </div>

    <div class="text6">
        <h5>
            {{ $data->detail }}
        </h5>
    </div>


@endsection



