FROM golang:1.14 as mhsendmail-builder
RUN go get github.com/mailhog/mhsendmail

FROM php:7.2.18-fpm
COPY --from=mhsendmail-builder /go/bin/mhsendmail /usr/local/bin/mhsendmail
RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini

WORKDIR /app

