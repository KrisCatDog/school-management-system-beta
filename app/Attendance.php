<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    /**
     * Mass assignment.
     *
     * @var array
     */
    protected $guarded = [];

    public function getCreatedAtAttribute($value)
    {
        return date('m-d', strtotime($value));
    }

    public function getStatusAttribute($value)
    {
        return [
            1 => '<i class="fas fa-check text-success"></i>',
            2 => '<b class="text-orange">S</b>',
            3 => '<i class="fas fa-times text-danger"></i>',
        ][$value];
    }

    /**
     * Attendance with student relation (1 to m)
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
