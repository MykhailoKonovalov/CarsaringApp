# Drive-Yourself.ua - це сайт для оренди автомобілів в формі каршерінгу. 
Просто зайдіть на сайт, знайдіть найближчий автомобіль на карті та їдьте на ньому куди завгодно.

## Планується розробка функціоналу:

0. реєстрація та авторизація користувачів
1. верифікація документів адміністратором
2. облік автомобілів компанії
3. облік тарифів компанії
4. облік клієнтів компанії
5. облік поїздок
6. бронювання автомобіля на карті
7.завершення поїздки та занесення даних в базу
## Stack технологій проекту:
    - Docker (working environment) 
    - Laravel+MySQL (backend) 
    - Vue+Bootstrap (frontend)

## Гід по установці:
1. Клонувати репозитоій 
- git clone git@github.com:MykhailoKonovalov/CarsaringApp.git
2. Додати необхідні дані в src/.env файл в папці 
3. Запустити проект
- docker-compose build app
- docker-compose up -d
4. Згенерувати ключі та зберегти конфігурацію
- docker-compose exec app bash
- php artisan key:generate
- php artisan config:cache
5. Для роботи з бд через консоль
- docker-compose exec db bash
- mysql -u username -p
- password
6. Налаштувати фронтенд
- docker-compose build app
- composer require laravel/ui
- php artisan ui vue
- exit
- docker-compose run --rm node npm install
- docker-compose run --rm node npm run dev

Хай поможе мені бог реалізувати хоча б щось із задуманого)))