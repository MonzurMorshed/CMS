<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Systemsetting extends Model
{
    public $table = 'system_settings';
    public $fillable = ['site_name','phone','email','address','logo_file','favicon_file','footer_file','footer_text'];
    public $nullable = ['social_link_fb','social_link_twitter','social_link_pinterest','social_link_google'];
    public $timestamp = false;
}
