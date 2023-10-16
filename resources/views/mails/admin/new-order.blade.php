@component('mail::message')
    Please pay attention to a new order confirmation!

    #Order Number: {{ $order->id }}

    Customer Full Name: {{ $order->full_name }}

    Customer Phone: {{ $order->phone }}

    Customer Address: {{ $order->address }}

    Total: {{ $order->total }} L.E

    Thanks,

@endcomponent
