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

    protected $table = "gallery";
    protected $fillable = [
        "id", "name", "owner_id", "created_at", "updated_at"
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function owner()
    {
        return $this->hasOne(User::class, 'owner_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function guests()
    {
        return $this->hasMany(Gallery_guest::class, 'gallery_id', "id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pictures()
    {
        return $this->hasMany(Gallery_picture::class, "gallery_id", "id");
    }
}
