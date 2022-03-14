# Apis 2

-   Finalizamos crud api.
-   Envio de correos.

## Enviando correos desde la app
Ingresar en: [Mailtrap](https://mailtrap.io/) y crear una cuenta.
Luego para recuperar los datos que vamos a necesitar vamos a:

**Demo Inbox → SMTP Settings**

Una vez ahi seleccionamos Laravel7+ en el select con label (Integrations)

Nos mostrara los siguiente:

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=sa54dfasd8f48as
MAIL_PASSWORD=545sd54f44h55h
MAIL_ENCRYPTION=tls
```

Estos datos los compararemos con nuestro .env (dentro del raíz de nuestro proyecto Laravel) y y asignamos los datos obtenidos de mailtrap en nuestro .env :

MAIL_USERNAME=sa54dfasd8f48as
MAIL_PASSWORD=545sd54f44h55h


En nuestro proyecto creamos el correo:

```cmd
php artisan make:mail MensajeContacto --markdown=mensaje

```

