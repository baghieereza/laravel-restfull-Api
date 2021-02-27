<?php

namespace App\Http;

/**
 * Class Helper
 *
 * @package \App\Http
 */
class Helper
{


    /**
     * @param $request
     * @param $fileName
     * @param $path
     *
     * @return string
     */
    public static function Upload($request, $fileName, $path)
    {
        $file = $request->file($fileName); // will get all files
        $file_name = date('mdYHis') . $file->getClientOriginalName(); //Get file original name
        $file->move($path, $file_name); // move files to destination folder
        return $path . "/" . $file_name;
    }


    /**
     * @param $request
     * @param $rules
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public static function Validation($request, $rules)
    {
        $validated = Validator::make($request->all(), $rules);
        if ($validated->fails()) {
            return response()->json(['success' => false, 'data' => $validated->errors()], 400);
        }
    }
}
