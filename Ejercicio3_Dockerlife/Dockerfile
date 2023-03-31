FROM ubuntu:18.04
MAINTAINER Mi nombre "anacachafeiro"
RUN apt-get update && apt-get install -y apache2
COPY index.html /var/www/html
EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
