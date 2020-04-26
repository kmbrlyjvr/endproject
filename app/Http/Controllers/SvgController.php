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
        $config->trouserColor = "#3a2929";
        $config->pocketColor = "#f3dcbe";
        $config->utilityColor = "#be9d8e";
        $config->overallColor = "#be9d8e";
        $config->logoColor = "#f3f1a0";
        $config->beltColor = "#614a45";

        $view = "";

        switch($file) {
            case "overall":
            $view = 'svg.renderOverallSvg';
            break;

            case "utility":
            $view = 'svg.renderUtilitySvg';
            break;

            case "trouser": 
            default: 
            $view = 'svg.renderTrouserSvg';
        }
        return response()->view($view, ['config' => $config])->header('Content-Type', 'image/svg+xml');

    }

}