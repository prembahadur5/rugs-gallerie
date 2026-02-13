<?php

$this->routes(function () {
    Route::middleware('web')
        ->group(base_path('routes/admin.php'));

    Route::middleware('web')
        ->group(base_path('routes/web.php'));
});
