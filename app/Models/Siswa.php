<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, $filters)
    {
        $query->when($filters ?? false, function ($query, $s) {
            return $query->where('nis', 'like', '%' . $s . '%')
                ->orWhere('full_name', 'like', '%' . $s . '%')
                ->orWhere('email', 'like', '%' . $s . '%')
                ->orWhere('jurusan', 'like', '%' . $s . '%')
                ->orWhere('mobile', 'like', '%' . $s . '%');
        });
    }
}
