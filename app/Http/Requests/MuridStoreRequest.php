<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MuridStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nis'           => 'required|integer',
            'nama'          => 'required|string|max:255',
            'rombel'        => 'required|string|max:255',
            'rayon'         => 'required|string|max:255',
            'alamat'        => 'required|string',
            'no_telp'       => 'required|string|max:20',
            'jenis_kelamin' => 'required|boolean',
        ];
    }
}