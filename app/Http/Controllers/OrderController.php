<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Notification;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = auth()->user()->orders; // Assumes a relationship is set up between User and Order

        return view('orders', compact('orders'));
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
        DB::beginTransaction(); // Start a transaction for database consistency
    
        try {
            $validatedData = $request->validate([
                'shein_url' => 'required|url',
                'price_from_shein' => 'required|numeric',
                'price_in_nle' => 'required|numeric',
                'delivery_type' => 'required|in:free,paid',
                'delivery_cost' => 'nullable|numeric',
                'address' => 'required|string',
                'product_images' => 'nullable|array',
                'product_images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
    
            $images = [];
            if ($request->hasFile('product_images')) {
                foreach ($request->file('product_images') as $file) {
                    $uniqueName = Str::uuid() . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('uploads', $uniqueName, 'public'); // Save to storage/app/public/uploads
    
                    if ($filePath) {
                        $images[] = $uniqueName;
                    } else {
                        // Cleanup already uploaded files on failure
                        foreach ($images as $uploadedFile) {
                            Storage::disk('public')->delete('uploads/' . $uploadedFile);
                        }
                        return redirect()->back()->withErrors(['product_images' => 'Failed to upload one or more images.']);
                    }
                }
            }
    
            // Create the order in the database
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
                'product_images' => json_encode($images), // Save image data as JSON
            ]);
    
            // Trigger notification (you might want to customize this)
            if ($order) {
                Notification::orderCreated(auth()->id(), $order->id);
            }
    
            DB::commit(); // Commit the transaction
            return redirect()->back()->with('success', 'Order created successfully!');
        } catch (\Exception $e) {
            DB::rollBack(); // Roll back the transaction on failure
    
            // Cleanup any uploaded files
            foreach ($images as $uploadedFile) {
                Storage::disk('public')->delete('uploads/' . $uploadedFile);
            }
    
            return redirect()->back()->withErrors(['error' => 'Something went wrong: ' . $e->getMessage()]);
        }
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
