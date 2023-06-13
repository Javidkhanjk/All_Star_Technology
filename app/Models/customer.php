<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Http\Controllers\auth\CustomerController;


class customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'customer_name',
        'customer_phone',
        'customer_email',
        'customer_city'

    ];



    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
