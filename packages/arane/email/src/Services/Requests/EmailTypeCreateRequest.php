<?php

namespace Arane\Email\Services\Requests;

use App\Http\Requests\BaseFormRequest;


class EmailTypeCreateRequest extends BaseFormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            //
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'slug' => 'required|max:255'
        ];
    }
}
