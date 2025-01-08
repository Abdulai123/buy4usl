<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Notification;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'shein_url' => 'required|url',
            'price_from_shein' => 'required|numeric',
            'price_in_nle' => 'required|numeric',
            'delivery_type' => 'required|in:free,paid',
            'delivery_cost' => 'nullable|numeric',
            'address' => 'required|string',
            'product_images' => 'nullable|array', // Ensure product_images is an array
            'product_images.*' => 'image|mimes:jpeg,png,jpg|max:2048', // Validate individual images
        ]);

        // Process uploaded images
        $images = [];
        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $file) {
                $uniqueName = Str::uuid() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('uploads', $uniqueName, 'public'); // Store the file in the "public/uploads" directory
                $images[] = $uniqueName; // Collect the file name
            }
        }

        // Create a new order
        $order = Order::create([
            'ref' => Str::uuid(),
            'user_id' => auth()->id(),
            'shein_url' => $validatedData['shein_url'],
            'price_from_shein' => $validatedData['price_from_shein'],
            'price_in_nle' => $validatedData['price_in_nle'],
            'total_cost' => $validatedData['price_in_nle'] + ($validatedData['delivery_cost'] ?? 0),
            'delivery_type' => $validatedData['delivery_type'],
            'delivery_cost' => $validatedData['delivery_cost'],
            'status' => 'pending',
            'address' => $validatedData['address'],
            'product_images' => json_encode($images), // Save as JSON
        ]);

        // Trigger order created notification if successful
        if ($order) {
            Notification::orderCreated(auth()->id(), $order->id);
        }

        return redirect()->back()->with('success', 'Order created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
