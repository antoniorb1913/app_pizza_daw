<?php

namespace App\Services;

use App\Enums\OrderStatus;
use App\Exceptions\NotFoundDeliveryException;
use App\Models\Delivery;
use App\Models\Order;
use App\Models\Pizza;
use Illuminate\Http\Response;

class PizzaService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAllPizza(){
        return Pizza::orderBy('price','ASC')->get();
    }

    public function createOrder($values){
        //validacion
        $this->existDelivery($values['delivery_id']);

        //Inserto un nuevo pedido
        $order = new Order();
        
        //Lo relleno con los valores de la petición
        $order->fill($values);
        $order->status = OrderStatus::CREATED;
        
        //Insertamos el registro
        $order->save();
        return $order;
    }

    private function existDelivery($delivery_id){
        $delivery = Delivery::find($delivery_id);
        if(empty($delivery)){
            throw new NotFoundDeliveryException
                ("No existe un id delivery {$delivery_id}",Response::HTTP_NOT_FOUND);
        }
    }
}
