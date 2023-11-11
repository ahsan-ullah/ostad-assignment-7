![OSTAD - Assignment7](https://cdn.ostad.app/public/upload/2023-10-17T07-14-50.690Z-Logo-new.png)

## Laravel Installation

- Install Laravel

```bash
composer create-project laravel/laravel ostad-assignment7
```

- Create UserController with resources using following Command

```
php artisan make:controller UserController -r
```

- Mapping Route with UserController
Code
```
Route::get('/user', [UserController::class, 'index']);
```


## RUN the project
```
php artisan serve
```
## Go to the following URL
[OSTAD - Assignment7](http://localhost:8000/user)

## License
[MIT](https://choosealicense.com/licenses/mit/)