<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Helper;
use App\Repositories\Interfaces\Gallery as GalleryInterface;
use App\Repositories\Interfaces\User;
use Illuminate\Http\Request;

/**
 * Class UserController
 *
 * @package \App\Http\Controllers\Api\V1
 */
class GalleryController
{
    public $gallery;

    public function __construct(GalleryInterface $galleryInterface)
    {
        $this->gallery = $galleryInterface;
    }


    public function All()
    {
        $data = $this->gallery->all();
        return ["success" => true, "data" => $data];
    }

    public function Store(Request $request)
    {
        // validation
        $data = $this->gallery->store($request);
        return ["success" => $data["flag"], "data" => $this->gallery->get($data["last_id"])];
    }

    public function addPicture(Request $request)
    {
        //validation
        $data = $this->gallery->addPicture();
        return ["success" => $data["flag"], "data" => $this->gallery->get($data["last_id"])];
    }

    public function addGuest(Request $request)
    {
        //validation
        $data = $this->gallery->addGuest();
        return ["success" => $data["flag"], "data" => $this->gallery->get($data["last_id"])];
    }

    public function removePicture(Request $request)
    {

    }

    public function removeGuest(Request $request)
    {

    }

}
