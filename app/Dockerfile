# Use PHP with Apache
FROM php:8.1-apache

FROM php:8.1-apache

RUN apt-get update && \
    apt-get install -y libpq-dev && \
    docker-php-ext-install pdo pdo_pgsql && \
	pecl install redis && docker-php-ext-enable redis && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*


# Install PostgreSQL PDO extension
RUN docker-php-ext-install pdo pdo_pgsql

# Copy app files into container
COPY . /var/www/html/

# Enable Apache rewrite module (optional)
RUN a2enmod rewrite
