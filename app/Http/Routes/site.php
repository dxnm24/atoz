<?php
Route::get('/sitemap.xml', 'SiteController@sitemap');
Route::get('/search', ['uses' => 'SiteController@search', 'as' => 'site.search']);
Route::get('/', ['uses' => 'SiteController@index', 'as' => 'site.index']);
Route::get('tag/{slug}', ['uses' => 'SiteController@tag', 'as' => 'site.tag']);
Route::get('{slug1}/{slug2}', 'SiteController@page2');
Route::get('{slug}', 'SiteController@page');