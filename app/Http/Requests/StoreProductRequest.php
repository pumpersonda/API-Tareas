<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 22/02/2017
 * Time: 09:01 AM
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'seller_id'=>'required|exists:sellers,id',
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',



        ];
    }
}