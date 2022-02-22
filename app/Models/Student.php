<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public static function getAllStudent()
    {
        return [
            0=>[
                'id'=>1,
                'name'=>'Riaz',
                'email'=>'riaz@gmail.com',
                'mobile'=>'01716337420',
                'image'=>'',
            ],
            1=>[
                'id'=>2,
                'name'=>'Rana',
                'email'=>'rana@gmail.com',
                'mobile'=>'01872452',
                'image'=>'',
            ],
        ];
    }
    use HasFactory;
    protected $student;

    public function newStudent()
    {
        $this->student = new Student();
        $this->student->name = 'Riaz';
        $this->student->email = 'r@gmail.com';
        $this->student->mobile = '00000';
        $this->student->save();

    }
}
