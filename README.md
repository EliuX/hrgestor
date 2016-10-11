# hrgestor
Prueba de programación en PHP realizada por Experteam durante la entrevista de trabajo

Por cada cambio que haga en la estructura de una entidad ejecute

```
  php app/console doctrine:generate:entities AppBundle
```

Luego genere la base de datos en la carpeta `app/data`. Crée la carpeta:

```
 mkdir -p app\data   
```

Genere(o actualice) el schema de datos

```
 php app/console doctrine:schema:update --force
```

Se instaló el modulo [DoctrineFixturesBundle](https://github.com/doctrine/DoctrineFixturesBundle) para realizar migraciones

```
 php app/console doctrine:fixtures:load

```

Por ultimo cerciórese de que su configuración de conexion a la base de datos tiene las credenciales correctas
en `/app/config/parameters.yml`.


Ejecute la aplicacion

```
 php app/console server:run
```

Eso es todo.

