<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;

Route::view('/', 'landing')->name('home');

Route::get('/sitemap.xml', function () {
    $url = config('app.url');
    $lastmod = date('Y-m-d');

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
    $xml .= '  <url>' . PHP_EOL;
    $xml .= '    <loc>' . $url . '</loc>' . PHP_EOL;
    $xml .= '    <lastmod>' . $lastmod . '</lastmod>' . PHP_EOL;
    $xml .= '    <changefreq>weekly</changefreq>' . PHP_EOL;
    $xml .= '    <priority>1.0</priority>' . PHP_EOL;
    $xml .= '  </url>' . PHP_EOL;
    $xml .= '</urlset>';

    return response($xml, 200)->header('Content-Type', 'application/xml');
});
