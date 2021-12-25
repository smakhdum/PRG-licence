<?php

namespace App\Http\Controllers;
use Session;
use App\Models\Licence;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Authority;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Company::join('licences','companies.id' , '=','licences.company_id' )
        ->join('authorities','licences.authority_id' , '=', 'authorities.id')
        ->get(['licences.id','licences.licence_name', 'licences.licence_number','licences.expiry_date','licences.remarks','licences.responsible','licences.file_path',
   'companies.company_name', 'companies.company_type','companies.company_location', 
    'authorities.authority_name','authorities.contact_person', 'authorities.contact_mobile' ])->sortBy('company_name');

        return view('home',compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= Licence::find($id); //This will fetch the respective record from the table. 
        return view('view_licence',compact('data'));
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
