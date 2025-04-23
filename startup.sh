git clone https://github.com/hangalito/codemasters
cd codemasters
npm install
composer install
cp .evn.example .env
php artisan key:generate

echo "Starting the application"
echo "You still have to populate the data inside de 'database' folder into the database"

php artisan serve

