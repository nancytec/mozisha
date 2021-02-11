<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogUpdateRequest extends FormRequest
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
            'title'              => 'required|max:255',
            'image'              => 'nullable|image|max:3000',
            'category'           => 'required|max:255',
            'content'            => 'required|max:6000',
            'continue_1'         => 'nullable|max:4000',
            'continue_image_1'   => 'nullable|image|max:3000',
            'continue_2'         => 'nullable|max:4000',
            'continue_image_2'   => 'nullable|image|max:3000',
            'continue_3'         => 'nullable|max:4000',
            'continue_image_3'   => 'nullable|image|max:3000',
            'quote'              => 'nullable|max:1000',
            'quote_by'           => 'nullable|max:255',
            'status'             => 'required|max:255',
        ];
    }
}
