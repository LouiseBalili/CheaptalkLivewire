<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'author',
        'title',
        'content',
    ];

    public function category(){
        return $this->belongsTo('App\Models\category');
    }

    public function scopeSearch($query, $terms) {
        collect(explode(" ", $terms))
            ->filter()
            ->each(function ($term) use ($query) {
                $term = "%" . $term . "%";

                $query->where('title', 'like', $term);
            });
    }
}
