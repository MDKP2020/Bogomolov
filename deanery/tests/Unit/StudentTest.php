<?php

namespace Tests\Unit;

use App\Models\Student;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class StudentTest extends TestCase
{
    use RefreshDatabase; // зачистка бд

    /**
     * Тестирование метода findOrFail (проверить студента на существование по id -> студент | 'такого студента не существует')
     */
    public function testFindOrFail()
    {
        $student = Student::factory()->make();

        // положительный
        $this->assertEquals($student, Student::findOrFail($student->id));

        // отрицательный
        $this->assertNotEquals($student, Student::findOrFail($student->id + 1));
    }

    /**
     * Тестирование метода findByName (найти по имени -> студент | 'такого студента не существует')
     */
    public function testFindByName()
    {
        $student = Student::factory()->make();

        // положительный
        $this->assertEquals($student, Student::findOrFail($student->name));

        // отрицательный
        $this->assertNotEquals($student, Student::findOrFail('Danila Danilov'));
    }

    /**
     * Тестирование метода changeExcludeStatus (поменять статус студента)
     */
    public function testChangeExcludeStatus()
    {
        $student = Student::factory()->make();
        $student->exclude = True;
        Student::changeExcludeStatus($student->id, False);

        // положительный
        $this->assertEquals(False, $student->exclude);
    }

    /**
     * Тестирование метода returnAll (получить всех студентов)
     */
    public function testReturnAll()
    {
        $students = Student::factory()->count(10)->make();

        // положительный
        $this->assertEquals($students, Student::returnAll());
    }

//   /**
//     * Тестирование метода equal($value) (проверить на == null)
//     */
//    public function testEqual()
//    {
//        $students = Student::factory()->count(10)->make();
//
//        $this->assertEquals($students, Student::returnAll());
//    }
}
