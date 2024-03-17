<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    protected $table = "notes";
    protected $fillable = [
        'title',
        'description',
        'deadline',
        'done',
    ];
    protected $guarded =[
        'id',
        'created_at',
        'updated_at',
    ];
    protected $cast = [
        "deadline" => "date"
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
