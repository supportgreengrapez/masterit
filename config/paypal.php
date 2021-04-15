<?php
return array(
    // set your paypal credential
    'client_id' => 'AVYjHQL_-SQPKvKmEQXsKUfRbcAN1LPVfsTOZqaCHoFGwOBwkh2p52zUXE4gX71wYhAhKEpij5DWNkae',
    'secret' => 'ENYSylApw_7P8zbViFPtklQDhGrF086XI4zrr19Do7twZsGO0LBg_26zWr_6mcyPQOF6k8HcstPqLDuF',
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'live',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
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