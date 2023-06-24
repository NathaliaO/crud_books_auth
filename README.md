### About the Project

```sh
Clone the Project: git clone https://github.com/NathaliaO/crud_books_auth.git
```

### Create .env


```sh
copy the .env.example file to the .env
```

### Up the container

```sh
docker-compose up -d
```

### Access the container

```sh
docker-compose exec app bash
```

### Install Dependencies

```sh
composer install
```

### Generate Key

```sh
php artisan key:generate
```

Route: http://localhost:8989/login