# TEST BACK END

## Description

This is a backend API built using Laravel for testing the Skuberg company

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

### CRUD Users

### 1. Create User
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `POST`
- **Endpoint:** `/api/users`
- **Request Payload:**
```json
{
    "name": "",
    "email": "",
    "password": ""
}
```
- **Response Example:**
```
[
    "created success",
    {
        "id": 1,
        "name": "test",
        "email": "taest@test.com",
        "email_verified_at": null,
        "password": "$2y$12$OPBgI0TfEyxuf7CMIi3kG.tZP.dwjYuIlg8jHEmXV6xhrt6hOhOiu",
        "remember_token": null,
        "created_at": "2025-03-28T04:36:57.000000Z",
        "updated_at": "2025-03-28T04:36:57.000000Z"
    }
]
```
</details>

### 2. Get User
<details>
  <summary><b>Click to view the detaill</b></summary>

- **Method:** `GET`
- **Endpoint:** `/api/users`
- **Query Params:**
```

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
- **Endpoint:** `/api/users`
- **Query Params:**
```

```
- **Response Example:**
```

```
</details>

### 4. Update User
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `PUT`
- **Endpoint:** `/api/users`
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
- **Endpoint:** `/api/users`
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

### CRUD P2ps

### 1. Create P2p
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `POST`
- **Endpoint:** `/api/p2p`
- **Request Payload:**
```json
{
    "sender_user_id": "",
    "currency_id": "",
    "message": "",
    "amount": "",
    "method": ""
}
```
- **Response Example:**
```
[
    "created success",
    {
        "id": 1,
        "sender_user_id": 1,
        "currency_id": 1,
        "message": "test",
        "amount": 1.23,
        "method": 1,
        "created_at": "2025-03-28T05:06:31.000000Z",
        "updated_at": "2025-03-28T05:06:31.000000Z"
    }
]
```
</details>

### 2. Get P2p
<details>
  <summary><b>Click to view the detaill</b></summary>

- **Method:** `GET`
- **Endpoint:** `/api/p2p`
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

### 3. Get All P2p
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `GET`
- **Endpoint:** `/api/p2p`
- **Query Params:**
```

```
- **Request Example:**
```
curl 
```
- **Response Example:**
```

```
</details>

### 4. Update P2p
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `PUT`
- **Endpoint:** `/api/p2p`
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

### 5. Delete P2p
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `DELTE`
- **Endpoint:** `/api/p2p`
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

### CRUD Orders

### 1. Create Order
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `POST`
- **Endpoint:** `/api/order`
- **Request Payload:**
```json
{
    "user_id": "",
    "p2p_id": "",
    "market_id": "",
    "amount": "",
    "method": ""
}
```
- **Response Example:**
```
[
    "created success",
    {
        "id": 3,
        "user_id": 1,
        "p2p_id": 1,
        "market_id": 1,
        "method": 1,
        "amount": 1.23,
        "created_at": "2025-03-28T05:16:16.000000Z",
        "updated_at": "2025-03-28T05:16:16.000000Z"
    }
]
```
</details>

### 2. Get Order
<details>
  <summary><b>Click to view the detaill</b></summary>

- **Method:** `GET`
- **Endpoint:** `/api/order`
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

### 3. Get All Order
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `GET`
- **Endpoint:** `/api/order`
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

### 4. Update Order
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `PUT`
- **Endpoint:** `/api/order`
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

### 5. Delete Order
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `DELTE`
- **Endpoint:** `/api/order`
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

### CRUD Markers

### 1. Create Marker
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `POST`
- **Endpoint:** `/api/market`
- **Request Payload:**
```json
{
    "currency_id": ""
}
```
- **Response Example:**
```
[
    "created success",
    {
        "id": 1,
        "currency_id": 1,
        "created_at": "2025-03-28T05:16:04.000000Z",
        "updated_at": "2025-03-28T05:16:04.000000Z"
    }
]
```
</details>

### 2. Get Marker
<details>
  <summary><b>Click to view the detaill</b></summary>

- **Method:** `GET`
- **Endpoint:** `/api/market`
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

### 3. Get All Marker
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `GET`
- **Endpoint:** `/api/market`
- **Query Params:**
```

