<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'faculty';

    public static function findOrFail($id)
    {
    }
}
