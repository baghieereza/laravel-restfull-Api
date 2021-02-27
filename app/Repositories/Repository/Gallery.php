<?php

namespace App\Repositories;

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
        // TODO: Implement all() method.
    }

    /**
     * store new gallery
     *
     * @return mixed
     */
    public function store()
    {
        // TODO: Implement store() method.
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
     * @return mixed
     */
    public function addGuest()
    {
        // TODO: Implement addGuest() method.
    }

    /**
     * add new picture
     *
     * @return mixed
     */
    public function addPicture()
    {
        // TODO: Implement addPicture() method.
    }


    public function removeGuest($request)
    {

    }


    public function removePicture($request)
    {

    }
}
