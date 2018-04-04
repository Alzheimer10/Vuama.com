# Vuama.com 
plataforma que permita la contratación de servicios, donde los pagos y negociaciones sean a través de esta plataforma, que vigile el comportamiento de ambos, de tal manera que si la reputación por mal servicio o pago es baja, se cancela la cuenta, también depurar a los oferentes de servicio, para garantizar en un mayor porcentaje la calidad y cumplimiendo del servicio. Asistir a los clientes para poder tener una mejor experiencia.
http://www.vuama.com/

---
## Uso

### Paso 1:
```
git clone https://github.com/Alzheimer10/Vuama.com.git
```
### Paso 2:
Ahora querrás actualizar o instalar a través del composer.
```
composer update
```
or
```
composer install
```
### Paso 3:
Genera la key de la aplicacion de Laravel
```
php artisan key:generate
```
### Paso 4:
Para este paso tener el .env ya configurado, para poder hacer las migraciones y ejecutar los Seeders
```
php artisan migrate --seed
```

---
## Vendors
- Kbwebs/MultiAuth [Multi auth para Laravel]
- spatie/laravel-permission [Asociar usuarios con permisos y roles]

