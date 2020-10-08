FROM php:7.2-fpm  

# composerのインストール  
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

# git, zip, unzip, vimのインストール  
RUN apt-get update \  
&& apt-get install -y \  
git \
zip \
unzip \
vim

# PDOのインストール  
RUN apt-get update \  
    && apt-get install -y libpq-dev \  
    && docker-php-ext-install pdo_mysql pdo_pgsql  

# 作業ディレクトリの指定  
WORKDIR /var/www/html