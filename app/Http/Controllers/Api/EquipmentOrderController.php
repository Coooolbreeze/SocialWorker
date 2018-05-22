<?php
/**
 * Created by PhpStorm.
 * User: 392113643
 * Date: 2018/5/22
 * Time: 17:43
 */

namespace App\Http\Controllers\Api;


use App\Models\EquipmentOrder;
use Illuminate\Http\Request;

class EquipmentOrderController extends ApiController
{
    public function store(Request $request)
    {
        return EquipmentOrder::generate($request->post('ids'));
    }
}