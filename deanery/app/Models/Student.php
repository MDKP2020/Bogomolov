<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;


    public static function findOrFail($id)
    {
        $student = DB::table('student')->get($id);

        if($student == null)
        {
            return fail();
        }
        else
        {
            return $student;
        }
    }

    public function returnAll()
    {
        return DB::table('student')->get();
    }


}
