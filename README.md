# PERSONAL_MesaDePartes
# Proyecto de Login y Registro

Este proyecto es una aplicación web desarrollada con el propósito de proporcionar un sistema de login y registro utilizando PHP, JavaScript y MySQL. Proporciona una forma segura y eficiente de autenticar usuarios y almacenar sus datos de forma persistente en una base de datos.

## Características

- **Login de Usuarios:** Permite a los usuarios autenticarse en la aplicación utilizando sus credenciales.
- **Registro de Usuarios:** Permite a los nuevos usuarios crear una cuenta en la aplicación proporcionando información básica como nombre de usuario, correo electrónico y contraseña.
- **Seguridad:** Utiliza prácticas de seguridad recomendadas para proteger la información sensible de los usuarios, como el hash de contraseñas almacenadas en la base de datos.
- **Interfaz de Usuario Amigable:** La interfaz de usuario está diseñada de manera intuitiva para facilitar la navegación y el uso tanto para usuarios nuevos como experimentados.
## Requisitos
- **Laragon:**full 64 bit, https://laragon.org/download/
- **composer:**https://getcomposer.org/
- - **php:**https://www.php.net/  ,->download ->windowsdownload->Threadsafe->zip->descomprimir zip y mover al disco c
  - agregar al path de las variables del sistema la ubicacion de la carpeta php,->comprobar que se instalo con php -version en CMD
  - 
- **extenciones en visual studio:**
- ab html formatter
-Auto Close Tag
-Book marks
-Bootstrap 4, font awesome 5 .....
-Bracket Pair Color DLW
-Community material team
-Gitlens- Git supercharged
-IntelliCode
-HTML CSS support
-JSON Crack
-JSON to TS
-Live Server
-Live Share
-Live Share extension
-Material Icon Theme
-Material Theme icons
-MySQL
-Mysql-inline-decorator
-Peacock
-PHP debug
-PHP Extension Pack
-PHP Intelefense
-PHP IntelliSense
-Polacode-2022
-PowerShell
-Prettier - code formatter
-Thunder Client
-TODO Highlight
-Todo tree
-Turbo Console Log
## Tecnologías Utilizadas

- **PHP:** Utilizado para el desarrollo del backend de la aplicación, manejo de la lógica del negocio y la interacción con la base de datos.
- **JavaScript:** Utilizado para la validación de formularios y la mejora de la experiencia del usuario en la interfaz.
- **MySQL:** Base de datos relacional utilizada para almacenar la información de usuarios y sus credenciales de forma segura.

## Configuración y Uso

1. **Clonar el Repositorio:** Clona este repositorio en tu máquina local utilizando el comando `git clone`.
2. **Configurar la Base de Datos:** Importa el archivo SQL proporcionado en el repositorio para crear la estructura de la base de datos y las tablas necesarias.
3. **Configurar la Conexión a la Base de Datos:** Modifica el archivo `config.php` con la información de tu servidor de base de datos (host, usuario, contraseña).
4. **Iniciar la Aplicación:** Abre la aplicación en tu navegador y podrás comenzar a utilizar el sistema de login y registro.

## Base de Datos
- CREATE DATABASE mesadepartes;
- CREATE TABLE tm_usuario (
    usu_id INT AUTO_INCREMENT PRIMARY KEY,
    usu_nomape VARCHAR(90) NOT NULL,
    usu_correo VARCHAR(50) NOT NULL,
    usu_pass VARCHAR(200) NOT NULL,
    fech_crea DATETIME DEFAULT CURRENT_TIMESTAMP,
    usu_img VARCHAR(500) DEFAULT NULL,
    fecha_modi DATETIME DEFAULT NULL,
    fecha_elim DATETIME DEFAULT NULL,
    fecha_acti DATETIME DEFAULT NULL,
    est INT(10) DEFAULT 2
);
-igual el documento incluye un respaldo de la base de datos en la carpeta docs.
Tabla para la grafica de paneles solares:
CREATE TABLE renewable_power_generation (
    time DATETIME,
    energy_delta_wh DECIMAL(10,2),
    ghi DECIMAL(10,2),
    temp DECIMAL(5,2),
    pressure INT,
    humidity INT,
    wind_speed DECIMAL(5,2),
    rain_1h DECIMAL(5,2),
    snow_1h DECIMAL(5,2),
    clouds_all INT,
    is_sun INT,
    sunlight_time INT,
    day_length INT,
    sunlight_time_daylength DECIMAL(5,2),
    weather_type INT,
    hour INT,
    month INT
);
Query para importar .csv:
LOAD DATA LOCAL INFILE 'C:/Users/Legion/Downloads/Renewable.csv' //en mi caso particular aqui tengo el .csv
INTO TABLE renewable_power_generation
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
IGNORE 1 ROWS
(time, energy_delta_wh, ghi, temp, pressure, humidity, wind_speed, rain_1h, snow_1h, clouds_all, is_sun, sunlight_time, day_length, sunlight_time_daylength, weather_type, hour, month);

Query para agregar la llave primaria id:
ALTER TABLE renewable_power_generation ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY FIRST;

## Template
-Esta ubicado dentro de la carpeta del proyecto en el folder docs, es la carpeta template donde esta Minia
## Contribución

¡Las contribuciones son bienvenidas! Si tienes ideas para mejorar esta aplicación, no dudes en abrir un issue o enviar un pull request.

## Autor

Este proyecto fue creado por [Julian V](https://github.com/SmartTime16n).

## Licencia

Este proyecto está bajo la Licencia MIT. Consulta el archivo [LICENSE](LICENSE) para obtener más detalles.
