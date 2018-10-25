<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index() {
        $data = array(
            'page_name' => 'Campaign Name'
        );
        return view('campaign.step-4')->with($data);
    }
}