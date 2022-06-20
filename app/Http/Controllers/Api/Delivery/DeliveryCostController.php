<?php

namespace App\Http\Controllers\Api\Delivery;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Delivery\DeliveryCostRequest;
use App\Objects\Package\Package;
use App\Services\Enums\DeliveryServices;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Контроллер рассчета стоимости доставки, принимает название службы доставки и характеристики посылки
 */
class DeliveryCostController extends Controller
{
    public function __invoke(DeliveryCostRequest $request)
    {
        $service = DeliveryServices::tryFrom($request->service)?->getService(new Package($request->all()));

        if (!$service) {
            throw new NotFoundHttpException('Service not found');
        }

        return response()->json(['data' => ['delivery_service' => $service->name(), 'delivery_cost' => $service->cost()]]);
    }
}
