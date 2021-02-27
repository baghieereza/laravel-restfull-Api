<?php

namespace App\Repositories\Interfaces;

/**
 * interface Gallery_guest
 *
 * @package \App\Repositories\Interfaces
 */
interface Gallery_guest
{

    /**
     * getting special gallery's guest
     *
     * @param $id
     *
     * @return mixed
     */
    public function get($id);

    /**
     * get all gallery's guests
     *
     * @return mixed
     */
    public function all();

    /**
     * store new gallery's guest
     *
     * @return mixed
     */
    public function store();

    /**
     * edit gallery's guests
     *
     * @return mixed
     */
    public function modify();

    /**
     * delete gallery's guest
     *
     * @return mixed
     */
    public function destroy();

}
