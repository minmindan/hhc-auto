<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $com
 * @property string $com_img
 * @property string $weights
 */
class company extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'companys';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'com', 'com_img', 'weights'];
}
