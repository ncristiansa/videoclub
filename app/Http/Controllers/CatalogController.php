<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getIndex()
    {
        Route::get('catalog', 'CatalogController@getIndex');
    }
    public function getShow($id)
    {
        Route::get('catalog/show/{id}', 'CatalogController@getShow');
    }
    public function getCreate()
    {
        Route::get('catalog/create', 'CatalogController@getCreate');
    }
    public function getEdit($id)
    {
        Route::get('catalog/edit/{id}', 'CatalogController@getEdit');
    }
}
