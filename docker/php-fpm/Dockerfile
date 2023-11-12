FROM php:8.2-fpm

# Pass Args
ARG USER_NAME
ARG GROUP_NAME

# Add user and group
RUN groupadd -g 1000 ${GROUP_NAME} && useradd -m -u 1000 -g ${GROUP_NAME} ${USER_NAME}

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd
 
# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy source with permision
COPY --chown=${GROUP_NAME}:${USER_NAME} ./source /var/www

# Set default user
USER ${USER_NAME}
