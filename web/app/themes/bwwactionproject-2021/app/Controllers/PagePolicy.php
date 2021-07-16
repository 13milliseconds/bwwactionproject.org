<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PagePolicy extends Controller
{
    public function bills(){
        $args = array(
            'post_type' => 'post',
	    	'category_name' => 'bill'
	    );

	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
    }

    public function data(){
        $data = [];

        $data['federal_bills'] = get_field('federal_bills');
        $data['bills'] = get_field('bills');
        $data['agenda'] = get_field('agenda');
        $data['featured_campaign'] = get_field('featured_campaign');

        return $data;
    }

}
