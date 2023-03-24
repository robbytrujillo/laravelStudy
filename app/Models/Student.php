<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //protected $table = 'students'; // memberi tahu ke laravel, bahwa model Student merujuk ke table students, asalkan nama tablenya ditambahkam huruf "s" diakhirannya
    
    // jika primarykey table bukan ID maka harus diketikkan syntax berikut
    // protected $primaryKey = 'students_id';
    // public $incrementing = false;

    // jika primary key varchar
    // protected $keyType = 'string'; 

    // jika di table tidak ada must assignmentnya
    // public $timestamps = false; 

}
