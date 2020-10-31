<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;

    public function findOrFail($id)
    {
        $student = DB::table('student')->where('id', $id)->get();

        $this->equal($student);
    }

    public function findByName($name)
    {
        $student = DB::table('student')->where('name', $name)->get();

        $this->equal($student);
    }

    public function changeExcludeStatus($id, $exclude)
    {
        if($exclude)
            DB::table('student')->where('id', $id)->update(['exclude'=> true]);
        elseif($exclude)
        {
            DB::table('student')->where('id', $id)->update(['exclude'=> false]);
        }
    }



    public function returnAll()
    {
        return DB::table('student')->get();
    }


    private function equal($value)
    {
        if($value == null)
        {
            return fail('такого студента не существует');
        }
        else
        {
            return $value;
        }
    }


}
