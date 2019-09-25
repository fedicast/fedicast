<?php

/*
|--------------------------------------------------------------------------
| Static Public Routes
|--------------------------------------------------------------------------
|
| These routes point to pages that contain content that doesn't change
| often or that doesn't need to go through a controller.
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

Route::view('/legal/privacy', 'legal.privacy')->name('legal.privacy');
Route::view('/legal/toc', 'legal.toc')->name('legal.toc');
Route::view('/legal/coc', 'legal.coc')->name('legal.coc');
Route::view('/post/account-deletion', 'account.post-deletion')->name('account.post-deletion');

Route::view('/blog', 'blog')->name('blog');

Auth::routes(['verify' => true]);

Route::get('/@/{username}', 'UserController@actionPublicProfile')->name('user.public.profile');

/*
|--------------------------------------------------------------------------
| Static Authenticated Routes
|--------------------------------------------------------------------------
|
| These routes point to pages that contain content that doesn't change
| often or that doesn't need to go through a controller but requires
| the user be logged in.
|
*/

Route::group(['middleware' => ['auth']], function(){
    Route::view('/~/', 'account.overview')->name('user.overview');

    Route::view('/~/podcasts', 'account.podcasts')->name('user.podcasts');
    Route::view('/~/domains', 'account.domains')->name('user.domains');
    Route::view('/~/usage', 'account.usage')->name('user.usage');

    Route::view('/~/account', 'account.settings')->name('user.settings');
    Route::view('/~/account/billing', 'account.settings')->name('user.settings.billing');
    Route::view('/~/account/plan', 'account.settings')->name('user.settings.plan');
});


/*
|--------------------------------------------------------------------------
| Dynamic Authenticated Routes
|--------------------------------------------------------------------------
|
| Mostly authenticated api
|
*/

Route::group(['middleware' => ['auth']], function(){

    Route::post('/account', 'UserController@actionUpdate')->name('user.settings.update');
    Route::delete('/account', 'UserController@actionDelete')->name('user.settings.delete');

});
