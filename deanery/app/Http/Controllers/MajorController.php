<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Major;
use App\Models\Student;
use http\Client\Response;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function majorPage($id) {
        return view('major', ['major' => Major::findOrFail($id)]);
    }

    /**
     * Показать список всех специальностей.
     *
     * @return Response|Factory
     */
    public function indexPage($faculty) //todo добавить отображение на дату
    {
        $majors = Major::where('faculty_id',  $faculty)->get();
        $faculty_tab = Faculty::where('faculty_id', $faculty)->first();

        return view('majors', compact('faculty_tab', 'majors'));
    }

    public function majorByDate($date)//todo переписать в indexPage
    {
        $majors = Major::where([
            ['start_date','<=',$date],
            ['end_date','>=',$date]
        ])->get();

        return view('majors', compact('majors'));
    }

    public function closeMajor($name, $endDate)
    {
        $major = Major::where('name',$name)->update(['end_date' => $endDate]);

    }

    public function majorCreate($name, $startDate, $facultyName)
    {
        $major = new Major();

        $faculty = Faculty::where('name', $facultyName)->get(['faculty_id']);
        //todo добавить проверку на повтор данных
        $major->save([
            ['$name'=>$name],
            ['$start_date'=>$startDate],
            ['faculty_id'=>$faculty],
        ]);
    }

    public function majorUpdate($majorId, $name, $startDate)
    {
        $major = Major::where('id',$majorId)->update([
            ['name'=>$name],
            ['start_date'=>$startDate]
        ]);
    }
}
