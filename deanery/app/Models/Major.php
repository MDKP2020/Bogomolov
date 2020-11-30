<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'major';

    public static function findOrFail($id)
    {
    }

    public static function getByForeignKey($id)
    {

    }

    public function getTable()
    {
        return $this->table;
    }
}
