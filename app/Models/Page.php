<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'home_title',
        'home_subtitle',
        'home_pic',
        'home_bc_pic',
        'about_title',
        'about_substitle',
        'about_pic',
        'brand_title',
        'brand_subtitle',
        'brand_pic',
        'brand_mid_title',
        'brand_footer_title',
        'brand_footer_subtitle',
        'brand_footer_pic',
        'work_title',
        'voucher_title',
        'contact_title',
        'contact_location',
        'contact_mail',
        'footer_name',
    ];
}
