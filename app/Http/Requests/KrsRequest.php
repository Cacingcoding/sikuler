<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KrsRequest extends FormRequest
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
            'tahunakademik_id' => 'required|integer',
            'user_id' => 'required|integer',
            'jadwal_id' => 'required|integer',
        ];
    }
}
