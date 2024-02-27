# FROM php:8.2
# RUN apt-get update -y && apt-get install -y openssl zip unzip git libpq-dev
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# RUN docker-php-ext-install pdo mbstring
# WORKDIR /app
# COPY . /app
# RUN composer install

# CMD php artisan serve
# EXPOSE 8000
FROM php:8.2-fpm

# ARG user=root
# ARG uid=1000

RUN apt-get update && apt-get install -y default-mysql-client

RUN apt update && apt install -y \
    vim \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev

RUN apt clean && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# RUN useradd -G www-data,root -u $uid -d /home/$user $user
# RUN useradd -G www-data,root
# RUN mkdir -p /home/$user/.composer && \
    # chown -R $user:$user /home/$user
COPY .env.example .env
WORKDIR /var/www
COPY . /var/www
RUN composer install

CMD ["sh", "-c", "php artisan serve --host=0.0.0.0 --port=8000"]
EXPOSE 8000