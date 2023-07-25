<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SepatuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customer.home',[
            'title'     => 'Home',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.pay',[
            'title'     => 'Pay',
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }

    public function shop()
    {
        return view('customer.shop',[
            'title'     => 'Shop',
        ]);
    }

    // public function pay()
    // {
    //     return view('customer.pay',[
    //         'title'     => 'Pay',
    //     ]);
    // }
}
