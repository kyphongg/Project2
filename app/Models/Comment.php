<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps =false;
    protected $fillable =[
        'comment_info','customer_id','created_at','game_id'
    ];
    protected $primaryKey ='comment_id';
    protected $table ='tbl_comment';
}
