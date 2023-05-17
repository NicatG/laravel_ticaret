<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table='category'; // table adinin sonuna "s elave etmeyende bu formada table adini yazmaq lazimdir"
    //protected $fillable=['category_name'];create ile data insert edende qorunan fieldlari aciq elan edir 
    // const update_at='yenilenme tarixi' bazada az-tr dilinde field adi yazanda onu laravel ucun tanitmaq lazim olanda istifadeedirik
    protected $guarded=[]; // bazaya hansisa fielda melumat yazdirmaq istemeyende ve ya qorunaya almaq isteyende
    
    
    
    public function products()
    {
        return $this->belongsToMany(Product::class,'products_category')->withPivot('category_id','product_id');
    }


}
