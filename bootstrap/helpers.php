<?php

/*
|--------------------------------------------------------------------------
| Custom Helper Functions
|--------------------------------------------------------------------------
| Author: Sheikh Amir
|
| You can use these functions in all the files and can define your own.
|
*/

if (! function_exists('generate_price_as_options')) {
    function generate_price_as_options () {
        $interval_1 = 10000;
        $interval_2 = 25000;
        $interval_3 = 50000;
        $interval_4 = 100000;
        $interval_5 = 250000;
        $interval_6 = 500000;
        ?><option value="0">ANY ...</option><?php
        // To 250,000 with with 10,000 multiple
        for ( $i = 1; $i <= 25; $i++  ){
            $amount_1 = $i * $interval_1;
            $formatted = number_format( $amount_1 );
            ?><option value="<?php echo $amount_1; ?>">&pound;<?php echo $formatted; ?></option><?php
        }
        // To 500,000 with with 25,000 multiple
        for ( $i = 1; $i <= 10; $i++  ){
            $amount_2 = $amount_1 + ( $i * $interval_2 );
            $formatted = number_format( $amount_2 );
            ?><option value="<?php echo $amount_2; ?>">&pound;<?php echo $formatted; ?></option><?php
        }
        // To 1,000,000 with with 50,000 multiple
        for ( $i = 1; $i <= 10; $i++  ){
            $amount_3 = $amount_2 + ( $i * $interval_3 );
            $formatted = number_format( $amount_3 );
            ?><option value="<?php echo $amount_3; ?>">&pound;<?php echo $formatted; ?></option><?php
        }
        // To 2,500,000 with with 100,000 multiple
        for ( $i = 1; $i <= 15; $i++  ){
            $amount_4 = $amount_3 + ( $i * $interval_4 );
            $formatted = number_format( $amount_4 );
            ?><option value="<?php echo $amount_4; ?>">&pound;<?php echo $formatted; ?></option><?php
        }
        // To 5,000,000 with with 250,000 multiple
        for ( $i = 1; $i <= 10; $i++  ){
            $amount_5 = $amount_4 + ( $i * $interval_5 );
            $formatted = number_format( $amount_5 );
            ?><option value="<?php echo $amount_5; ?>">&pound;<?php echo $formatted; ?></option><?php
        }
        // To 10,000,000 with with 500,000 multiple
        for ( $i = 1; $i <= 30; $i++  ){
            $amount_6 = $amount_5 + ( $i * $interval_6 );
            $formatted = number_format( $amount_6 );
            ?><option value="<?php echo $amount_6; ?>">&pound;<?php echo $formatted; ?></option><?php
        }
    }
}