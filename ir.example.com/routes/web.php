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

Route::view('/', 'pages.home');

Route::view('/contact', 'pages.contact');

Route::view('/corporate-governance', 'pages.corporate-governance');

Route::view('/sec-filings', 'pages.sec-filings');

Route::view('/stock-data', 'pages.quote');

Route::view('/stock-data/quote', 'pages.quote');

Route::view('/financial-information', 'pages.financial-information');

Route::view('/company-information', 'pages.company-information');

Route::view('/news-events', 'pages.news-events');










