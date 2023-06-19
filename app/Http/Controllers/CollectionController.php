<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Collection;
use App\Models\Province;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function storeCollection(Request $request){
        $data=$request->all();
        if($file = $request->file('image')){
            $file_path = public_path() . '/file/' . 
            $destination_path = 'file/';
            $file_input = date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->move($destination_path, $file_input);
            $data['image'] = $file_input;
        }

        if($file = $request->file('File')){
            $file_path = public_path() . '/file/' . 
            $destination_path = 'file/';
            $file_input = date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->move($destination_path, $file_input);
            $data['File'] = $file_input;
        }

        Collection::create([
            'nama' => $data['nama'],
            'detail' => $data['detail'],
            'type' => $data['type'],
            'image' => $data['image'],
            'File' => $data['File'],
            'province_id' => $data['daerah'],
        ]);

        return redirect()->route('index.collection');
    }

    public function editCollection($id)
    {
        $collection = Collection::findOrFail($id);
        $data = Province::all();

        return view('collection.edit', ['collection' => $collection,'data' => $data]);
    }

    public function updateCollection(Request $request, $id)
    {
        $data = $request->all();
        $collection = Collection::findOrFail($id);

        if($file = $request->file('image')){

            $file_path = public_path() . '/file/' . $collection['image'];
            File::delete($file_path);
            
            $destination_path = 'file/';
            $file_input = date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->move($destination_path, $file_input);
            $data['image'] = $file_input;

            Collection::where("id", $id)->update([
                'nama' => $data['nama'],
                'detail' => $data['detail'],
                'type' => $data['type'],
                'image' => $data['image'],
                'File' => $data['File'],
                'province_id' => $data['daerah'],
            ]);    
        }
        
        if($file = $request->file('File')){

            $file_path = public_path() . '/file/' . $collection['File'];
            File::delete($file_path);
            
            $destination_path = 'file/';
            $file_input = date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->move($destination_path, $file_input);
            $data['File'] = $file_input;

            Collection::where("id", $id)->update([
                'nama' => $data['nama'],
                'detail' => $data['detail'],
                'type' => $data['type'],
                'image' => $data['image'],
                'File' => $data['File'],
                'province_id' => $data['daerah'],
            ]);    
        }
        
        else{
            Collection::where("id", $id)->update([
                'nama' => $data['nama'],
                'detail' => $data['detail'],
                'type' => $data['type'],
                'province_id' => $data['daerah'],
            ]);    
        }

        return redirect()->route('index.collection');
    }

    public function destroyCollection($id)
    {
        $data = Collection::findOrFail($id);
        $file_path = public_path() . '/file/' . $data['image'];
        $file_path = public_path() . '/file/' . $data['File'];
        File::delete($file_path);

        $data->destroy($id);
        return redirect()->route('index.collection');
    }

    public function collectionHouse()
    {
        $data = Collection::where('type', 'Rumah Adat')->get();
        $title = 'Rumah Adat';
        $subTitle = 'Rumah Adat';
        $province = Province::all();

        return view('client.collection.collection', ['data' => $data, 'title' => $title, 'subTitle' => $subTitle,'province' =>$province]);
    }

    public function collectionMusic()
    {
        $data = Collection::where('type', 'Alat Musik Tradisional')->get();
        $title = 'Alat Musik Tradisional';
        $subTitle = 'Alat Musik Tradisional';
        $province = Province::all();

        return view('client.collection.collection', ['data' => $data, 'title' => $title, 'subTitle' => $subTitle,'province' =>$province]);
    }

    public function collectionCloth()
    {
        $data = Collection::where('type', 'Pakaian Adat')->get();
        $title = 'Pakaian Adat';
        $subTitle = 'Pakaian Adat';
        $province = Province::all();

        return view('client.collection.collection', ['data' => $data, 'title' => $title, 'subTitle' => $subTitle,'province' =>$province]);
    }

    public function collectionDance()
    {
        $data = Collection::where('type', 'Tarian Tradisional')->get();
        $title = 'Tarian Tradisional';
        $subTitle = 'Tarian Tradisional';
        $province = Province::all();

        return view('client.collection.collection', ['data' => $data, 'title' => $title,'subTitle' => $subTitle,'province' =>$province]);
    }

    public function collectionFood()
    {
        
        $data = Collection::where('type', 'Makanan Khas')->get();
        $title = 'Makanan Khas';
        $subTitle = 'Makanan Khas';
        $province = Province::all();

        return view('client.collection.collection', ['data' => $data, 'title' => $title,'subTitle' => $subTitle,'province' =>$province]);
    }

    public function collectionDetails($id)
    {
        $data = Collection::where('id', $id)->first();
        $title = $data->nama;
        $province = Province::all();

        return view('client.collection.details', ['data' => $data,'title'=>$title, 'province' =>$province]);
    }
}
