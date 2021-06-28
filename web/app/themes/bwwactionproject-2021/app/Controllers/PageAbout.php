<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageAbout extends Controller
{
    public function data(){
        $data = [];

        $data['header'] = get_field('header');
        $data['left_column'] = get_field('left_column');

        return $data;
    }

}
