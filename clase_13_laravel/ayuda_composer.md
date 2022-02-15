# Composer

## Iniciar un proyecto

```cmd
composer init
```

Seguimos las instruciones

## Cargar las clases de una carpeta

En el composer.json

```json
"autoload": {
   "classmap" : ["./src"]
}
```

## Actualizar las clases autocargadas

```cmd
composer dump-autoload
```
