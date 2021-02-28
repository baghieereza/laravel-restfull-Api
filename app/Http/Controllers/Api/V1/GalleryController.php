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

    /**
     * GalleryController constructor.
     *
     * @param \App\Repositories\Interfaces\Gallery $galleryInterface
     */
    public function __construct(GalleryInterface $galleryInterface)
    {
        $this->gallery = $galleryInterface;
    }

    /**
     * get all Galleries
     * @return array
     */
    public function All()
    {
        $data = $this->gallery->all();
        return response()->json(["success" => true, "data" => $data]);
    }

    /**
     *  store new Gallery
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function Store(Request $request)
    {
        //validation
        $rules = [
            'name' => 'required|unique:gallery',
            'owner_id' => 'required|exists:users,id',
        ];
        if (Helper::Validation($request, $rules) <> null) {
            return Helper::Validation($request, $rules);
        }

        // store
        $data = $this->gallery->store($request);

        //response
        return response()->json($data, 200);
    }

    /**
     * add picture to Gallery
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function addPicture(Request $request)
    {
        //validation
        $rules = [
            'name' => 'required',
            'gallery_id' => 'required|exists:gallery,id',
            "picture" => "required|mimes:jpeg,png,jpg,gif,svg|max:2000"
        ];
        if (Helper::Validation($request, $rules) <> null) {
            return Helper::Validation($request, $rules);
        }
        //add new
        $data = $this->gallery->addPicture($request);

        // response
        return response()->json($data, 200);
    }

    /**
     * add guest to Gallery
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function addGuest(Request $request)
    {
        //validation
        $rules = [
            'guest_id' => 'required|exists:users,id',
            'gallery_id' => 'required|exists:gallery,id',
        ];
        if (Helper::Validation($request, $rules) <> null) {
            return Helper::Validation($request, $rules);
        }

        //store new guest
        $result = $this->gallery->addGuest($request);

        //response
        return response()->json($result["data"], $result["status"]);
    }



}
