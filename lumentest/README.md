To run:

`docker container run --rm -it --name "phpserver"$(date +"%H%M%S") --expose 80 -p 8080:80 -w /app -v $PWD:/app php php -S 0.0.0.0:80 -t public`

