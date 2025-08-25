<?php
namespace App\Http\Controllers;

use App\Models\WhatsAppOrder;
use Illuminate\Http\Request;

class WhatsAppOrderController extends Controller
{
    // Store order from frontend
    public function store(Request $request)
    {
        $request->validate([
            'product_id'     => 'nullable|exists:products,id',
            'customer_name'  => 'nullable|string|max:255',
            'customer_phone' => 'required|string|max:20',
            'message'        => 'nullable|string',
            'channel'        => 'nullable|in:whatsapp',
            'status'         => 'nullable|in:new,contacted,converted,closed',
        ]);

        WhatsAppOrder::create([
            'product_id'     => $request->product_id,
            'customer_name'  => $request->customer_name,
            'customer_phone' => $request->customer_phone,
            'message'        => $request->message,
            'channel'        => 'whatsapp',
            'status'         => 'pending',
        ]);

        return back()->with('success', 'WhatsApp Order saved! Our team will contact you shortly.');
    }

    // Admin list view
    public function index()
    {
        $orders = WhatsAppOrder::with('product')->latest()->get();
        return view('backend.whatsapp_orders.index', compact('orders'));
    }

    // Admin update status
    public function update(Request $request, $id)
    {
        $order = WhatsAppOrder::findOrFail($id);

        $request->validate([
            'status' => 'required|in:new,contacted,converted,closed',
        ]);

        $order->update([
            'status' => $request->status,
        ]);

        return back()->with('success', 'Order status updated successfully.');
    }
}
