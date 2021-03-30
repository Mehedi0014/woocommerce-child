<?php
	/**
	===> change the number of columns in archive page
	*/
    function mehedi_shop_columns($columns){
        return 3;
    }
    add_filter('loop_shop_columns', 'mehedi_shop_columns', 20);