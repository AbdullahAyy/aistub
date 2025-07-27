<?php
if (!function_exists('formatPrice')) {
    function formatPrice($amount)
    {
        return number_format($amount, 2) . ' TL';
    }
}
