<?php

namespace App\Http\Requests\Api\Delivery;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $service
 * @property array $package
 */
class DeliveryCostRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'service' => ['required', 'string'],
            'package' => ['required','array'],
            'package.weight' => ['required', 'numeric', 'gt:0'],
        ];
    }
}
