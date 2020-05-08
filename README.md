# HTTP's status codes helper functions in PHP
[HTTP Status Codes](https://httpstatuses.com/) helper for PHP projects


## Usage
If you want to show the code for the following message
```php
use CodingMatters\Http\StatusCode;

StatusCode::FORBIDDEN; // returns 403
StatusCode::CREATED; // returns 201
```


## Available helper functions:

### Informational
```php
StatusCode::CONTINUE; // 100
StatusCode::SWITCHING_PROTOCOL; // 101
StatusCode::PROCESSING; // 102
```

### Successful
```php
StatusCode::OK; // 200
StatusCode::CREATED; // 201
StatusCode::ACCEPTED; // 202
StatusCode::NON_AUTHORITATIVE_INFORMATION; // 203
StatusCode::NO_CONTENT; // 204
StatusCode::RESET_CONTENT; // 205
StatusCode::PARTIAL_CONTENT; // 206
StatusCode::MULTI_STATUS; // 207
StatusCode::ALREADY_REPORTED; // 208
StatusCode::IM_USED; // 226
```

### Redirection
```php
StatusCode::MULTIPLE_CHOICES; // 300
StatusCode::MOVED_PERMANENTLY; // 301
StatusCode::FOUND; // 302
StatusCode::SEE_OTHER; // 303
StatusCode::NOT_MODIFIED; // 304
StatusCode::USE_PROXY; // 305
StatusCode::TEMPORARY_REDIRECT; // 307
StatusCode::PERMANENT_REDIRECT; // 308
```

### Client Error
```php
StatusCode::BAD_REQUEST; // 400
StatusCode::UNAUTHORIZED; // 401
StatusCode::PAYMENT_REQUIRED; // 402
StatusCode::FORBIDDEN; // 403
StatusCode::NOT_FOUND; // 404
StatusCode::METHOD_NOT_ALLOWED; // 405
StatusCode::NOT_ACCEPTABLE; // 406
StatusCode::PROXY_AUTHENTICATION_REQUIRED; // 407
StatusCode::REQUEST_TIMEOUT; // 408
StatusCode::CONFLICT; // 409
StatusCode::GONE; // 410
StatusCode::LENGTH_REQUIRED; // 411
StatusCode::PRECONDITION_FAILED; // 412
StatusCode::PAYLOAD_TOO_LARGE; // 413
StatusCode::REQUEST_URI_TOO_LONG; // 414
StatusCode::UNSUPPORTED_MEDIA_TYPE; // 415
StatusCode::REQUESTED_RANGE_NOT_SATISFIABLE; // 416
StatusCode::EXPECTATION_FAILED; // 417
StatusCode::IM_A_TEAPOT; // 418
StatusCode::MISDIRECTED_REQUEST; // 421
StatusCode::UNPROCESSABLE_ENTITY; // 422
StatusCode::LOCKED; // 423
StatusCode::FAILED_DEPENDENCY; // 424
StatusCode::UPGRADE_REQUIRED; // 426
StatusCode::PRECONDITION_REQUIRED; // 428
StatusCode::TOO_MANY_REQUEST; // 429
StatusCode::REQUEST_HEADER_FIELDS_TOO_LARGE; // 431
StatusCode::CONNECTION_CLOSED_WITHOUT_RESPONSE; // 444
StatusCode::UNAVAILABLE_FOR_LEGAL_REASONS; // 451
StatusCode::CLIENT_CLOSED_REQUEST; // 499
```

### Server Error
```php
StatusCode::INTERNAL_SERVER_ERROR; // 500
StatusCode::NOT_IMPLEMENTED; // 501
StatusCode::BAD_GATEWAY; // 502
StatusCode::SERVICE_UNAVAILABLE; // 503
StatusCode::GATEWAY_TIMEOUT; // 504
StatusCode::HTTP_VERSION_NOT_SUPPORTED; // 505
StatusCode::VARIANT_ALSO_NEGOTIATES; // 506
StatusCode::INSUFFICIENT_STORAGE; // 507
StatusCode::LOOP_DETECTED; // 508
StatusCode::NOT_EXTENDED; // 510
StatusCode::NETWORK_AUTHENTICATION_REQUIRED; // 511
StatusCode::NETWORK_CONNECT_TIMEOUT_ERROR; // 599
```