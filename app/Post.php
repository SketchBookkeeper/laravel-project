<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body, $user_id)
    {
        $this->comments()->create([
            'body' => $body,
            'user_id' => $user_id
        ]);
        // Or we could use compact() to combine 'body' to the $body
    }

    public function scopeFilter($query, $filters)
    {
        if (array_key_exists('month', $filters) && $month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if (array_key_exists('year', $filters) && $year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }
    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at)')
            ->get()
            ->toArray();
    }
}
