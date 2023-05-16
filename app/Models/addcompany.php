<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\AddcompanyController;

class addcompany extends Model
{
    use HasFactory;
    protected $table = 'addcompanies';
    protected $fillable = ['name','email','contact','discription','salary','shift','result','address','website','image'];
}
