<?php

namespace App\Http\Controllers;

use App\Models\sections;
use Illuminate\Http\Request;
use App\Models\products;
use DB;
class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = sections::all();
        $products=products::all();
        return view('sections.show_sections', compact('sections','products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sections=sections::where('id',$id)->get();
        return view('sections.show_sections',compact('sections'));
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sections $sections)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sections $sections)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sections $sections)
    {
        //
    }
}
