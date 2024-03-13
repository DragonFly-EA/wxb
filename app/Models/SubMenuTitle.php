<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenuTitle extends Model
{
    use HasFactory;
    public function sub_menus()
    {
        return $this->hasMany(Submenu::class);
    }
}
