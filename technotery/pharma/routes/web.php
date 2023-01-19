<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () { return view('Backend.index');
});

Route::get('/chartjs', function () { return view('Backend.chartjs');
});

Route::get('/basic_table', function () { return view('Backend.basic_table');
});

Route::get('/vector_map', function () { return view('Backend.vector_map');
});

Route::get('/typography', function () { return view('Backend.typography');
});

Route::get('/responsive_table', function () { return view('Backend.responsive_table');
});

Route::get('/mail_compose', function () { return view('Backend.mail_compose');
});

Route::get('/mail', function () { return view('Backend.mail');
});

Route::get('/grids', function () { return view('Backend.grids');
});

Route::get('/google_map', function () { return view('Backend.google_map');
});

Route::get('/glyphicon', function () { return view('Backend.glyphicon');
});

Route::get('/gallery', function () { return view('Backend.gallery');
});

Route::get('/form_validation', function () { return view('Backend.form_validation');
});

Route::get('/form_component', function () { return view('Backend.form_component');
});

Route::get('/fontawesome', function () { return view('Backend.fontawesome');
});

Route::get('/flot_chart', function () { return view('Backend.flot_chart');
});

Route::get('/dropzone', function () { return view('Backend.dropzone');
});
