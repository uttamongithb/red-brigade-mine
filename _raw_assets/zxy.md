composer install
.\php82\php.exe artisan migrate --force
.\php82\php.exe artisan db:seed --force
.\php82\php.exe artisan key:generate
.\php82\php.exe artisan serve
