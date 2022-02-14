# Consultas

En relación a la base de datos proporcionada (movies_db), realizar estos ejercicios.

Utilizaremos SELECT | WHERE | ORDER BY / ASC/DESC | LIMIT / OFFSET | BETWEEN / LIKE | Alias

1 - Traer todos los actores de la tabla actores.
2 - Traer todos los títulos y sus premios de la tabla movies.
3 - Obtener la película Titanic por medio del nombre.
4 - Obtener todas las películas que su fecha de estreno sea mayor a octubre de 1999 y menor a diciembre del 2004.
5 - Obtener la serie "Person of interest" por medio de su id.
6 - Obtener los episodios número 2 de todas las series.
7 - Obtener todas las películas que terminan con la letra 'a'.

Para investigar:

8 - Obtener el total de los actores que se llamen Jim. (usar count(\*))
9 - Obtener la suma de los premios que ganaron todas las películas 'La Guerra De Las Galaxias' (usar sum(awards))

# Respuestas

1 - SELECT _ FROM actors
2 - SELECT title, awards FROM movies
3 - SELECT + FROM movies WHERE title = "Titanic"
4 - SELECT _ FROM movies WHERE release*date > '1999-10'AND release_date < '2004-12'
5 - SELECT * FROM series WHERE id = 4
6 - SELECT \_ FROM episodes WHERE number = 2
7 - SELECT \* FROM movies WHERE title LIKE '%a'
8 - SELECT count(\*)FROM actors where first_name = "Jim"
9 - SELECT sum(awards) FROM movies where title like 'La Guerra%'
