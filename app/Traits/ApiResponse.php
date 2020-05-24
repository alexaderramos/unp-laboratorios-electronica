<?php
namespace App\Traits;


trait ApiResponse{
    /**
     * @param $data
     * @param int $code
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function successResponse($data, $code = 200, $message = ""){
        return response()->json(array(
            'data'      => $data,
            'code'      => $code,
            'message'   => $message
        ),$code);
    }
}
