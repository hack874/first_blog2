<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model //postはモデルの役割がある
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'body'
        ];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->orderby('updated_at', 'DESC')->Paginate($limit_count);
    }
}
