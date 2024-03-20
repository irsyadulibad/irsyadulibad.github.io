<?php

namespace App\Models;

use App\Enums\ArticleStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'slug', 'content', 'status',
    ];

    protected $casts = [
        'status' => ArticleStatus::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(fn($model) => $model->setSlug());
        static::updating(function($model) {
            if($model->isDirty('title'))
                $model->setSlug();
        });
    }

    protected function setSlug()
    {
        $slug = Str::slug($this->title);
        $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        $this->slug = $count ? "{$slug}-{$count}" : $slug;
    }
}
