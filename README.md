# HTTP STATUS CODES HELPER in PHP
[HTTP Status Codes](https://httpstatuses.com/) helper for PHP projects based on 


## Usage

If you want to show the code for the following description
```php
use CodingMatters\Http\StatusCode;
StatusCode::FORBIDDEN; // returns 403
```

If you want to show the description based on the code
```php
use CodingMatters\Http\StatusResponse;
StatusResponse::CODE_200; // returns "Ok"
```


## Available helper functions:

### Informational
```php
use CodingMatters\Http\StatusCode;

StatusCode::CONTINUE;
StatusCode::SWITCHING_PROTOCOL;
StatusCode::PROCESSING;
```

### Successful
```php
use CodingMatters\Http\StatusCode;

StatusCode::OK;
StatusCode::CREATED;
StatusCode::ACCEPTED;
StatusCode::NON_AUTHORITATIVE_INFORMATION;
StatusCode::NO_CONTENT;
StatusCode::RESET_CONTENT;
StatusCode::PARTIAL_CONTENT;
StatusCode::MULTI_STATUS;
StatusCode::ALREADY_REPORTED;
StatusCode::IM_USED;
```

### Redirection
```php
use CodingMatters\Http\StatusCode;

StatusCode::MULTIPLE_CHOICES;
StatusCode::MOVED_PERMANENTLY;
StatusCode::FOUND;
StatusCode::SEE_OTHER;
StatusCode::NOT_MODIFIED;
StatusCode::USE_PROXY;
StatusCode::TEMPORARY_REDIRECT;
StatusCode::PERMANENT_REDIRECT;
```

### Client Error
```php
use CodingMatters\Http\StatusCode;

StatusCode::BAD_REQUEST;
StatusCode::UNAUTHORIZED;
StatusCode::PAYMENT_REQUIRED;
StatusCode::FORBIDDEN;
StatusCode::NOT_FOUND;
StatusCode::METHOD_NOT_ALLOWED;
StatusCode::NOT_ACCEPTABLE;
StatusCode::PROXY_AUTHENTICATION_REQUIRED;
StatusCode::REQUEST_TIMEOUT;
StatusCode::CONFLICT;
StatusCode::GONE;
StatusCode::LENGTH_REQUIRED;
StatusCode::PRECONDITION_FAILED;
StatusCode::PAYLOAD_TOO_LARGE;
StatusCode::REQUEST_URI_TOO_LONG;
StatusCode::UNSUPPORTED_MEDIA_TYPE;
StatusCode::REQUESTED_RANGE_NOT_SATISFIABLE;
StatusCode::EXPECTATION_FAILED;
StatusCode::IM_A_TEAPOT;
StatusCode::MISDIRECTED_REQUEST;
StatusCode::UNPROCESSABLE_ENTITY;
StatusCode::LOCKED;
StatusCode::FAILED_DEPENDENCY;
StatusCode::UPGRADE_REQUIRED;
StatusCode::PRECONDITION_REQUIRED;
StatusCode::TOO_MANY_REQUEST;
StatusCode::REQUEST_HEADER_FIELDS_TOO_LARGE;
StatusCode::CONNECTION_CLOSED_WITHOUT_RESPONSE;
StatusCode::UNAVAILABLE_FOR_LEGAL_REASONS;
StatusCode::CLIENT_CLOSED_REQUEST;
```

### Server Error
```php
use CodingMatters\Http\StatusCode;

StatusCode::INTERNAL_SERVER_ERROR;
StatusCode::NOT_IMPLEMENTED;
StatusCode::BAD_GATEWAY;
StatusCode::SERVICE_UNAVAILABLE;
StatusCode::GATEWAY_TIMEOUT;
StatusCode::HTTP_VERSION_NOT_SUPPORTED;
StatusCode::VARIANT_ALSO_NEGOTIATES;
StatusCode::INSUFFICIENT_STORAGE;
StatusCode::LOOP_DETECTED;
StatusCode::NOT_EXTENDED;
StatusCode::NETWORK_AUTHENTICATION_REQUIRED;
StatusCode::NETWORK_CONNECT_TIMEOUT_ERROR;
```