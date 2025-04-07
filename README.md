<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Задание

Создать блог на Laravel.

1. Основной сущностью является статья (article). Свойства статьи  
- Заголовок (обязательное, не более 255 символов)
- Автор (не более 100 символов, может быть пустым)
- Бриф (обязательно, не более 500 символов)
- Полный текст (обязательное)
- Дата создания (обязательное)  

2. На главной странице выводится постраничный список статей (название, автор и бриф), с каждой статьи есть ссылка на полную версию статьи. На одну страницу выводим не более 5 статей, более новые статьи выводятся первыми.    

3. По урл /article/{article} выводим соответствующую статью в полном виде (название, автор, полный текст статьи)    

4. По урл /new доступна форма для добавления новой статьи. В случае ошибки при добавлении статьи вывести форму с сохранением заполненных данных и списком ошибок    

5. Можно использовать любые js и css библиотеки и фреймворки при необходимости    


Требования к реализации
- Валидация запросов при добавлении статьи
- Разделение приложения на слои (сервисный слой, слой базы и тд)
- Создание базы и наполнение с использованием стандартных инструментов Laravel  


Стек для выполнения задачи
    • php 8.0 и выше
    • laravel 10 и выше
    • mysql / mariadb
    • Docker (по желанию)


## Инструкция по запуску

-  Установка зависимостей из компосера  
   ```composer install```

-  Создать БД и отконфигурировать подключение к ней в файле .env

-  Выполнить миграции  
   ```php artisan migrate```

-  Заполнить базу тестовыми значениями  
   ```php artisan db:seed```  

-  Установить зависимости и собрать фронтенд  
   ```npm install```  
   ```npm run build```  

-  Запустить проект в тестовом режиме  
   ```php artisan serve```  

-  Проверить функционал по адресу  
   ```http://127.0.0.1:8000/```

-  Запуск тестов  
   ```php artisan test```
