<?php

namespace App\Repositories\Interfaces;

/**
 * interface Gallery_picture
 *
 * @package \App\Repositories\Interfaces
 */
interface Gallery_picture
{

    /**
     * getting special gallery's picture
     *
     * @param $id
     *
     * @return mixed
     */
    public function get($id);

    /**
     * get all gallery's picture
     *
     * @return mixed
     */
    public function all();

    /**
     * store new gallery's picture
     *
     * @return mixed
     */
    public function store();

    /**
     * edit gallery's picture
     *
     * @return mixed
     */
    public function modify();

    /**
     * delete gallery's picture
     *
     * @return mixed
     */
    public function destroy();
}
