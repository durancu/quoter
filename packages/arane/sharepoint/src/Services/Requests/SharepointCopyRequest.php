<?php

namespace Arane\Sharepoint\Services\Requests;

use App\Http\Requests\BaseFormRequest;


class SharepointCopyRequest extends BaseFormRequest {
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
            'virtual_path' => 'max:255'
        ];
    }
}
