# ALIAS
Los ALIAS se usan para darle un nombre temporal y más amigable a las tablas, columnas y funciones. 
```sql
SELECT nombre_columna1 AS alias_nombre_columna1
    FROM nombre_tabla;
```

Ejemplo de alias de columna
```sql
SELECT razon_social_cliente AS nombre
    FROM cliente
    WHERE nombre LIKE 'a%';
```

Ejemplo de alias de tabla
```sql
SELECT nombre, apellido, edad
FROM alumnos_comision_inicial AS alumnos;
```

De este modo, podemos darle alias a las columnas y tablas que vamos trayendo y hacer más legible la manipulación de
datos, teniendo siempre presente que los alias no modifican los nombres originales en la base de datos.