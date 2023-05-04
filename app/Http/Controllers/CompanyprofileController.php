<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companyprofile;
use App\Models\addcompany;
use Illuminate\Support\Facades\Cache;

class CompanyprofileController extends Controller
{
    //

    public function store(Request $request)
    {
        //
        $company = new company();

        $company->company_name = $request->input('name');
        $company->Description = $request->input('jobdesc');
        $company->Job_Type = $request->input('jobtype');
        $company->Salary = $request->input('salary');
        $company->Location = $request->input('address');
        $company->Shift = $request->input('shift');
        $company->Logo = $request->input('logo');

        if($request->hasfile('logo')){
            $file = $request->file('logo');
            $extension = $file->getclientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/form/',$filename);
            $company->Logo = $filename;
        }
        else{
            return $request;
            $company->Logo = '';
        }
        $company->save();
        $fm = addcompany::all();
        return view('companyprofile',compact('fm'));
    }

}
