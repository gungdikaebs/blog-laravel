<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'content'];
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        // Cara Pertama
        // if (isset($filters['search']) ? ($filters['search']) : false) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('content', 'like', '%' . $filters['search'] . '%');
        // }

        // Cara Kedua (Menggunakan When dan null Coalesing)
        $query->when($filters['search'] ??  false, function ($query, $filter) {
            return $query->where('title', 'like', '%' . $filter . '%')
                ->orWhere('content', 'like', '%' . $filter . '%');
        });

        $query->when($filters['category'] ??  false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, function ($query, $author) {
            return $query->whereHas('author', function ($query) use ($author) {
                $query->where('username', $author);
            });
        });
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
