<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class ApiController extends BaseController{

  /**
   * forms a success JSON response with given data and message.
   * @param  array of data to be attached to response.
   * @param  array list of headers
   * @return JSON response.
   */
  public function responseSuccess($data = [])
  {
    return $this->_respond([
        'status'      => true,
        'status_code' => 200,
        'result'      => $data
      ]);
  }

  /**
   * forms a error JSON response with given message.
   * @param  string error message
   * @param  array list of headers
   * @return JSON response.
   */
  public function responseError($code, $message)
  {
    return $this->_respond([
        'status'      => false,
        'status_code' => $code,
        'error'       => $message
      ]);
  }

  /**
   * composes a JSON response with data, status code and headers.
   * @param  array list of data to be attached to request.
   * @param  array list of headers to be attached to response header.
   * @return JSON response.
   */
  private function _respond($data)
  {
    return response()->json($data);
  }

}
