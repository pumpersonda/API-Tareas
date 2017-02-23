<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 22/02/2017
 * Time: 09:43 AM
 */

namespace App\Http\Requests;
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
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
            'product_id'=>'required|exists:products,id',
            'critic_name'=>'required',
            'title'=>'required',
            'content'=>'required',
            'date'=>'required',
        ];
    }
}