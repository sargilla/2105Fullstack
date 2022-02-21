# Clase Laravel 2

Primero vamos a armar el layout para todas nuestras vistas

Hacer un archivo layout.blade.php dentro de la carpeta views y ponerle:

```php
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Mundos E - @yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand mr-auto" href="#">{{ config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/productos">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/quienes-somos">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacto">Contacto</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container">
        @yield('contenido')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>


```

Todas las paginas que creemos extenderán a la plantilla:

```php
@extends('layout')
@section('title', 'Page Title')

@section('contenido')
<div class="row my-5">
    <h1>
        Home
    </h1>
    <p>Esta es nuestra pagina principal</p>
</div>
@endsection

```

Vamos a hacer una lista de productos para implementar un crud en base de datos.

-   Crear una ruta para ver todos los productos
-   Crear un controlador para productos (ProductoController) (usar -r en el comando para que nos cree los metodos)
-   Crear el modelo Producto
-   Crear la migración para la tabla productos (nombre, descripcion y precio)
-   Crear la vista principal y un botón a crear producto
-   Crear la ruta para el formulario de creación
-   Crear la vista del formulario de creación

```html
<form action="{{ route('productos.store')}}" method="POST">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input
            type="text"
            class="form-control"
            id="nombre"
            placeholder="ingrese un nombre"
            name="nombre"
        />
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label"> Descripción </label>
        <textarea
            class="form-control"
            id="descripcion"
            rows="3"
            name="descripcion"
        ></textarea>
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input
            type="number"
            min="0"
            step="0.1"
            class="form-control"
            id="precio"
            name="precio"
            value="0"
        />
    </div>
    <button type="submit" class="btn btn-primary">Crear Producto</button>
</form>
```

-   Crear la ruta post para recibir los datos
-   Crear el metodo en el ProductoController store que guardará el producto en la db y redireccionar a todos los productos.
-   Pasar los productos en la vista index y hacer un foreach en la vista de todos los productos para verlos.

```html
<div class="col col-md-3 mb-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">titulo</h5>
            <p class="card-text">descripcion</p>
        </div>
        <div class="card-footer d-flex justify-content-around">
            <a href="#" class="btn btn-secondary">Editar</a>
            <form action="">
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
        </div>
    </div>
</div>
```

-   Ponerle a cada uno el boton de editar
-   Hacer la vista editar
-   Hacer la ruta para editar y el metodo update en el controlador
-   En la lista de productos ponerle a cada uno el botón borrar (tiene que ser un formulario)
-   Hacer la ruta de borrado (delete) y el metodo delete en el controlador
-   Mostrar mensaje flash de articulo borrado

**Tip:** Cuando vamos a crear un crud podemos hacer:

```cmd
 php artisan make:model Producto -mrc
```

Esto creará el modelo, la migración y el controlador
