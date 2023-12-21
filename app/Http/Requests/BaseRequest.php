<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class BaseRequest extends FormRequest
{
    /**
     * Handle a failed validation
     *
     * @param Validator $validator
     *
     * @return mixed
     * @throws ValidationException
     */
    protected function failedValidation(Validator $validator): mixed
    {
        throw new ValidationException(
            $validator,
            response()->json([
                'message' => 'Validation failed',
                'errors'  => $validator->errors(),
            ], 422)
        );
    }
}
