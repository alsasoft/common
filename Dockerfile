FROM php:5.6.40-fpm-jessie

# Comandos de consola adicionales
RUN echo "alias egrep='egrep --color=auto'" >> /root/.bashrc
RUN echo "alias fgrep='fgrep --color=auto'" >> /root/.bashrc
RUN echo "alias grep='grep --color=auto'" >> /root/.bashrc
RUN echo "alias l='ls -CF'" >> /root/.bashrc
RUN echo "alias la='ls -A'" >> /root/.bashrc
RUN echo "alias ll='ls -alF'" >> /root/.bashrc
RUN echo "alias ls='ls --color=auto'" >> /root/.bashrc

# Instalación de módulos
RUN apt-get update && apt-get install -y zip git curl cron vim zlib1g-dev libssl-dev libxml2-dev

# Instlación de extesiones PHP
RUN docker-php-ext-install -j$(nproc) bcmath mbstring pdo pdo_mysql soap zip pcntl

# Código de la aplicación
COPY ./ /var/www/html/

RUN rm -rf ./vendor/ ./var/ .env ./composer.phar

# Instalación de composer
RUN curl --silent --show-error https://getcomposer.org/installer | php

# Instalación de symfony
#RUN php -d memory_limit=-1 composer.phar install
#RUN php -d memory_limit=-1 composer.phar update nothing
#RUN php -d memory_limit=-1 composer.phar install --no-interaction --optimize-autoloader --prefer-dist --no-progress --no-suggest --no-dev -vvvvv

# Exposición del puerto
EXPOSE 8080

# Comando de ejecución
CMD ["php","-S","0.0.0.0:8080"]
