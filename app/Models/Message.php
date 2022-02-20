<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
   // use HasFactory;
     use SoftDeletes;
    use HasFactory;

    public $table = 'messages';
 
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'code',
        'body_message',
        'title_message',
        'service_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
        public function comService()
    {
        return $this->belongsTo(ComService::class);
    }

    
    
}
