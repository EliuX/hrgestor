# hrgestor
PHP programming test made by Experteam during a work enterview

## Instructions

1. For each change made to the structure of an entity please execute:

```
  php app/console doctrine:generate:entities AppBundle
```

2. Afterwards generate the database in the folder `app/data`. Please create the folder:

```
 mkdir -p app\data   
```

3. Generate/Update the data schema:

```
 php app/console doctrine:schema:update --force
```

4. The module [DoctrineFixturesBundle](https://github.com/doctrine/DoctrineFixturesBundle) was installed for migrations:

```
 php app/console doctrine:fixtures:load

```

5. Last but not least, make sure your database configuration has the right credentials in `/app/config/parameters.yml`.

6. Execute the application

```
 php app/console server:run
```

Thats it.

