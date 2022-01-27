<?php

use Modules\Product\Services\CartService;
use Modules\Setting\Services\SettingService;

if (! function_exists('paginate')) {
    function paginate($collection) {
        return [
            'pagination' => [
                'total' => $collection->total(),
                'per_page' => $collection->perPage(),
                'current_page' => $collection->currentPage(),
                'last_page' => $collection->lastPage(),
                'from' => $collection->firstItem(),
                'to' => $collection->lastItem()
            ],
            'data' => $collection
        ];
    }
}


if (! function_exists('field')) {
    function field($type, $name, $label, $cols, $form = null, $options = [], $required = false)
    {
        return [
            'type' => $type,
            'name' => $name,
            'label' => $label,
            'cols' => $cols,
            'form' => $form,
            'options' => $options,
            'required' => $required
        ];
    }
}



if (! function_exists('registeredModules')) {
    function registeredModules() {
        return [
            'Home',
            'Country',
            'Branch',
            'Setting',
            'Page',
            'Product',
            'Category',
        ];
    }
}

if (! function_exists('settings')) {
    function settings()
    {
        return new SettingService();
    }
}

if (! function_exists('cart')) {
    function cart()
    {
        return new CartService();
    }
}
