<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = DB::table('students')->get();

        return view('students.index',['students'=> $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
        ]);

        DB::table('students')->insert([
            'name'=>$request->name,
            'email'=>$request->email,

        ]);

        session()->flash('success',"Student Create Successfully");

        return to_route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = DB::table('students')->find($id);

        return view('students.show',['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = DB::table('students')->find($id);

        return view('students.edit',['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
        ]);

        DB::table('students')->where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);

        session()->flash('success',"Student update Successfully");

        return to_route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('students')->where('id',$id)->delete();

        session()->flash('success',"Student Delete Successfully");

        return to_route('students.index');
    }
}
