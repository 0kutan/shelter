<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Elowuent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    
    public function getPagineteByLimit(int $limit_count = 5)
    {
        return $this->orderby('updated_at', 'DESC')->paginate($limit_count);
    }
}