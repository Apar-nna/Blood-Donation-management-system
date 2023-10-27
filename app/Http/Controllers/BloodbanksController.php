<?php

namespace App\Http\Controllers;

use App\Models\Bloodbanks;
use App\Http\Requests\StoreBloodbanksRequest;
use App\Http\Requests\UpdateBloodbanksRequest;
use Illuminate\Support\Facades\Auth;

class BloodbanksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact=Auth::user()->usertype;
        if($contact=='1')
        { 
            $comment=Bloodbanks::all();
        return view('/admin.admin')->with('comments',$comment);
        }
        else{
            $comment=Bloodbanks::all();
            return view('/dashboard')->with('comments',$comment);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBloodbanksRequest $request)
    {
        $con=$request->all();
        Bloodbanks::create($con);
        return redirect(url('/blood'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Bloodbanks $bloodbanks,$id)
    {

        $contacts=Bloodbanks::find($id);
        return view('admin.view')->with('contact',$contacts);
    
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bloodbanks $bloodbanks,$id)
    {
        $contacts=Bloodbanks::find($id);
        return view('admin.edit')->with('contact',$contacts);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBloodbanksRequest $request, Bloodbanks $bloodbanks,$id)
    {
        $contact=Bloodbanks::find($id);
     $input=$request->all();
     $contact->update($input);
     return redirect(url('/blood'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bloodbanks $bloodbanks,$id)
    {
        Bloodbanks::destroy($id);
        return back();
    }
}
