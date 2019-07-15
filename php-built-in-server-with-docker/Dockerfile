FROM php:latest

WORKDIR /app
RUN echo '<?php\necho "testttttttt - ".date("Y-m-d H:i:s")."\\n";' > index.php 

EXPOSE 80

CMD php -S 0.0.0.0:8080 index.php

