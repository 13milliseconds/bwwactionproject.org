<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageCampaigns extends Controller
{
    public function campaigns(){
        $args = array(
            'post_type' => 'post',
	    	'category_name' => 'campaign',
            'post__not_in' => array(get_field('featured_campaign')->ID)
	    );

	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
    }

    public function data(){
        $data = [];

        $data['featured_campaign'] = get_field('featured_campaign');

        return $data;
    }

}
