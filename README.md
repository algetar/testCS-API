Использование:
1. Получить ответ со списком сущностей
GET http://host/news
2. Получить ответ по ID
GET http://host/news/{ID}
3. Дает возможность обновить сущность
    - Добавить
POST http://host/news
    - Обновить
PUT http://host/news

Тестовое задание

1.	Развернуть приложение на фреймворке Yii2 (шаблон basic)

2.	Завести какую-то сущность (модель), например “новость”. Сделать несколько записей этой сущности.

3.	Изучить спецификацию JSON:API

4.	Сделать компонент (или найти что-то готовое и доработать), который позволит обеспечить работу по формату JSON:API. Нет необходимости реализовывать спецификацию полностью:

    a.	Требуется реализовать работу с сущностью (поле data), ошибками (поле error), важно, что ошибка может быть как ошибкой валидации при обновлении, так и какой-то проблемой с экцепшеном (например рассоединением с БД)
    b.	Не требуется реализовывать links, relationships, пагинацию и прочее
    
5.	Реализовать модуль API, который позволит:

    •	Получить ответ по ID 
    •	Получить ответ со списком сущностей
    •	Дает возможность обновить сущность (тут обязательно следует предусмотреть какие-то правила валидации, чтобы была возможность воспроизвести ошибку которая не даст обновить сущность некорректными данными)
    •	API всегда должно отвечать в корректном формате, независимо от исхода запроса

Важно:
 
    •	Работа должна быть оформлена в виде git-репозитория и выгружена на github.com или gitlab.com (предпочтительно)
    •	Лучше, если код будет оформлен не одним коммитом, в целом желательно проявить при выполнении побольше навыков работы с git, gitlab, фреймворком и показать понимание культуры кода
    •	README.md должен содержать минимальную инструкцию для запуска получившегося приложения и проверки его работы (получение списка сущностей и обновление)

