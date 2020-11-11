<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compay_Model;

class CompaniesController extends Controller
{
    public function index()
    {
        $Companies = Compay_Model::all();
        return view('index')->with('Companies', $Companies);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);

        Compay_Model::create([
            'name' => $request->input('name'),
            'code' => $request->input('code'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'country' => $request->input('country'),
        ]);

        return redirect('/');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $company = Compay_Model::where('id', $id)->get()[0];
        return view('edit')->with('Compay', $company);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
        
        ]);

        Compay_Model::where('id', $id)->update(array(
            'name' => $request->input('name'),
            'code' => $request->input('code'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'country' => $request->input('country'),
            
        ));

        return redirect('/');
    }

    public function destroy($id)
    {
        Compay_Model::where('id', $id)->delete();
        return redirect('/');
    }
}