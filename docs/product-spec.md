# Product API Spec

## Other docs :
- [User API Documentation](./docs/user-spec.md)
- [Category API Documentation](./docs/category-spec.md)

## Create Product

Endpoint : POST /api/products

Headers:
- Authorization : Bearer Token

Requets Body : 
```json
{
    "name": "Laptop office",
    "description": "High-performance laptop",
    "price": 1299.99,
    "stock": 10,
    "category_id": 3
}
```

Response Body Success : 
```json
{
    "data": {
    "name": "Laptop gaming",
    "price": 1299.99,
    "stock": 10,
    "category_id": 2,
    "updated_at": "2024-10-13T06:08:45.000000Z",
    "created_at": "2024-10-13T06:08:45.000000Z",
    "id": 6
  }
}
```

Response Body Errors : 
```json
{
  "status": "error",
  "message": "Validation failed",
  "errors": {
    "category_id": [
      "The selected category id is invalid."
    ]
  }
}
```

## Get All Product

Endpoint : GET /api/products

Headers:
- Authorization : Bearer Token

Response Body Success :
```json
{
  "data": [
    {
      "id": 2,
      "name": "Laptop",
      "price": 1300,
      "stock": 10,
      "category_id": 2,
      "created_at": "2024-10-13T04:01:30.000000Z",
      "updated_at": "2024-10-13T04:01:30.000000Z",
      "category": {
        "id": 2,
        "name": "Electronics",
        "description": "Category for electronic products",
        "created_at": "2024-10-13T03:49:51.000000Z",
        "updated_at": "2024-10-13T03:49:51.000000Z"
      }
    },
    {
      "id": 3,
      "name": "Laptop office",
      "price": 1300,
      "stock": 10,
      "category_id": 2,
      "created_at": "2024-10-13T04:01:39.000000Z",
      "updated_at": "2024-10-13T04:01:39.000000Z",
      "category": {
        "id": 2,
        "name": "Electronics",
        "description": "Category for electronic products",
        "created_at": "2024-10-13T03:49:51.000000Z",
        "updated_at": "2024-10-13T03:49:51.000000Z"
      }
    }
  ],
  "paging": {
    "current_page": 1,
    "total_pages": 2,
    "page_size": 2,
    "total_items": 7
  }
}
```

Response Body Errors :
```json
{
  "message": "Unauthenticated."
}
```

## Get Single Product

Endpoint : GET /api/products/:productId

Headers:
- Authorization : Bearer Token

Response Body Success :
```json
{
  "data": {
    "id": 3,
    "name": "Laptop office",
    "price": 1300,
    "stock": 10,
    "category_id": 2,
    "created_at": "2024-10-13T04:01:39.000000Z",
    "updated_at": "2024-10-13T04:01:39.000000Z",
    "category": {
      "id": 2,
      "name": "Electronics",
      "description": "Category for electronic products",
      "created_at": "2024-10-13T03:49:51.000000Z",
      "updated_at": "2024-10-13T03:49:51.000000Z"
    }
  }
}
```

Response Body Errors :
```json
{
  "message": "Unauthenticated."
}
```

## Update Product

Endpoint : PUT /api/products/:productId

Headers:
- Authorization : Bearer Token

Request Body
```json
{
    "id": 1,
    "name": "Laptop office",
    "description": "High-performance laptop",
    "price": 1299.99,
    "stock": 10,
    "category_id": 3
}
```

Response Body Success :
```json
{   
  "data": {
    "id": 2,
    "name": "Laptop Gaming",
    "price": 1299.99,
    "stock": 10,
    "category_id": 2,
    "created_at": "2024-10-13T04:01:30.000000Z",
    "updated_at": "2024-10-13T06:42:47.000000Z"
  }
}
```

Response Body Errors :
```json
{
  "status": "error",
  "message": "Validation failed",
  "errors": {
    "category_id": [
      "The selected category id is invalid."
    ]
  }
}
```

## Delete Product

Endpoint : DELETE /api/products/:productId

Headers:
- Authorization : Bearer Token

Response Body Success :
```json
// no content
```

Response Body Errors :
```json
{
      "message": "Unauthenticated."
}
```
