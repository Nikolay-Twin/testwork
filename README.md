## Disclaimer
В ТЗ были условия использовать версию PHP не выше 5.6 и не использовать сторонних библиотек.
Вcе до единой строчки написаны мной, правда в разное время. Пришлось подработать под 5.6))
Так что тут не два файла в лоб, а какая-никакая структура

## Description

SPA архитектура, REST-full, построено на контейнере зависимостей по стандарту PSR-11 и мидлваров PSR-15 с использованием HTTP-абстракции PSR-7. Правда нет PSR интерфейсов, така как в ТЗ было условие ничего стороннего не использовать.

В основе State Mashinе cобственного производства.

Построено по схеме отдельных "пустых" контроллеров и отдельных экшенов, что делает систему гибкой, прозрачной и производительной.



## Usage

1. Склонировать/скачать

2. Прописать хост на директорию web

2. Создать базу данных test (root null) либо настроить конфигу config/Maain.php

3. В корне выполнить консольную команду 

``./cli migrate``

4. Вуаля.
