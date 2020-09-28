<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Controllers\BooksControllers;
class Book extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'bookTitle','author'
    ];   
    protected $datas=['deleted_at'];
    use HasFactory;
}
