<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;
use App\Http\Controllers\TaskController;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks=Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company = new Task();
        $company->name=$request->input('name');
        $company->email=$request->input('email');
        $company->save();
        
        return response()->json(['message'=>'task completed sucessfully ']);
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
    public function ajexFletch(){
        return view('tasks.ajexfletch');
    }
    public function ajexFletchdata(){
        $data=[
            [
                'name' => 'sagar',
                'email' => 'sagr@gmail.com',
                'phone' => 'asd',
            ],
            [
                'name' => 'sasd',
                'email' => 'asdfa@asdfa',
                'phone' => 'asdfasd',
            ]
        ];
        return response()->json($data);
    }
}
