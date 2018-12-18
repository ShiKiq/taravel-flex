<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Tour extends Model
{
    protected $table = 'tour';
    protected $guarded = array('id');
    public $timestamps = false;
}