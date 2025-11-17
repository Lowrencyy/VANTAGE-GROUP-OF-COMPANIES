<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        if (!empty($filters['search'])) {
            $term = $filters['search'];
            return $query->where('title', 'like', "%{$term}%")
                         ->orWhere('description', 'like', "%{$term}%");
        }
        return $query;
    }
}

