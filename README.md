# TEST BACK END

## Description

This is a backend API built using Laravel that provides currency conversion and exchange rate functionalities. The API allows users to retrieve the latest exchange rates and convert between different currencies.

## Features

- Get the latest exchange rates for various currencies.
- Convert one currency to another.
- Support for multiple currencies (USD, EUR, GBP, etc.).
- API is flexible and can be extended for additional features.

## ER-Diagram
![image](https://github.com/user-attachments/assets/1d3b6816-cdaf-41eb-b489-882e8c81a36d)



## Installation

1. Run the migrations database:
```
php artisan migrate
```
2. create dummy data:
```
php artisan db:seed
```
3. run the application:
```
php artisan serve
```


## API Endpoints
### 1. Create User
<details>
  <summary><b>Click to view the detail</b></summary>

- **Method:** `POST`
- **Endpoint:** `/users`
- **Header:**
```json
{

}
```
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
- **Header:**
```json
{

}
```
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
- **Header:**
```json
{

}
```
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
- **Header:**
```json
{

}
```
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
- **Header:**
```json
{

}
```
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

