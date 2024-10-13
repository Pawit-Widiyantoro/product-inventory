# Category API Spec

## Create Category API

Endpoint : POST /api/categories

Headers : 
- Authorization : Bearer Token

Request Body :
```json
{
    "name": "sports",
    "description": "Category for electronic products"
}
```

Response Body Success :
```json
{
    "data": {
        "name": "food",
        "description": "Category for food and beverages products",
        "updated_at": "2024-10-13T06:55:42.000000Z",
        "created_at": "2024-10-13T06:55:42.000000Z",
        "id": 4
    }
}
```

Response Body Errors :
```json
{
  "status": "error",
  "message": "Validation failed",
  "errors": {
    "name": [
      "The name field is required."
    ]
  }
}
```

## Get Category API

Endpoint : GET /api/categories

Headers : 
- Authorization : Bearer Token

Response Body Success :
```json
{
  "data": [
    {
      "id": 2,
      "name": "Electronics",
      "description": "Category for electronic products",
      "created_at": "2024-10-13T03:49:51.000000Z",
      "updated_at": "2024-10-13T03:49:51.000000Z"
    },
    {
      "id": 3,
      "name": "sports",
      "description": "Category for electronic products",
      "created_at": "2024-10-13T03:50:11.000000Z",
      "updated_at": "2024-10-13T03:50:11.000000Z"
    },
    {
      "id": 4,
      "name": "food",
      "description": "Category for food and beverages products",
      "created_at": "2024-10-13T06:55:42.000000Z",
      "updated_at": "2024-10-13T06:55:42.000000Z"
    }
  ]
}
```

Response Body Errors :
```json
{
  "message": "Unauthenticated."
}
```

## Put Category API

Endpoint : PUT /api/categories/:categoryId

Headers : 
- Authorization : Bearer Token

Request Body :
```json
{
    "name": "Electronic",
    "description": "Category for electronic products"
}
```

Response Body Success :
```json
{
  "data": {
    "id": 2,
    "name": "Electronic",
    "description": "Category for electronic products",
    "created_at": "2024-10-13T03:49:51.000000Z",
    "updated_at": "2024-10-13T06:59:06.000000Z"
  }
}
```

Response Body Errors :
```json
{
  "status": "error",
  "message": "Validation failed",
  "errors": {
    "name": [
      "The name field is required."
    ]
  }
}
```

## Delete Category API

Endpoint : DELETE /api/categories/:categoryId

Headers : 
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