Алексей Рябин

Для проверки проекта можно обойтись без подключения к БД. Я проверял проект по выводу синтаксиса SQL в окне браузера.
Чтобы поставить проект, нужен веб-сервер. Скопировать проект в директорию веб-сервера, либо настроить пути в конфигах веб-сервера на папку с проектом.

После того как Вы откроете main.php, то будет выведено в окно браузера следущее:
________________________________________________________________________________

SELECT * FROM autoshop.users WHERE name = alex LIMIT 1

INSERT INTO autoshop.users(name, age, mail) VALUES ('tom', 25, 'tom@mail.ru')

UPDATE autoshop.users SET name = Alex WHERE name = alex

DELETE FROM autoshop.users WHERE name = alex AND age = 12

SELECT * FROM autoshop.users ORDER BY age DESC
________________________________________________________________________________

Это тестовые запросы через QueryBuilder для показа.
