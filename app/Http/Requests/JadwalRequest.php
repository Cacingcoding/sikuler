<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JadwalRequest extends FormRequest
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
            'jurusan_id' => 'required|integer',
            'kelas_id' => 'required|integer',
            'mapel_id' => 'required|integer',
            'user_id' => 'required|integer',
            'hari' => 'required|max:255',
            'waktumulai' => 'required|date_format:H:i',
            'waktuselesai' => 'required|date_format:H:i|after:waktumulai',
        ];
    }
}
