# ICC Champions Trophy

This project is managing cricket statistics.

This consists of following features :

* Docker
* Mariadb
* Based on bootstrap 4
* Auth Scaffolding
* Email Verification on registration
* Passport Setup for api auth
* Vue setup

## Steps to install

1. clone this repository:
```
git clone https://github.com/ankit20893/IccChampionsTrophy.git
```
2. Enter the laradock folder and rename env-example to .env.
```
cp env-example .env
```
3. Run your containers:
```
docker-compose up -d nginx mariadb redis workspace 
```
4. Get into the Project
```
docker-compose exec workspace bash
```
2. copy .env.example to .env
```
cp .env.example .env
```
3. install dependencies
```
composer install
```
4. genereate encryption key
```
php artisan key:generate
```
5. create database and update in .env

6. run migrations and seeder for database
```
php artisan migrate:fresh --seed
```
7. generate keys for passport
```
php artisan passport:install
```
8. For File Uploads
```
 php artisan storage:link
```
9. Open your browser and visit localhost: http://localhost. !!!
