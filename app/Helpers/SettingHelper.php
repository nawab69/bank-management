<?php

if (!function_exists('setting')) {

    /**
     * Get setting value by key.
     *
     * @param $key
     * @param $default
     *
     * @return string
     */
    function setting($key, $default=null)
    {
        return \App\Models\Setting::get($key, $default);
    }
}


if (!function_exists('fee')) {

    /**
     * Get setting value by key.
     *
     * @param $key
     * @param $amount
     * @return float
     */
    function fee($key,$amount) : float
    {
        $fee = \App\Models\Fee::where('key',$key)->first();
        if(!$fee) {
            return 0;
        }
        $fixed = $fee->fixed;
        $per = (float) ($fee->percentage/100) * $amount;
        return ($amount+$fixed+$per);
    }
}
