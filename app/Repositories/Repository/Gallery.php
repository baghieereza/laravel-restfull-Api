<?php

namespace App\Repositories\Repository;

use App\Http\Helper;
use App\Models\Gallery_guest;
use App\Models\Gallery_picture;
use \App\Repositories\Interfaces\Gallery as GalleryInterface;

/**
 * Class Gallery
 *
 * @package \App\Repositories
 */
class Gallery implements GalleryInterface
{

    /**
     * getting special gallery
     *
     * @param $id
     *
     * @return mixed
     */
    public function get($id)
    {
        // TODO: Implement get() method.
    }

    /**
     * get all gallery
     *
     * @return mixed
     */
    public function all()
    {
        return \App\Models\Gallery::with(["guests", "pictures"])->get();
    }

    /**
     * store new gallery
     *
     * @return mixed
     */
    public function store($request)
    {
        \App\Models\Gallery::create([
            'name' => $request->name,
            "owner_id" => $request->owner_id
        ]);

        return ["success" => true, "data" => \App\Models\Gallery::with("guests", ["pictures"])->get()];
    }

    /**
     * edit gallery
     *
     * @return mixed
     */
    public function modify()
    {
        // TODO: Implement modify() method.
    }

    /**
     * delete gallery
     *
     * @return mixed
     */
    public function destroy()
    {
        // TODO: Implement destroy() method.
    }

    /**
     * add new guest
     *
     * @param $request
     *
     * @return mixed
     */
    public function addGuest($request)
    {
        $guest = Gallery_guest::where("guest_id", $request->guest_id)->where("gallery_id", $request->gallery_id)->first();
        if ($guest)
            return ["data" => ["success" => false, "data" => ["guest_id" => "this guest already exist"]], "status" => 400];
        Gallery_guest::create([
            "guest_id" => $request->guest_id,
            "gallery_id" => $request->gallery_id
        ]);

        return ["data" => ["success" => true, "data" => \App\Models\Gallery::with(["guests", "pictures"])->get()], "status" => 200];
    }

    /**
     * add new picture
     *
     * @param $request
     *
     * @return mixed
     */
    public function addPicture($request)
    {
        $picUrl = Helper::Upload($request, "picture", "uploads/gallery");
        Gallery_picture::create([
            "name" => $request->name,
            "gallery_id" => $request->gallery_id,
            "url" => $picUrl
        ]);
        return ["success" => true, "data" => \App\Models\Gallery::with(["guests", "pictures"])->get()];

    }


    public function removeGuest($request)
    {

    }


    public function removePicture($request)
    {

    }
}
