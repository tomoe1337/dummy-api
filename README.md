# DummyJSON Products API

[![Laravel Version](https://img.shields.io/badge/Laravel-12.x-green)](https://laravel.com)
[![PHP Version](https://img.shields.io/badge/PHP-8.x-blue)](https://www.php.net)

RESTful API для работы с продуктами из [DummyJSON](https://dummyjson.com/docs/products). Позволяет получать, сохранять и имитировать добавление продуктов \"iPhone\".

---

## Требования

- PHP >= 8.2
- Composer
- Laravel >= 12.x

---

## Установка

1. Клонируйте репозиторий:
   ```bash
   git clone https://github.com/your-repo/dummyjson-api.git
   cd dummyjson-api
   ```

2. Установите зависимости:
   ```bash
   composer install
   ```

3. Настройте `.env`:
   ```bash
   cp .env.example .env
   ```
   Откройте `.env` и укажите параметры базы данных.

4. Запустите миграции:
   ```bash
   php artisan migrate
   ```

5. Запустите сервер:
   ```bash
   php artisan serve
   ```

API доступно по адресу: `http://localhost:8000/api`.

---

## Использование API

### 1. Получение и сохранение iPhone
```
POST /api/fetch-iphones
```

### 2. Получение всех iPhone
```
GET /api/iphones
```

### 3. Имитация добавления продукта
```
POST /api/products/add
Content-Type: application/json

{
    \"title\": \"BMW Pencil\",
    \"description\": \"A luxury pencil from BMW\",
    \"price\": 99.99,
    \"stock\": 50,
    \"brand\": \"BMW\",
    \"category\": \"stationery\",
    \"images\": [\"https://example.com/bmw-pencil.jpg\"]
}
```

---

## Документация OpenAPI
Документация доступна в файле `openapi.yaml`. Откройте её в [Swagger Editor](https://editor.swagger.io/) для просмотра интерактивной документации.
