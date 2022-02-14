1 - Traer todos los actores de la tabla actores.

```sql
SELECT * FROM actors;
```

2 - Traer todos los títulos y sus premios de la tabla movies.

```sql
SELECT title, awards FROM movies;
```

3 - Obtener la película Titanic por medio del nombre.

```sql
SELECT * FROM `movies` WHERE  title LIKE '%Titanic%';
```

4 - Obtener todas las películas que su fecha de estreno sea mayor a octubre de 1999 y menor a diciembre del 2004.

```sql
SELECT * FROM `movies` WHERE release_date > "1999-10-01" AND release_date < "2004-12-01";

SELECT * FROM `movies` WHERE release_date BETWEEN "1999-10-01" AND "2004-12-01";
```

5 - Obtener la serie "Person of interest" por medio de su id.
6 - Obtener los episodios número 2 de todas las series.
7 - Obtener todas las películas que terminan con la letra 'a'.
