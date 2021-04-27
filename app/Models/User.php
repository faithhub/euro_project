<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surname',
        'last_name',
        'email',
        'class_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function create($data)
    {
        $id = mt_rand(1000, 9999);
        $pass = strtolower($data['surname']);
        $save = new self;
        $save->email = 'TCH' . $id;
        $save->surname = $data['surname'];
        $save->last_name = $data['last_name'];
        $save->class_id = $data['subject_id'];
        $save->role = 'Teacher';
        $save->password = Hash::make($pass);
        $save->save();
        return $save;
    }

    public function create_student($data)
    {
        $id = mt_rand(1000, 9999);
        $pass = strtolower($data['first_name']);
        $save = new self;
        $save->email = $data['matric_number'];
        $save->first_name = $data['first_name'];
        $save->last_name = $data['last_name'];
        $save->faculty_id = $data['faculty_id'];
        $save->department_id = $data['department_id'];
        $save->level_id = $data['level_id'];
        $save->role = 'Student';
        $save->password = Hash::make($pass);
        $save->save();
    }

    public function subjects()
    {
        return $this->belongsTo(Subject::class, 'class_id');
    }
    public function classes()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
}
