<?php

//namespace App;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Media extends Model
{
    use SoftDeletes;

    public $table = 'media';

    protected $dates = [
        'created_at',
        'updated_at',
     ];

    protected $fillable = [
        'updated_at',
        'created_at',
        'fileable_type',
        'fileable_id',
        'collection_name',
        'name',
        'file_name',
        'mime_type',
        'disk',
        'size',
        'manipulations',
        'custom_properties',
        'responsive_images',
        'order_column',
     ];

    public function fileable()
    {
        return $this->morphTo();
    }
    public function crecRegDoc()
    {
        return $this->belongsTo(CrecRegDoc::class, 'fileable_id');
    }


}