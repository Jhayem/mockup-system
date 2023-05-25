<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;
       protected $fillable = [
        'name',
        'email',
        'password',
        'department_id',
    ];
    
    public function departments()
    {
        return $this->hasMany(DepartmentModel::class, 'admin_id');
    }
}
