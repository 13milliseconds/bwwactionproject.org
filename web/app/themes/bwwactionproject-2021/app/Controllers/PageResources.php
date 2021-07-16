<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageResources extends Controller
{
    public function data(){
        $data = [];

        $data['categories'] = get_field('Categories');

        return $data;
    }

}
