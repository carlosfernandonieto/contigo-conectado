<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class ReadLater extends Model
{
    protected $table = "read_later";
    protected $primaryKey = 'read_later_id';
    public $timestamps = false;
    protected $fillable = [
    	'read_later_id',
    	'user_id',
    	'post_id'
    ];
}