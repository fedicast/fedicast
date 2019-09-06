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

Route::view('/', 'welcome')->name('home');
Route::view('/timeline', 'timeline')->name('timeline');
Route::view('/sitemap', 'sitemap')->name('sitemap');
Route::view('/pricing', 'pricing')->name('pricing');
Route::view('/platform', 'platform.platform')->name('platform');
Route::view('/platform/features', 'platform.features')->name('platform.features');
Route::view('/platform/federation', 'platform.federation')->name('platform.federation');
Route::view('/about', 'about.about')->name('about');
Route::view('/about/references', 'about.references')->name('about.references');
Route::view('/about/budget', 'about.budget')->name('about.budget');
Route::view('/about/road-map', 'about.roadmap')->name('about.roadmap');
Route::view('/support', 'support')->name('support');
Route::view('/support/documentation', 'documentation.documentation')->name('documentation');
Route::view('/support/documentation/tutorials', 'documentation.tutorials')->name('documentation.tutorials');
Route::view('/support/documentation/faq', 'documentation.faq')->name('documentation.faq');
Route::view('/support/documentation/api/mastodon', 'documentation.api.mastodon')->name('documentation.api.mastodon');
Route::view('/support/documentation/api/fedicast', 'documentation.api.fedicast')->name('documentation.api.fedicast');

Route::view('/blog', 'blog')->name('blog');

Auth::routes(['verify' => true]);

Route::get('/~/{username?}', 'UserController@actionOverview')->name('user.overview');
Route::view('/~/{username}/settings', 'account.settings')->name('user.settings');
Route::view('/~/{username}/podcasts', 'account.podcasts')->name('user.podcasts');
Route::view('/~/{username}/domains', 'account.domains')->name('user.domains');
Route::view('/~/{username}/usage', 'account.usage')->name('user.usage');

