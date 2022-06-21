# PHP Local Test

## Build & Run

### Build

```
docker build --platform linux/amd64 -t php-local-test .
```

### Run

```
docker run -d --name Web-PHP --rm -p 80:80 -v `pwd`/html:/var/www/html php-local-test
```