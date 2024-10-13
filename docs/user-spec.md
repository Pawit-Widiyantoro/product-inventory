# User API Spec

## Register

Endpoint = POST /api/register

Request Body
```json
{
    "name" : "john doe",
    "email" : "johndoe@example.com",
    "password": "password123",
    "password_confirmation": "password123"
}
```

Response Body Success
```json
{
    "message": "User registered successfully"
}
```

Response Body Errors
```json
{
    "email": "email already used"
}
```

## Login

Endpoint : POST /api/users/login

Request Body :

```json
{
    "email": "johndoe@example.com",
    "password": "password123"
}
```

Response Body Success :

```json
{
    "message": "Login successfull",
    "user": {
        "id": 1,
        "name": "John Doe",
        "email": "john@example.com",
        "email_verified_at": null,
        "created_at": "2024-10-13T03:33:03.000000Z",
        "updated_at": "2024-10-13T03:33:03.000000Z"
    },
    "token": "4|2VbOeB5QVv9qCP6KvwWyakQRbIXhkj1Cmf6PP88l2ff2a298"
}
```
Response Body Errors :

```json
{
    "message": "Invalid credentials.",
    "errors": {
        "email": [
            "These credentials do not match our records."
        ]
    }

}
```

## Logout

Endpoint : POST /api/logout

Headers :

- Authorization: Bearer Token

Response Body Success :
```json
{
    "message": "Logged out successfully"
}
```

Response Body Errors :
```json
{
    "message": "Unauthenticated."
}
```