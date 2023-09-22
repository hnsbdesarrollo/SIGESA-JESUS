<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function dashboard(){
		$page_title = 'Panel Administrador';
        $page_description = 'Some description for the page';
		return view('eres.seccion_admin.dashboard.index', compact('page_title', 'page_description'));
	}

}
