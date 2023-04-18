<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companyprofile extends Model
{
    use HasFactory;

    protected $table = 'companyprofiles';
    protected $fillable = ['company_name','Description','Job_Type','Salary','Location','Shift',"Logo"];
    
}
