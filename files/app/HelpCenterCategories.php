<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelpCenterCategories extends Model
{
    protected $table = 'help_center_categories';
    protected $primaryKey = 'category_id';
    protected $fillable = [
        'category_id','category_name','category_slug','category_icon', 'status'
    ];
    public function helpcentercontent()
    {
        return $this->hasMany('App\HelpCenterContent');
    }
}
