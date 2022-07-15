<?php

namespace App\Http\Controllers\Api\Delivery;

use App\Actions\CalculateTaxAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Delivery\DeliveryCostRequest;
use App\Objects\Package\Package;
use Illuminate\Http\JsonResponse;

/**
 * Контроллер рассчета стоимости доставки, принимает название службы доставки и характеристики посылки
 */
class DeliveryCostController extends Controller
{
    public function __construct(private CalculateTaxAction $action)
    {
    }

    public function __invoke(DeliveryCostRequest $request): JsonResponse
    {
        return response()->json(['data' => $this->action->calculate(new Package($request->package))]);
    }
}
