<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index(Request $request)
    {
        //
        $suppliers = Suppliers::all();

        // nama supplier
        $cari = $request->supplier_name;
        if (!empty($request->supplier_name)){
            $suppliers = Suppliers::where('supplier_name', 'LIKE', '%' . $cari . '%')
            ->get();
        }

        // addres supplier
        $cari = $request->addres;
        if (!empty($request->addres)){
            $suppliers = Suppliers::where('addres', 'LIKE', '%' . $cari . '%')
            ->get();
        }

        return view('suppliers.index', compact('suppliers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('suppliers.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $categories = Suppliers::create($request->all());
        if ($categories) {
            return redirect('/supplier')->with('success', 'Data berhasil di simpan');
        } else {
            return redirect('/supplier')->with('error', 'Data gagala di simpan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Suppliers $suppliers)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        //
        $suppliers = Suppliers::find($id);
        return view ('/suppliers/update', compact('suppliers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        //
        $suppliers = Suppliers::find($id);
        $update = $suppliers->update($request->all());
        if ($update) {
            return redirect ('/supplier')->with('success', 'Data berhasil di update');
        } else {
            return redirect ('/supplier')->with('error', 'Data gagal di update');
        }

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $suppliers = Suppliers::find($id);
        $delete = $suppliers->delete();
        if ($delete) {
            return redirect ('/supplier')->with('success', 'Data berhasil di hapus');
        } else {
            return redirect ('/supplier')-> with('error', 'Data gagal di hapus');
        }
    }



}
