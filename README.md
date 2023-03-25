# WEBG301-GCH1101
How to make it work:

(1) Clone this project

git clone http://github.com/thopd88/WEBG301-GCH1101

(2) Go to sub-project folder

cd WEBG301-GCH1101/Book

(3) Install dependencies

composer update

(4) Copy .env.example to .env

cp .env.example .env

(5) Update .env file with database credentials

(6) Generate app key

php artisan key:generate

(7) Migrate database

php artisan migrate
