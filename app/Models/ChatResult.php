<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatResult extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'message'];

    // Define any relationships if necessary, for example:
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function InsertChatData($user_id,$data){
        self::create([
            'user_id' => $user_id,
            'message' => $data,
        ]);
    }
}
