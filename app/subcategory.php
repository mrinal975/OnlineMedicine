<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    protected $fillable=['subcategoryName','subcategoryDescriptoin','publication_status'];
}
