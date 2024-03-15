<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'email', 'message', 'is_urgent', 'created_at', 'updated_at', 'first_name', 'last_name'];
}
