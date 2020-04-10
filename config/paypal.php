<?php
return array(
    /** set your paypal credential **/
    'client_id' =>'AdYjZ3UaPYMpE1GzuQvxJVlTtl1zGqgv1p-glPzu2rNEc--Fyhpz2Zb8ampmY_3iTKay6WQYVMtByZBf',
    'secret' =>'EKpSb-E5WOjRDqQg-RB-AHE-emXCYe8lXVwLgZOXoEzmh78uSTZHeyQEn2_Sx4HjUymJv6hLhy5s2ryN',
    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 1000,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);