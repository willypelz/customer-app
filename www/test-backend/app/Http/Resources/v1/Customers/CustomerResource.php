<?php

/************************************
 ** File: Customer Resource file  ******
 ** Date: 12th December 2021  ************
 ** Customer Resource file  ************
 ** Author: Asefon pelumi M. *********
 ** Senior Software Developer ********
 * Email: pelumiasefon@gmail.com  ***
 * **********************************/


namespace App\Http\Resources\v1\Customers;

use App\Http\Resources\v1\Transformer;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends Transformer
{
    /**
     * Transform the resource into an array.
     *
     * @param $data
     * @return array
     */
    public function transform($data)
    {
        if (is_array($data)) $data = (object)$data;

        $response_data = [
            'first_name' => $data->first_name,
            'last_name' => $data->last_name,
            'email' =>   $data->email ,
            'gender' => $data->gender,
            'company' => $data->company,
            'city' => $data->city,
            'longitude' => $data->longitude,
            'latitude' => $data->latitude,
            'title' => $data->title
        ];

        if (isset($data->hide_id) && $data->hide_id) {
            return $response_data;
        } else {
            $data_ = ['id' => $data->id];
            return array_merge($data_, $response_data);

        }
    }

    /**
     * @param $data
     * @return array
     */
    public function formatToArray($data)
    {
        return array_filter(explode(',', $data));
    }
}
