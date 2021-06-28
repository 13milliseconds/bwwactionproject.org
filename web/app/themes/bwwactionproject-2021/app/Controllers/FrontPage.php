<?php

namespace App\Controllers;

use Sober\Controller\Controller;

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

}
