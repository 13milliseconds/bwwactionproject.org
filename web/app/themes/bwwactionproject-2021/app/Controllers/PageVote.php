<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageVote extends Controller
{
    public function data(){
        $data = [];

        $data['endorsements'] = get_field('endorsements');
        $data['ballot_guides'] = get_field('ballot_guides');

        return $data;
    }

}
