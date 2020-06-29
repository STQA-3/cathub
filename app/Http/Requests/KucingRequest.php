<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KucingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
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
            'jenis_kucing' => 'required|max:255',
            'jenis_kelamin' => 'required|max:255',
            'deskripsi' => 'required',
            'is_adopted' => 'boolean',
            'is_approved' => 'boolean',
        ];
    }
}
