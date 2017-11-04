<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=[

            'name'=>$request['name'],
            'email'=>$request['email']

        ];

        return Contact::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function apicontact()
    {
        $contact = Contact::all();

        return Datatables::of($contact)

                ->addColumn('action',function($contact){
                        return '<a href ="#" class= "btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open "></i>Show</a>'.

                        '<a onClick="editForm('.$contact->id.')" class = "btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i>Edit</a>'.
                        '<a onClick="deleteData('.$contact->id.')" class = "btn btn-danger btn-xs"><i class ="glyphicon glyphicon-trash"></i>Delete</a>';

                })->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
