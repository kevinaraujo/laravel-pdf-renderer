## Laravel PDF Renderer

After run on command line `composer install`, `sudo cp .env.example .env` and `php artisan key:generate`, Run `php artisan serve --port=8080` and later enter into 
`http://localhost:8080/render` on browser

I used two libs to render PDF:
- [niklasravnsborg/laravel-pdf](https://github.com/niklasravnsborg/laravel-pdf)
- [barryvdh/laravel-dompdf](https://github.com/barryvdh/laravel-dompdf)

These are separated by branch and if you want swapping between them just checkout the branch
and run `composer update` on command line.
