<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gallery
 *
 * @package \App\Models
 */
class Gallery extends Model
{

    protected $fillable = [
        "id", "name", "owner_id", "created_at", "updated_at"
    ];

    public function user()
    {
        return $this->hasOne(User::class , 'owner_id' , 'id');
    }
}
