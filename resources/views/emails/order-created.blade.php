<h3>Order Created by {{ $order->customer_name }}</h3>

<ul>
    <li>
        order id: {{ $order->id }}
    </li>
    <li>
        product id: {{ $order->product->id }}
    </li>
    <li>
        customer name: {{ $order->customer_name }}
    </li>
    <li>
        product name: {{ $order->product->title }}
    </li>
    <li>
        total price: {{ $order->total_price_html }}
    </li>
    <li>
        whatsapp number: {{ $order->whatsapp_number }}
    </li>
    <li>
        address: {{ $order->address }}
    </li>
    <li>
        payment method: {{ $order->payment_method }}
    </li>
    <li>
        created at: {{ $order->created_at }}
    </li>
</ul>
