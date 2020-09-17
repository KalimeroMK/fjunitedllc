<?php

namespace App\Http\Requests\Email;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed title
 * @property mixed parent_id
 */
class Send extends FormRequest
{
//    use CanAuthorise;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'last_name' => 'required',
            'message' => 'required',
        ];
    }
}
