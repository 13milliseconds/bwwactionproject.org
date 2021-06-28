<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageCampaigns extends Controller
{
    public function campaigns(){
        $args = array(
            'post_type' => 'post',
	    	'category_name' => 'campaign'
	    );

	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
    }

}
