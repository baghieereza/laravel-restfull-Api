<?php

namespace App\Repositories\Interfaces;

/**
 * Class User
 *
 * @package \App\Repositories\Interfaces
 */
interface  User
{
    /**
     * getting special user
     *
     * @param $id
     *
     * @return mixed
     */
    public function get($id);

    /**
     * get all users
     *
     * @return mixed
     */
    public function all();

    /**
     * store new user
     *
     * @return mixed
     */
    public function store($request);

    /**
     * edit user
     *
     * @return mixed
     */
    public function modify();

    /**
     * delete user
     *
     * @return mixed
     */
    public function destroy();


 }
