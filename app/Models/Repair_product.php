<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Equipment_img;
use App\Models\Components_img;
use App\Models\Consumables_img;
use App\Models\Repair_img;
use App\Models\Software_img;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $product_name
 * @property string $primary_img
 * @property string $model
 * @property string $primary
 * @property string $weights
 * @property string $standard
 * @property string $feature
 * @property string $illustrate
 */
class Repair_product extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'product_name', 'primary_img', 'model', 'primary', 'weights', 'standard', 'feature', 'illustrate'];
    public function imgs(){

        return $this->hasMany(Repair_img::class,'iid','id');

    }
}
