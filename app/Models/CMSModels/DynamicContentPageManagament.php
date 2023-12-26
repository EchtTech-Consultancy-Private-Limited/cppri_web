<?php

namespace App\Models\CMSModels;
use Laravel\Scout\Searchable;
use App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DynamicContentPageManagament extends Model
{
    
    protected $table = 'dynamic_page_content';
    protected $primaryKey = 'uid'; 
    use Searchable;
    use HasFactory;
}
