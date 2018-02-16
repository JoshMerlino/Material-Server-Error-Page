# Material-Server-Error-Page

download the error folder then in your htaccess send all error requests to `/error/`

<hr>

demo https://amula.000webhostapp.com/foo

<hr>

```
ErrorDocument 300 /error/
ErrorDocument 400 /error/
ErrorDocument 401 /error/
ErrorDocument 402 /error/
ErrorDocument 403 /error/
ErrorDocument 404 /error/
ErrorDocument 405 /error/
ErrorDocument 406 /error/
ErrorDocument 500 /error/
ErrorDocument 502 /error/
ErrorDocument 503 /error/
ErrorDocument 504 /error/
```
