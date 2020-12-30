set -x
set -e

apt -y update
apt -y install git coreutils bash make openssh-client patch unzip zip libzip-dev zlib1g-dev
docker-php-source extract
docker-php-ext-install zip

yes | pecl install xdebug

git clone https://github.com/amphp/ext-fiber.git
cd ext-fiber

phpize
./configure
make
make install
make test

mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

# add "extension=fiber.so" to your php.ini for running any script:
echo "extension=fiber.so" >> "$(php -r 'echo php_ini_loaded_file();')"

# Composer settings
printf "# composer php cli ini settings\n\
date.timezone=UTC\n\
memory_limit=-1\n\
" >> "$(php -r 'echo php_ini_loaded_file();')"
