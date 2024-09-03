<<<<<<< HEAD
<h1>weather cities</h1>

# Aplicación de Clima y Conversión de Moneda

## Descripción del Proyecto
Esta aplicación permite a los usuarios consultar el clima actual en una ciudad específica y convertir su presupuesto de viaje de pesos colombianos a la moneda local de la ciudad seleccionada.

## Tecnologías Utilizadas
- **Backend**: Laravel 8.x
- **Frontend**: Bootstrap 5.x, jQuery
- **Base de Datos**: MySQL
- **APIs**: OpenWeatherMap (Clima), FastForex (Conversión de Moneda)

## Instalación

### Requisitos Previos
- PHP 7.x o superior
- Composer
- XAMPP
- Laravel CLI

### Pasos de Instalación
1. Clona el repositorio:
    ```bash
    git clone https://github.com/Imfelipe487/weather_cities-.git
    cd nombre-del-repositorio
    ```
2. Instala las dependencias:
    ```bash
    composer install
    ```

3. Ejecuta las migraciones y seeders:
    ```bash
    php artisan migrate --seed
    ```

4. Inicia el servidor de desarrollo:
    ```bash
    php artisan serve
    ```

## Uso
1. Accede a la aplicación en `http://localhost:8000`.
2. Selecciona una ciudad y proporciona tu presupuesto en pesos colombianos para obtener el clima y la conversión de moneda.


## APIs Utilizadas
- [OpenWeatherMap](https://openweathermap.org/api) - Para obtener el clima.
- [FastForex](https://fastforex.io/) - Para la conversión de monedas.
