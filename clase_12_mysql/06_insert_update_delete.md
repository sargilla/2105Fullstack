# INSERT, UPDATE, DELETE
Existen dos formas de agregar datos en una tabla:
- Insertando datos en todas las columnas
- Insertando datos en las columnas que especifiquemos

## INSERT
```sql
INSERT INTO table_name (columna_1, columna_2, columna_3, ...)
VALUES (valor_1, valor_2, valor_3, ...);
```

Especificando columnas
```sql
INSERT INTO usuarios (id, nombre, apellido,)
VALUES (DEFAULT, 'Diego', 'Díaz');
```

Sin especificar columnas
```sql
INSERT INTO usuarios
VALUES (DEFAULT, 'Diego', 'Díaz');
```

## DELETE
Con DELETE podemos borrar información de una tabla. 
Es importante recordar utilizar siempre el **WHERE**

```sql
DELETE FROM nombre_tabla WHERE condicion;
```

```sql
DELETE FROM usuarios WHERE usuario_id = 4;
```
## UPDATE

UPDATE modificará los registros existentes de una tabla. 
Al igual que con DELETE, es importante no olvidar el **WHERE**
```sql
UPDATE nombre_tabla
    SET columna_1 = valor_1, columna_2 = valor_2, ...
    WHERE condicion;
```

Ejemplo:
```sql
UPDATE usuarios
    SET nombre = 'Alfredo', apellido = 'Caseros'
    WHERE id = 1;
```