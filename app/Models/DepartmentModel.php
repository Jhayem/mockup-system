<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentModel extends Model
{
    // protected $table = 'departments';

    use HasFactory;
   protected $fillable = ['name', 'admin_id'];

    public function employees()
    {
        return $this->hasMany(EmployeeModel::class);
    }
        public function admins()
    {
        return $this->belongsTo(AdminModel::class, 'admin_id');
    }
}
