<?php

namespace App\Http\Requests\Api\Delivery;

use App\Services\DeliveryServices\DeliveryService;
use App\Services\Enums\DeliveryServices;
use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\Types\AggregatedType;

class DeliveryCostRequest extends FormRequest
{
    private const DELIVERY_SERVICES = [
        'dhl',
        'russian_post',
    ]
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    public function getService(): DeliveryService
    {
        if (in_array($this->get('service'), self::DELIVERY_SERVICES)) {
            return DeliveryServices::from($this->get('service'));
        }
    }
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'service' => ['required', 'string'],
            'weight' => ['required', 'int'],
        ];
    }
}
