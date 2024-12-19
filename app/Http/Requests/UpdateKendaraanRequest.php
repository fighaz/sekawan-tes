<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKendaraanRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'nama' => 'required',
            'noplat' => 'required',
            'jenis_kendaraan' => 'required',
            'status_servis' => 'required',
            'pemakaian_bbm' => 'required',
            'status_milik' => 'required',
            'tanggal_masuk' => 'required|date'
        ];
    }
}
