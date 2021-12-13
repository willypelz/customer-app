<?php

/************************************
 ** File: ApiResponse  file  ******
 ** Date: 12th December 2021  ************
 ** Api Response File  ************
 ** Author: Asefon pelumi M. *********
 ** Senior Software Developer ********
 * Email: pelumiasefon@gmail.com  ***
 * **********************************/

namespace App\Http\Library\RestFullResponse;

use Illuminate\Http\Request;
use Illuminate\Http\Response as IlluminateResponse;
use App\Http\Controllers\Controller;
use Response;


class ApiResponse extends Controller
{

    protected $statusCode = IlluminateResponse::HTTP_OK;

    /** status code getter
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /** status code setter
     * @param $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @param $data
     * @param array $headers
     * @return mixed
     */
    public function respond($data, $headers = [])
    {
        return Response::json($data, $this->getStatusCode(), $headers);
    }

    /**
     * @param $message
     * @return mixed
     */
    public function respondWithError($message)
    {
        return $this->respond([
            'error' => $message
        ]);

    }
    /**
     * @param $data
     * @param int $statusCode
     * @return mixed
     */
    public function respondWithDataStatusAndCodeOnly($data, $statusCode = IlluminateResponse::HTTP_OK)
    {
        return $this->setStatusCode($statusCode)->respond([
            'status_code' => $this->getStatusCode(),
            'status' => 'success',
            'data' => $data
        ]);
    }


    /**
     * @param $data
     * @param $details
     * @param int $statusCode
     * @return mixed
     */
    public function respondWithDataPagination($data, $details, $statusCode = IlluminateResponse::HTTP_OK)
    {
        return $this->setStatusCode($statusCode)->respond([
            'status_code' => $this->getStatusCode(),
            'status' => 'success',
            'data' => $data,
            'paginator' => [
                'total_count' => $details->total(),
                'total_pages' => ceil($details->total() / $details->perPage()),
                'current_page' => $details->currentPage(),
                'limit' => $details->Perpage(),
                'hasMorePages' => $details->hasMorePages(),
                'nextPageUrl' => $details->nextPageUrl(),
                'lastPage' => $details->lastPage(),
                'previousPageUrl' => $details->previousPageUrl(),
            ]
        ]);
    }

    /**
     * @param \Illuminate\Contracts\Validation\Validator $validator
     * @return array
     */
    function getErrorMessages(\Illuminate\Contracts\Validation\Validator $validator){
        $messages =  $validator->errors()->getMessages();
        $replaced = str_replace(['[',']', '"', '.','id'], '', json_encode(array_values($messages)));
        return explode(',',$replaced);
    }



}
