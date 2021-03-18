#!/bin/bash

echo "==================================== Start `date +%Y%m%d-%T` ===================================="

echo "#Starting to php artisan config:cach......"

php artisan config:cach

echo "#Starting to composer dump-autoload......"

composer dump-autoload
php artisan config:cache && php artisan config:clear && composer dump-autoload -o

echo "#Migrate e Seeder......"
php artisan migrate

php artisan db:seed

echo "Rotina terminou em: `date +%Y-%m-%d_%H:%M:%S`"

echo "====================================  End `date +%Y%m%d-%T`  ===================================="

