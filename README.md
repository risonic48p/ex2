<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Задание
Необходимо реализовать консольную artisan-команду в Laravel для работы с интервалами.  
Требования к реализации:  

1.  Создать миграцию для таблицы intervals со следующей структурой:
```
CREATE TABLE intervals (
    id SERIAL PRIMARY KEY,
    start INTEGER NOT NULL,  -- начало отрезка
    end INTEGER DEFAULT NULL -- конец отрезка или NULL для луча
);
```
  
2.  Создать сидер, который добавит 10,000 случайных записей в таблицу intervals.

3.  Создать Artisan-команду intervals:list, которая принимает аргументы: ```intervals:list --left=N --right=M```  
-  Команда должна извлекать из БД интервалы, пересекающиеся с интервалом [N, M].
-  Поиск должен выполняться с использованием Query Builder.
-  Выводить результат в виде таблицы в консоли.  
        
Пример вызова команды
```php artisan intervals:list --left=15 --right=30```  


## Инструкция по запуску

-  Установка зависимостей из компосера  
   ```composer install```

-  Выполнить миграции  
   ```php artisan migrate```

-  Заполнить базу тестовыми значениями  
   ```php artisan db:seed```

-  Проверить корректность установки  
   ```php artisan serve```

-  Вызвать команду нахождения пересечения интервалов  
   ```php artisan intervals:list --left=15 --right=30```
