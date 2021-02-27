<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gallery
 *
 * @package \App\Models
 */
class Gallery_picture extends Model
{

    protected $table = "gallery_picture";

    protected $fillable = [
        "id", "name", "url", "gallery_id", "created_at", "updated_at"
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Gallery()
    {
        return $this->hasOne(Gallery::class, 'gallery_id', 'id');
    }
}
