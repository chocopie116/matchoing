<?php

use Illuminate\Support\Facades\Route;

/**
 * ユーザー情報
 */
Route::post('/users', function () {
    return response()->json([
        'id' => 1
    ], 201);
});

Route::get('/users/me', function () {
    return response()->json([
        'name' => '田中太郎'
    ], 200);
});

Route::put('/users/me', function () {
    return response()->json([
        'name' => '田中太郎'
    ]);
});

Route::get('/users/{id}', function () {
    return response()->json([
        'name' => '田中太郎'
    ]);
});



/**
 * プロフィール情報
 */
Route::post('/users/profiles', function () {
    return response()->json([
        'id' => 1
    ], 201);
});

Route::put('/users/me/profiles', function () {
    return response()->json([
        'id' => 1
    ]);
});

Route::get('/users/me/profiles', function () {
    return response()->json([
        'id' => 1
    ]);
});

Route::get('/users/profiles', function () {
    return response()->json([
        'id' => 1
    ]);
});
//他人のプロフィールをみる
Route::get('/users/{id}/profiles', function () {
    return response()->json([
        'id' => 1
    ]);
});

/**
 * LIKE情報
 */
Route::post('/users/{id}/likes', function () {
    return response()->json([
        'id' => 1
    ], 201);
});

//他人のLIKEをみる
Route::get('/users/me/likes', function () {
    return response()->json([
        'id' => 1
    ]);
});

/**
 * マッチング情報
 */
Route::get('/users/me/matchings', function () {
    return response()->json([
        'id' => 1
    ], 201);
});

/**
 * メッセージ情報
 */
Route::post('/matchings/{id}/messages', function () {
    return response()->json([
        'id' => 1
    ], 201);
});

Route::get('/matchings/{id}/messages', function () {
    return response()->json([
        'id' => 1
    ]);
});
