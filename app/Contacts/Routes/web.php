<?php

Route::get('contacts', 'ContactController@index')
    ->name('contacts.index');

Route::get('contacts/create', 'ContactController@create')
   ->name('contacts.create');

Route::post('contacts', 'ContactController@store')
    ->name('contacts.store');

Route::get('contacts/{contact}', 'ContactController@show')
    ->name('contacts.show');

Route::get('contacts/edit/{contact}', 'ContactController@edit')
    ->name('contacts.edit');

Route::put('contacts/{contact}', 'ContactController@update')
    ->name('contacts.update');

Route::get('contacts/delete/{contact}', 'ContactController@destroy')
    ->name('contacts.delete');

Route::get('/', [App\Contacts\Controllers\Web\ContactController::class, 'list'])
    ->name('contacts.list');

Route::get('contacts/{contact}', [App\Contacts\Controllers\Web\ContactController::class, 'view'])
    ->name('contacts.view');
