<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelpCenterContent extends Model
{
    protected $table = 'help_center_content';
    protected $fillable = [
        'id','title','slug','content','category_id', 'status'
    ];
    public function helpcentercategory()
    {
        return $this->belongsTo('App\HelpCenterCategories','category_id');
    }
}
