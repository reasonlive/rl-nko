<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class OrderController extends Controller
{

    public function view()
    {
        $all_orders = Order::get();
        
        return View::make('pages.admin', ['showOrders' => true, 'orders' => $all_orders->toArray()]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $req
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        if($req->isMethod('post'))
        {
            $input = $req->all();

            //set 0 if girl or 1 if boy
            if(isset($input['child_m']) || isset($input['child_w']))
            {
                $child_sex = isset($input['child_m']) ? 1 : 0;
            }

            //set 0 if woman or 1 if man
            if(isset($input['parent_m']) || isset($input['parent_w']))
            {
                $parent_sex = isset($input['parent_m']) ? 1 : 0;
            }


            if($input['child_name'] && $input['child_age']
                && $input['phone']
                && $input['issue'])
            {

                $fields = array(
                    'parent_name' => $input['parent_name'] ?? '',
                    'parent_age' => $input['parent_age'] ?? null,
                    'parent_sex' => $parent_sex ?? null,
                    'child_sex' => $child_sex ?? null,
                    'child_name' => $input['child_name'],
                    'child_age' => $input['child_age'],
                    'phone' => $input['phone'],
                    'issue' => $input['issue'],
                    'email' => $input['email'] ?? '[неизвестно]'
                );

                $order = Order::create($fields);

                return redirect('/')->with('success', 'this is success');

            }
            else{
                return redirect('/')->with('failure', 'this is bad bad thing');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
