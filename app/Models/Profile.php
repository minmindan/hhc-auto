<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $company_name
 * @property string $found
 * @property string $address
 * @property string $opening
 * @property string $phone
 * @property string $serve
 */
class Profile extends Model
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
    protected $fillable = ['created_at', 'updated_at', 'company_name', 'found', 'address', 'opening', 'phone', 'serve'];
}
