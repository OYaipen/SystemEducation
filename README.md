# SystemEducation

SPA para la administración de colegios, modulos con autenticación de usuarios y rutas protegidas

## Instralación

Primero Instale ejecute las instalaciones composer y npm.

```bash
composer install
npm install
```
Copie el archivo ".env.example"
```bash
linux: cp .env.example .env
```
```cmd
windows: copy .env.example .env
```

Modifique:

```env
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
Genere la APP_KEY:
```bash
php artisan key:generate
```
Deploying Passport:
```bash
php artisan passport:keys
```

Ejecute la el comando compilar vue:
```bash
npm run watch
```

Ejecute la el comando para levantar el servidor:
```bash
php artisan serve
```
## License
[MIT](https://choosealicense.com/licenses/mit/)