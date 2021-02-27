<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gallery
 *
 * @package \App\Models
 */
class Gallery_guest extends Model
{

    protected $table = "gallery_guest";
    protected $fillable = [
        "id", "guest_id", "gallery_id", "created_at", "updated_at"
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function User()
    {
        return $this->hasOne(User::class , 'guest_id' , 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Gallery()
    {
        return $this->hasOne(Gallery::class , 'gallery_id' , 'id');
    }

}
