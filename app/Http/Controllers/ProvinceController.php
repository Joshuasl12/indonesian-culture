<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Province;
use App\Models\Collection;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function storeProvince(Request $request){
        $data=$request->all();
        if($file = $request->file('image')){
            $file_path = public_path() . '/file/' . 
            $destination_path = 'file/';
            $file_input = date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->move($destination_path, $file_input);
            $data['image'] = $file_input;
        }

        Province::create([
            'nama_provinsi' => $data['nama_provinsi'],
            'detail_provinsi' => $data['detail_provinsi'],
            'image' => $data['image'],
        ]);

        return redirect()->route('index.province');
    }

    public function editProvince($id)
    {
        $province = Province::findOrFail($id);

        return view('province.edit', ['province' => $province]);
    }

    public function updateProvince(Request $request, $id)
    {
        $data = $request->all();
        $province = Province::findOrFail($id);

        if($file = $request->file('image')){

            $file_path = public_path() . '/file/' . $province['image'];
            File::delete($file_path);
            
            $destination_path = 'file/';
            $file_input = date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->move($destination_path, $file_input);
            $data['image'] = $file_input;

            Province::where("id", $id)->update([
                'nama_provinsi' => $data['nama_provinsi'],
                'detail_provinsi' => $data['detail_provinsi'],
                'image' => $data['image'],
            ]);    
        }
        else{
            Province::where("id", $id)->update([
                'nama_provinsi' => $data['nama_provinsi'],
                'detail_provinsi' => $data['detail_provinsi'],
            ]);    
        }

        return redirect()->route('index.province');
    }

    public function destroyProvince($id)
    {
        $data = Province::findOrFail($id);
        $file_path = public_path() . '/file/' . $data['image'];
        File::delete($file_path);

        $data->destroy($id);
        return redirect()->route('index.province');
    }

    public function province($id)
    {
        $data = Province::where('id', $id)->first();
        $title = 'Provinsi '.$data->nama_provinsi;
        $province = Province::all();
        $collection = Collection::where('province_id', $id)->get();

        return view('client.collection.province', ['data' => $data, 'title' => $title, 'province' =>$province, 'collection' => $collection]);
    }
    
}
