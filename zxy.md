composer install
.\.tools\php74\php.exe artisan migrate --force
.\.tools\php74\php.exe artisan db:seed --force
.\.tools\php74\php.exe artisan key:generate
.\.tools\php74\php.exe artisan serve
