<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Livre;

class Category extends Model
{
	use HasFactory;
	 protected $fillable = ["name","description"];

        public function livres(){
                return $this->hasMany(Livre::class);
        }
}
