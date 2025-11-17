<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

        public function scopeFilter($query , array $filters){
       if ($filters['services'] ?? false) {
        $query->where('services' , 'like' , '%' .  request('services') . '%');
       };
    }
}
