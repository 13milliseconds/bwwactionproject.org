<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageVote extends Controller
{
    public function data(){
        $data = [];

        $data['endorsements'] = get_field('endorsements');
        $data['current_endorsements'] = get_field('current_endorsements');
        $data['past_endorsements'] = get_field('past_endorsements');
        $data['ballot_guides'] = get_field('ballot_guides');
        $data['feature'] = get_field('featured_campaign');

        return $data;
    }

}
