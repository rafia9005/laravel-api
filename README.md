<h1 align="center">
    <img src="https://www.rafii.site/laravel.png" width="120px">
</h1>

<p align="center">
  <i align="center">Instantly generate production-ready Laravel backend apps 🚀</i>
</p>

## Instructions
Laravel-Stater-api is made for those of you who want to learn about APIs in Laravel, it is equipped with Auth and several post, get, delete, put features.

![Screenshot (1137)](https://github.com/rafia9005/laravel-api/assets/70046808/cf3c92f2-b169-4333-b21f-74add970efa0)

<h1><i>router or url ⭐</i></h1>

| Name | Description | Method |
| --- | --- | --- |
| `http://localhost:8000` | Root URL | GET |
| `http://localhost:8000/register` | Register | POST |
| `http://localhost:8000/login` | Login | POST |
| `http://localhost:8000/profile` | Profile | GET |
| `http://localhost:8000/posts` | Data Posts | GET |
| `http://localhost:8000/posts/{id}` | Data Posts ID | GET |
| `http://localhost:8000/posts/create` | Create Data Posts | POST |
| `http://localhost:8000/posts/{id}` | Delete Data Posts | DELETE |
| `http://localhost:8000/alumni` | Data Alumni | GET |
| `http://localhost:8000/alumni/{id}` | Data Alumni ID | GET |
| `http://localhost:8000/alumni/create` | Create Data Alumni | POST |

<h1><i>Installations</i></h1>

```bash
git clone https://github.com/rafia9005/laravel-api.git
```

```bash
cd laravel-api
```

```bash
composer install
```

```bash
php artisan key:generate
```

```bash
php artisan migrate && php artisan db:seed
```

<h4><i>kamu dapat mengubah data akun di </i></h4>

```php
database\sedeers\Database.php
```





## License

A large part of this project is licensed under the [Apache 2.0](./LICENSE) license. The only exception are the components under the `ee` (enterprise edition) directory, these are licensed under the [Amplication Enterprise Edition](./ee/LICENSE) license.
