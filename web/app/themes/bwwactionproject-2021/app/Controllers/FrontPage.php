<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{
    public function data(){
        $data = [];

        $data['top'] = get_field('top');
        $data['donate'] = get_field('donate');
        $data['feature'] = get_field('feature');
        $data['newsletter'] = get_field('newsletter');

        return $data;
    }

    public function posts(){
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
	    	'category__not_in' => array(4)
	    );

	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
    }

}
