<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'course';

    public static function findOrFail($id)
    {
        // todo обратиться к бдшке за списком курсов
    }
}
