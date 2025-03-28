# TEST BACK END

## Description

This is a backend API built using Laravel that provides currency conversion and exchange rate functionalities. The API allows users to retrieve the latest exchange rates and convert between different currencies.

## Features

- CRUD `user` data API
- CRUD `asset_wallet` data API
- CRUD `asset_exchange` data API
- CRUD `order` data API
- CRUD `markets` data API
- CRUD `p2p` data API
- CRUD `currency` data API

## ER-Diagram



## Installation

1. move to directory test_backend:
```
cd test_backend
```
2. create database name test_backend:
3. Run the migrations database:
```
php artisan migrate
```
4. create dummy data:
```
php artisan db:seed
```
5. run the application:
```
php artisan serve
```


## API Endpoints
### 1. Create User
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `POST`
- **Endpoint:** `/users`
- **Request Payload:**
```json
{

}
```
- **Request Example:**
```
curl 
```
- **Response Example:**
```
{
  "status": "success",
}
```
</details>

### 2. Get User
<details>
  <summary><b>Click to view the detaill</b></summary>

- **Method:** `GET`
- **Endpoint:** `/users`
- **Query Params:**
```

```
- **Request Example:**
```
curl 
```
- **Response Example:**
```
{
  "status": "success",
}
```
</details>

### 3. Get All User
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `GET`
- **Endpoint:** `/users`
- **Query Params:**
```

```
- **Request Example:**
```
curl 
```
- **Response Example:**
```
{
  "status": "success",
  "data": [
    {
      "id": 1,
      "name": "John Doe",
      "email": "john@example.com"
    },
    {
      "id": 2,
      "name": "John Smith",
      "email": "johnsmith@example.com"
    }
  ]
}
```
</details>

### 4. Update User
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `PUT`
- **Endpoint:** `/users`
- **Query Params:**
```

```
- **Request Example:**
```
curl 
```
- **Response Example:**
```
{
  "status": "success",
}
```
</details>

### 5. Delete User
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `DELTE`
- **Endpoint:** `/users`
- **Query Params:**
```

```
- **Request Example:**
```
curl 
```
- **Response Example:**
```
{
  "status": "success",
}
```
</details>

