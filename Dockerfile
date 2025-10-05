# syntax=docker/dockerfile:1

FROM php:8.2-cli

# Paket yang dibutuhkan Laravel + DB drivers
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpq-dev \
    && docker-php-ext-install pdo_mysql pdo_pgsql bcmath zip \
    && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Install vendor (pakai cache composer.json/lock)
COPY composer.json composer.lock* ./
RUN composer install --no-dev --prefer-dist --no-interaction --no-progress

# Copy seluruh source code
COPY . .

# Permission untuk storage & cache
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# (Opsional) Kalau kamu pakai Vite, hapus komentar blok di bawah ini
# dan biar image membuild asset:
# RUN apt-get update && apt-get install -y curl && \
#     curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
#     apt-get install -y nodejs && \
#     npm ci && npm run build

ENV PORT=10000

# Start Laravel
CMD php artisan config:cache && php artisan route:cache && php artisan view:cache \
 && php artisan storage:link || true \
 && php artisan serve --host 0.0.0.0 --port $PORT