```
- **Request Example:**
```
curl 
```
- **Response Example:**
```

```
</details>

### 4. Update Marker
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `PUT`
- **Endpoint:** `/api/market`
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

### 5. Delete Marker
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `DELTE`
- **Endpoint:** `/api/market`
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

### CRUD Currencies

### 1. Create Currency
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `POST`
- **Endpoint:** `/api/currency`
- **Request Payload:**
```json
{
    "name": "",
    "rate": ""
}
```
- **Response Example:**
```
[
    "created success",
    {
        "id": 2,
        "name": "test1",
        "rate": 1.23,
        "created_at": "2025-03-28T05:02:06.000000Z",
        "updated_at": "2025-03-28T05:02:06.000000Z"
    }
]
```
</details>

### 2. Get Currency
<details>
  <summary><b>Click to view the detaill</b></summary>

- **Method:** `GET`
- **Endpoint:** `/api/currency`
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

### 3. Get All Currency
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `GET`
- **Endpoint:** `/api/currency`
- **Query Params:**
```

```
- **Request Example:**
```
curl 
```
- **Response Example:**
```

```
</details>

### 4. Update Currency
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `PUT`
- **Endpoint:** `/api/currency`
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

### 5. Delete Currency
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `DELTE`
- **Endpoint:** `/api/currency`
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


### CRUD Asset Wallets

### 1. Create Asset Wallet
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `POST`
- **Endpoint:** `/api/asset_wallet`
- **Request Payload:**
```json
{
    "user_id": "",
    "currency_id": "",
    "amount": ""
}
```
- **Response Example:**
```
[
    "created success",
    {
        "id": 1,
        "user_id": 1,
        "currency_id ": 1,
        "amount": 1.2,
        "created_at": "2025-03-28T05:34:59.000000Z",
        "updated_at": "2025-03-28T05:34:59.000000Z"
    }
]
```
</details>

### 2. Get Asset Wallet
<details>
  <summary><b>Click to view the detaill</b></summary>

- **Method:** `GET`
- **Endpoint:** `/api/asset_wallet`
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

### 3. Get All Asset Wallet
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `GET`
- **Endpoint:** `/api/asset_wallet`
- **Query Params:**
```

```
- **Request Example:**
```
curl 
```
- **Response Example:**
```

```
</details>

### 4. Update Asset Wallet
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `PUT`
- **Endpoint:** `/api/asset_wallet`
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

### 5. Delete Asset Wallet
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `DELTE`
- **Endpoint:** `/api/asset_wallet`
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

### CRUD Asset Exchanges

### 1. Create Asset Exchange
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `POST`
- **Endpoint:** `/api/asset_exchange`
- **Request Payload:**
```json
{
    "user_id": "",
    "currency_id": "",
    "amount": ""
}
```
- **Response Example:**
```
[
    "created success",
    {
        "id": 1,
        "user_id": 1,
        "currency_id": 1,
        "amount": 1.2,
        "created_at": "2025-03-28T05:25:36.000000Z",
        "updated_at": "2025-03-28T05:25:36.000000Z"
    }
]
```
</details>

### 2. Get Asset Exchange
<details>
  <summary><b>Click to view the detaill</b></summary>

- **Method:** `GET`
- **Endpoint:** `/api/asset_exchange`
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

### 3. Get All Asset Exchange
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `GET`
- **Endpoint:** `/api/asset_exchange`
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

### 4. Update Asset Exchange
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `PUT`
- **Endpoint:** `/api/asset_exchange`
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

### 5. Delete Asset Exchange
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `DELTE`
- **Endpoint:** `/api/asset_exchange`
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