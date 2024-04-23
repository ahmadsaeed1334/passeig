<?php

namespace App\Models;
class Message extends \Cmgmyr\Messenger\Models\Message
{
    protected $fillable = [
        'thread_id',
        'user_id',
        'body',
        'is',
    ];
//     public function user()
// {
//     return $this->belongsTo(User::class);
// }
}