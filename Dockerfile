FROM debian:latest
RUN apt update -y
RUN apt install apache2 libapache2-mod-php php php-mysql -y
RUN apt install nano -y
COPY *.php /var/www/html/
ENV MYSQL_HOST=localhost
ENV MYSQL_USERNAME=root
ENV MYSQL_PASSWORD=123456
ENV MYSQL_DB=estudiante
EXPOSE 80

CMD ["/bin/bash","-c","set -e;apachectl -D FOREGROUND \"$@\""]
