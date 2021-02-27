<?php

namespace App\Repositories\Interfaces;

/**
 * interface Gallery
 *
 * @package \App\Repositories\Interfaces
 */
interface  Gallery
{

    /**
     * getting special gallery
     *
     * @param $id
     *
     * @return mixed
     */
    public function get($id);

    /**
     * get all gallery
     *
     * @return mixed
     */
    public function all();

    /**
     * store new gallery
     *
     * @param $request
     *
     * @return mixed
     */
    public function store($request);

    /**
     * edit gallery
     *
     * @return mixed
     */
    public function modify();

    /**
     * delete gallery
     *
     * @return mixed
     */
    public function destroy();

}
