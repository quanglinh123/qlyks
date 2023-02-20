<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model ;

class Book extends Model
{
    use HasFactory;
    protected $table = 'tb_book';
    protected $primaryKey ='book_id';

    protected $fillable =['locate','room_type','room_member','room_date','room_time','room_date2'];
}
