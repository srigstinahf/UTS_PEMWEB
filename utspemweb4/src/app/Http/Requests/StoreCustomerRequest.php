<?php

namespace App\Http\Requests;

use App\Models\Customer;
use Gate;
use Illuminate\Http\Response;
use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return Gate::allows('customer_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'address' => [
                'string',
                'required',
            ],
            'city' => [
                'string',
                'required',
            ],

            [
                'phone' => [
                    'string',
                    'required',
                ]
            ],

            [
                'email' => [
                    'string',
                    'required',
                ]
            ]

        ];
    }
}
