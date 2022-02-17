<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as controllers;


Route::prefix("cursos")->group(function () {
    
    Route::get("/", [controllers\Cursos::class, "index"])->name("cursos");

    Route::get("/crear", [controllers\Cursos::class, "crear"]);
    
    Route::get("/create", [controllers\Cursos::class, "create"])->name("cursos-create");
    
    Route::post("/store", [controllers\Cursos::class, "store"])->name("cursos-store");
    
    Route::get("/edit/{id}", [controllers\Cursos::class, "edit"])->name("cursos-edit");
    Route::put("/update/{id}", [controllers\Cursos::class, "update"])->name("cursos-update");
    Route::get("/show/{id}", [controllers\Cursos::class, "show"])->name("cursos-show");
    Route::delete("/destroy/{id}", [controllers\Cursos::class, "destroy"])->name("cursos-destroy");

    Route::get("/data-ajax", [controllers\Cursos::class, "dataAjax"])->name("cursos-ajax");
});

Route::prefix("auth")->group(function () {
    Route::get("/", [controllers\Auth::class, "index"])->name("auth");
    Route::post("/login", [controllers\Auth::class, "login"])->name("login");
    Route::get("/logout", [controllers\Auth::class, "logout"])->name("logout");
    Route::get("/user", [controllers\Auth::class, "createUser"])->name("user");
});
