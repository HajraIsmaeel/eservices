<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companyprofile;
use Illuminate\Support\Facades\Cache;

class CompanyprofileController extends Controller
{
    //

    public function company(Request $request){

        // ajax-form

        if($request->ajax()){
            $data = addcompany::where('name','Like',$request->name.'%')->get();
            $output = '';
            if(count($data) >0){
                $output = '<ul class="list-group" style="display:block;position:relative;z-indez:1">';
                foreach($data as $row){
                    $output .='<li class="list-group-item">'.$row->name.'</li>';
                }
                $output .= '</ul>';
            }
            else{
                $output .='<li class="list-group-item">No Data Found</li>';
            }
            return $output;
        }
        return view('companyprofile');
    }

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
        return view('companyprofile');
    }

}
