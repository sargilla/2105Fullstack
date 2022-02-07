# CREATE, DROP Y ALTER

## CREATE TABLE

```sql
CREATE TABLE nombre_de_la_tabla (
    nombre_de_columna_1 TIPO_DE_DATO CONSTRAINT,
    nombre_de_columna_2 TIPO_DE_DATO CONSTRAINT,
);
```
Por Ejemplo: 
```sql
CREATE TABLE post (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(200),
);
```

## FOREIGN KEY
Cuando creemos una columna que contenga una id foránea, será necesario usar la sentencia FOREIGN KEY  para aclarar a
qué tabla y a qué columna hace referencia aquel dato.
```sql
CREATE TABLE ordenes (
    orden_id INT NOT NULL,
    orden_numero INT NOT NULL,
    cliente_id INT,
    PRIMARY KEY (orden_id),
    FOREIGN KEY (cliente_id) REFERENCES clientes(id)
);
```

## DROP TABLE
DROP TABLE borrará la tabla que le especifiquemos en la sentencia.

```sql
DROP TABLE IF EXIST movies;
```

## ALTER TABLE
ALTER TABLE permite alterar una tabla ya existente y va a operar con tres comandos:
- ADD, para agregar una columna
- MODIFY, para modificar una columna
- DROP, para borrar una columna

```sql
ALTER TABLE nombre_de_tabla
    ADD columna3 TIPO_DE_DATO [FIRST|AFTER columna2]
    MODIFY NUEVO_TIPO_DE_DATO
    DROP columna4;
```

#### Agregar un campo:
```sql
    ALTER TABLE movies
        ADD rating DECIMAL(3,1) UNSIGNED NOT NULL;
```

#### Modificar un campo
```sql
ALTER TABLE movies
    MODIFY rating DECIMAL(4,1) UNSIGNED NOT NULL;
```

#### Borrar un campo
```sql
ALTER TABLE movies
    DROP rating;
```

