<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
            'name' => 'max:50|required',
            'gender' => 'required',
            'nis' => 'unique:students|max:7|required',
            'class_id' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nama',
            'gender' => 'Gender',
            'nis' => 'NIS',
            'class_id' => 'kelas',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama wajib diisi',
            'gender.required' => 'Gender wajib diisi',
            'nis.required' => 'NIS wajib diisi',
            'nis.max' => 'NIS melebihi :max karakter',
            'nis.unique' => 'NIS sudah digunakan',
            'class_id.required' => 'Kelas wajib diisi',
        ];
    }
}
