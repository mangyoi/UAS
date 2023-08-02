<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Datas;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DatasExport;
use App\Models\Product;

class SepatuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $datas = Datas::all();
        return view('customer.home',[
            'title'     => 'Home',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $latestId=$_GET['id'];
        $products=Product::find($latestId);
        return view('customer.pay',[
            'products'=>$products,
            'id'=>$products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'no_wa' => 'required|numeric',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $file = $request->file('formFile');

        if ($file != null) {
            $originalFilename = $file->getClientOriginalName();
            $encryptedFilename = $file->hashName();

            // Store File
            $file->store('public/files');
        }
        $simpan = new Datas;
        $simpan->nama = $request->nama;
        $simpan->alamat = $request->alamat;
        $simpan->no_wa = $request->no_wa;
        $simpan->email = $request->email;
        if ($file != null) {
            $simpan->original_filename = $originalFilename;
            $simpan->encrypted_filename = $encryptedFilename;
        }
        $simpan->save();
        return redirect()->route('sepatu.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $data = Datas::findOrFail($id);

        // return view('admin.index', compact('data'));
        $datas = Datas::all();

        return view('admin.index', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('datas')
        ->where('id', $id)
        ->delete();

        return redirect()->route('sepatu.index');
    }

    // public function shop()
    // {
    //     return view('customer.shop',[
    //         'title'     => 'Shop',
    //     ]);
    // }

    // public function home()
    // {
    //     return view('customer.home',[
    //         'title'     => 'Home',
    //     ]);
    // }

    public function exportExcel()
    {
        $datas = Datas::all();

        return Excel::download(new DatasExport, 'Perlu Dikirim.xlsx');
    }

}
