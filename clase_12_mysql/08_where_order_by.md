# WHERE y ORDER BY
## WHERE
La funcionalidad del **WHERE** es la de condicionar y filtrar las consultas **SELECT** que se realizan a una base de datos.

```sql
SELECT nombre_columna_1, nombre_columna_2, ...
    FROM nombre_tabla
    WHERE condicion;
``` 

Ejemplo
```sql
SELECT nombre, edad
    FROM usuarios
    WHERE edad > 17;
```

## OPERADORES
=       Igual a
>       Mayor que
>=      Mayor o igual que
<       Menor que
<=      Menor o igual que
<>      Diferente a
!=      Diferente a

IS NULL     Es nulo
BETWEEN     Entre dos valores
IN          Lista de valores
LIKE        Se ajusta a...

## ORDER BY
ORDER BY se utiliza para **ordenar** los resultados de una consulta según el valor de la columna especificada

```sql
SELECT nombre_columna1, nombre_columna2
    FROM tabla
    WHERE condicion
    ORDER BY nombre_columna1;
```

Ejemplo
```sql
SELECT nombre, edad
    FROM usuarios
    WHERE edad > 21
    ORDER BY nombre DESC;
```


