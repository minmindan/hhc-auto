<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $type
 * @property string $company
 * @property string $title
 * @property string $name
 * @property string $phone
 * @property string $address
 * @property string $demand
 * @property string $state
 * @property string $img_path
 */
class Report extends Model
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
    protected $fillable = ['created_at', 'updated_at', 'type', 'company', 'title', 'name', 'phone', 'address', 'demand', 'state', 'img_path'];
}
