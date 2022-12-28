<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['name','parent_id','number','subName'];

    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }
}
