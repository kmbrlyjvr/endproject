<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class SvgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function render($file)
    {
        $config = new \stdClass();
        $config->trouserColor = "#be9d8e";
        $config->pocketColor = "#be9d8e";
        $config->utilityColor = "#be9d8e";
        $config->overallColor = "#be9d8e";
        $config->logoColor = "#be9d8e";

        $view = "";

        switch($file) {
            case "overall":
            $view = 'svg.renderOverallSvg';

            case "utility":
            $view = 'svg.renderUtilitySvg';

            case "slack": 
            default: 
            $view = 'svg.renderSlackSvg';
        }
        return response()->view($view, ['config' => $config])->header('Content-Type', 'image/svg+xml');

    }

}