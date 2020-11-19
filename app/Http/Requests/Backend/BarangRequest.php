<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class BarangRequest extends FormRequest
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
            'nama'     => ['required', 'string', 'min:3', 'max:255'],
            'lokasi'   => ['required', 'string', 'min:3', 'max:255'],
            'tanggal'  => ['required', 'date'],
            'deskripsi'=> ['required'],
            'warnah'   => ['required', 'string', 'min:4', 'max:50'],
            'merek'   => ['required', 'string', 'min:4', 'max:50'],
            'stasiun_id'         => ['required', 'mix:1'],
            'barang_kategori_id' => ['required', 'mix:1'],
        ];
    }
}
