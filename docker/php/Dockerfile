FROM php:8.2-apache

# 安裝 intl 相關套件及其他常見 PHP 擴充
RUN apt-get update && apt-get install -y \
    zip unzip git libzip-dev libpng-dev libonig-dev libxml2-dev libicu-dev \
    && docker-php-ext-install pdo pdo_mysql mysqli zip intl

# 啟用 Apache rewrite 模組
RUN a2enmod rewrite

# 設定 CI4 預設 public 目錄為網站根目錄
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/000-default.conf


# 安裝 Xdebug（建議 3.x）
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# 複製自定 php.ini 設定（看第 4 步）
COPY ./docker/php/conf.d/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini