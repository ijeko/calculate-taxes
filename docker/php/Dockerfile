FROM php:8.1-fpm-alpine3.15

# Add docker-php-extension-installer script
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# Install dependencies
RUN apk add --no-cache \
    bash \
    curl \
    freetype-dev \
    g++ \
    gcc \
    git \
    icu-dev \
    icu-libs \
    libc-dev \
    libzip-dev \
    make \
    nodejs \
    npm \
    oniguruma-dev \
    yarn \
    openssh-client \
    postgresql-libs \
    jpegoptim optipng pngquant gifsicle \
    rsync \
    shadow \
    sqlite-dev \
    zlib-dev

# Install php extensions
RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions \
    @composer \
    imagick-stable \
    xdebug-stable \
    bcmath \
    calendar \
    exif \
    gd \
    intl \
    pdo_pgsql \
    pdo_sqlite \
    pcntl \
    zip

# Copy php.ini configuration
COPY php.ini /usr/local/etc/php/conf.d/40-custom.ini
# Copy opcache.ini configuration
COPY opcache.ini /usr/local/etc/php/conf.d/opcache.ini

# Add local and global vendor bin to PATH.
ENV PATH ./vendor/bin:/composer/vendor/bin:/root/.composer/vendor/bin:/usr/local/bin:$PATH

# Install PHP_CodeSniffer
RUN composer global require "squizlabs/php_codesniffer=*"

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

# Setup working directory
WORKDIR /var/www

USER 1000:1000

EXPOSE 9000

# The main purpose of a CMD is to provide defaults for an executing container. These defaults can include an executable,
# or they can omit the executable, in which case you must specify an ENTRYPOINT instruction as well.
CMD php-fpm
