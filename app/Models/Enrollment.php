<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'entollments'; 
    protected $primaryKey = 'id';
    protected $fillable = ['enroll_no', 'paid_date', 'student_id', 'join_date', 'fee', 'batch_id'];
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
