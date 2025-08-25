@extends('backend.layouts.master')

@section('main-content')
<div class="card">
    <h5 class="card-header">WhatsApp Orders</h5>
    <div class="card-body">
        @include('backend.layouts.notification')

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Customer</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Admin Notes</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $order->product->title ?? 'N/A' }}</td>
                    <td>{{ $order->customer_name }}</td>
                    <td>{{ $order->customer_phone }}</td>
                    <td>{{ $order->message }}</td>
                    <td>{{ ucfirst($order->status) }}</td>
                    <td>{{ $order->admin_notes }}</td>
                    <td><!--
                        <form action="{{ route('admin.whatsapp.orders.update', $order->id) }}" method="POST">
                            @csrf @method('PATCH')
                            <select name="status">
                                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="processed" {{ $order->status == 'processed' ? 'selected' : '' }}>Processed</option>
                            </select>
                            <input type="text" name="admin_notes" placeholder="Notes" value="{{ $order->admin_notes }}">
                            <button type="submit">Update</button>
                        </form> -->
                        <form method="POST" action="{{ route('admin.whatsapp.orders.update', $order->id) }}">
                            @csrf
                            @method('PATCH')
                            <select name="status">
                                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="processed" {{ $order->status == 'processed' ? 'selected' : '' }}>Processed</option>
                            </select>
                            <button type="submit" class="btn btn-primary btn-sm mt-2">Update</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

