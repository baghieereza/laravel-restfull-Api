<?php

namespace App\Repositories\Repository;

use App\Http\Helper;
use App\Repositories\Interfaces\User as UserInterface;
use \App\Models\User as UserModel;

/**
 * Class userRepository
 *
 * @package \App\Repositories
 */
class User implements UserInterface
{

    /**
     * getting special user
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
     * get all users
     *
     * @return mixed
     */
    public function all()
    {
        return UserModel::all();
    }

    /**
     * store new user
     *
     * @return mixed
     */
    public function store($request)
    {
        $avatarUrl = Helper::Upload($request, "avatar", public_path("uploads/avatar"));
        UserModel::create([
            "name" => $request->name,
            "family" => $request->family,
            "avatar" => $avatarUrl,
        ]);
        return ["success" => true, "data" => UserModel::with("gallery")->get()];
    }

    /**
     * edit user
     *
     * @return mixed
     */
    public function modify()
    {
        // TODO: Implement modify() method.
    }

    /**
     * delete user
     *
     * @return mixed
     */
    public function destroy()
    {
        // TODO: Implement destroy() method.
    }


    public function changeAvatar($request)
    {
        // upload new photo
        $avatarUrl = Helper::Upload($request, "avatar", public_path("uploads/avatar"));

        //get and delete old photo
        $user = \App\Models\User::find($request->user_id);
        Helper::DeleteFile($user->avatar);

        //save new thing
        $user->avatar = $avatarUrl;
        $user->save();

        //response
        return ["success" => true, "data" => UserModel::with(["gallery.guests", "gallery.pictures"])->get()];
    }
}
