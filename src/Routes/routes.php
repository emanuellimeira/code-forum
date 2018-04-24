<?php

Route::group(['prefix'=>'forum', 'namespace'=>'CodeEdu\CodeForum\Controllers', 'middleware'=>['web']], function(){

    Route::get('/', 'ForumController@index');
    Route::get('topic/{id}', 'ForumController@topic');

});