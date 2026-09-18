<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

// Web Pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{project:slug}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/certificates', [CertificateController::class, 'index'])->name('certificates.index');

// Chat & Interactive Endpoints
Route::get('/api/chat/messages', [ChatController::class, 'getMessages'])->name('api.chat.messages');
Route::post('/api/chat/messages', [ChatController::class, 'sendMessage'])->name('api.chat.send');
Route::post('/api/cv/request', [ChatController::class, 'requestCv'])->name('api.cv.request');
