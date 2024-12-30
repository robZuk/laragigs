


Route::get('/posts', function () {
    return respnse()->json([
        'posts' => [
            [
                'title' => 'post one'
            ]
        ]
    ]);
});