<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\LicenceType;
use App\Models\Licence;
use App\Models\Company;
use App\Models\Authority;


class LicenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licenceTypeList = LicenceType::select('id','licence_name')->get();
        $company= Company::select('id','company_name')->get();
        $authority= Authority::select('id', 'authority_name')->get();
        return view('create_licence', compact( ['licenceTypeList','company','authority']));
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
            $rules=['licenceName'=> 'required',
            'licenceNumber'=> 'required',
            'companyID'=> 'required',
            'authorityID'=> 'required',
            'expiryDate'=> 'required',
            'responsible'=> 'required',
            'remarks'=> 'required',
            'file'=> 'required',
        ];
        $this->validate($request,$rules);

     
        
        $licence=new Licence();
        $licence->licence_name= $request->licenceName;
        $licence->licence_number= $request->licenceNumber;
        $licence->company_id= $request->companyID;
        $licence->authority_id= $request->authorityID;
        $licence->expiry_date= $request->expiryDate;
        $licence->responsible= $request->responsible;
        $licence->remarks= $request->remarks;
                           $fileName = time().'.'.$request->file->extension();  
        $licence->file_path=  $fileName;
        $licence->save();

        $request->file->move(public_path('licence_img'), $fileName);
        Session::flash('msg','Data Successfully Addeded');
        return redirect('/');
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
