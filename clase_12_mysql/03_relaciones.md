# RELACIONES
Las relaciones indican cómo se van a relacionar dos tablas. Dentro de una base de datos existen 3 tipos de relaciones:
-> de uno a uno
-> de uno a muchos
-> de muchos a muchos

## ¿Cómo podemos saber cómo se relaciona una entidad con otra?
Planteando un ejemplo concreto que nos ayude a definir cómo interactúan esas dos entidades entre sí

## UNO A UNO 1:1
Un usuario tiene sólo una dirección. Una dirección pertenece sólo a un usuario.

USUARIOS            DIRECCIONES
id(PK)              id(PK)
nombre              localidad
apellido            calle  
direccion_id(PK)    altura
                    piso

## UNO A MUCHOS 1:M
Un cliente puede tener muchas tarjetas. Una tarjeta pertenece sólo a un cliente.

Para establecer la relación colocamos la clave primaria del cliente en la tabla de tarjetas, indicando que esa tarjetas está asociada a un usuario en particular.

CLIENTES 1       M    TARJETAS
id(PK)              id(PK)
nombre              nombre
apellido            cliente_id (PK Cliente)


## MUCHOS A MUCHOS M:M
Un cliente puede comprar muchos productos. Un producto puede ser comprado por muchos clientes.

En las relaciones M:M, en la base de datos, la relación en sí pasa a ser una tabla. Esta tabla intermedia -también conocida como **tabla pivot**, tiene como mínimo 3 datos: 
- una clave primaria (PK) 
- dos claves foráneas (FK)
cada una haciendo referencia a cada tabla de la relación.

CLIENTES        CLIENTE_PRODUCTO        PRODUCTOS
id(PK)          id(PK)                  id(PK)
nombre          producto_id(FK)         nombre
apellido        cliente_id(FK)    
