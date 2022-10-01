@component('mail::message')
    Please pay attention to a new order confirmation!

    #Order Number: {{ $order->id }}

    Thanks,

@endcomponent
