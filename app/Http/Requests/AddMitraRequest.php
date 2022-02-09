<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddMitraRequest extends FormRequest
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
            // 'name' => 'required',
            // 'last_name' => 'required',
            // 'email' => 'required|email|unique:users',
            // 'password' => 'required|min:8',
            'nama_lengkap',
            'jenis_kelamin',
            'nik',
            'tempat_lahir',
            'tanggal_lahir',
            'umur',
            'status_perkawinan',
            'domisili',
            'kelurahan',
            'pendidikan',
            'nowa',
            'email',
            'pekerjaan',
            'motor',
            'hp',
            'zoom',
            'spek_hp',
            'pas_foto',
            'ktp',
        ];
    }
}
