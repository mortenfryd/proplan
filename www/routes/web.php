<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/skema', function () {
    return view('skema');
});

Route::get("/test", function() {
    return view("test");
})->middleware("auth");

Route::get('/movies/{page?}/{sort?}', function ($page = 1, $sort = 'premiere') {
    $sorted = ($sort == "premiere") ? false : true;
    if (!$page)
        $page = 1;
    $genre = (!isset($_GET['genre']) ? null : $_GET['genre']);

    $items_per_page = 12;
    $index = ($page-1) * $items_per_page; 
    $total_records = file_get_contents('http://nepharia.net:1337/api/movies/count');
    $total_pages = ceil($total_records / $items_per_page);
    $next_page = $page + 1 >= $total_pages ? $total_pages : $page + 1;
    $prev_page = $page - 1 <= 0 ? 1 : $page - 1;

    if ($genre === null){
        $json = file_get_contents('http://nepharia.net:1337/api/movies/' . $page . '/' . $sort);
    }else{
        $json = file_get_contents('http://nepharia.net:1337/api/g/' . $genre);
    }
    $movies = json_decode($json, TRUE);
    
    $active = 1;
    
    // Send variabler til viewet
    return view('movies', [
        'total_records' => $total_records,
        'sorted' => $sorted,
        'page' => $page,
        'total_pages' => $total_pages,
        'movies' => $movies,
        'prev_page' => $prev_page,
        'next_page' => $next_page,
        'movies' => $movies,
        'sort' => $sort,
        'active' => $active
    ]);
});

Route::get('/movie/{movie}', function ($movie) {
    $json = file_get_contents('http://nepharia.net:1337/api/movie/' . $movie);
    $movies = json_decode($json, TRUE);

    $data['title'] = $movies[0]['Title'];
    $data['movie'] = $movies;

    //Rating (0 - 100)
    if ($movies[0]['Rating'] >= 95){
        $data['movie'][0]['Rating'] = '<span class="ratings five"></span>';
    }
    elseif ($movies[0]['Rating'] >= 85){
        $data['movie'][0]['Rating'] = '<span class="ratings fourhalf"></span>';
    }
    elseif ($movies[0]['Rating'] >= 65){
        $data['movie'][0]['Rating'] = '<span class="ratings four"></span>';
    }
    elseif ($movies[0]['Rating'] >= 55){
        $data['movie'][0]['Rating'] = '<span class="ratings threehalf"></span>';
    }
    elseif ($movies[0]['Rating'] >= 45){
        $data['movie'][0]['Rating'] = "<span class=\"ratings three\"></span>";
    }
    elseif ($movies[0]['Rating'] >= 35){
        $data['movie'][0]['Rating'] = "<span class=\"ratings twohalf\"></span>";
    }
    elseif ($movies[0]['Rating'] >= 20){
        $data['movie'][0]['Rating'] = "<span class=\"ratings two\"></span>";
    }
    elseif ($movies[0]['Rating'] >= 15){
        $data['movie'][0]['Rating'] = "<span class=\"ratings onehalf\"></span>";
    }
    elseif ($movies[0]['Rating'] >= 10){
        $data['movie'][0]['Rating'] = "<span class=\"ratings one\"></span>";
    }
    elseif ($movies[0]['Rating'] >= 1){
        $data['movie'][0]['Rating'] = "<span class=\"ratings\"></span>";
    }
    else{
        $data['movie'][0]['Rating'] = "Not yet rated";
    }
    
    return view('movie', ['data' => $data]);
});