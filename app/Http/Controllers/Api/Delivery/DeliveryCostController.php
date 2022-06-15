<?php

namespace App\Http\Controllers\Api\Delivery;

use App\Actions\CalculateDeliveryCostAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Delivery\DeliveryCostRequest;
use App\Objects\Package\Package;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DeliveryCostController extends Controller
{
    public function __construct(private CalculateDeliveryCostAction $costAction)
    {
    }

    public function __invoke(DeliveryCostRequest $request)
    {
        $service = $request->getService();
        if (!$service) {
            throw new NotFoundHttpException('Service not found');
        }
        $package = new Package();
        $package->create($request->all());

        $cost = $this->costAction->calculate($service, $package);

        return response()->json(['data' => ['delivery_service' => $service->getName(), 'delivery_cost' => $cost]]);
    }
}
