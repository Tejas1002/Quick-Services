<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';

    protected $fillable = [
        'order_id',
        'rating',
        'name',
        'comment',
        'user_id'
    ];

    protected $dates = ['created_at', 'updated_at'];

    // app/Models/Feedback.php

protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
];

    public function user()
{
    return $this->belongsTo(User::class);
}
}

