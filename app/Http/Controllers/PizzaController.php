<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Requests\CreateOrderRequest;
use App\Services\PizzaService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PizzaController extends Controller
{
    protected $pizzaService;

    public function __construct(PizzaService $pizzaService)
    {
        $this->pizzaService =  $pizzaService;
    }

    public function getAllPizza(){
      return ApiResponse::success($this->pizzaService->getAllPizza(),"Operación finalizada");
    }

    public function createOrder(CreateOrderRequest $request){
        $values = $request->all();
        $order = $this->pizzaService->createOrder($values);
    return ApiResponse::success($order,'Order created',Response::HTTP_CREATED);
    }
}
