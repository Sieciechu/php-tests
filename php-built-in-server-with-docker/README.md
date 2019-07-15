It can be also run with docker command:
docker container run --rm -t --name "phpserver"$(date +"%H%M%S") --expose 80 -p 8080:80 -w /app -v $PWD:/app php php -S 0.0.0.0:80 index.php

