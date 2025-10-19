# Migration
a migration create a table and sets column into the data base
### How to create a Migration
a command used to create the migration file
```php artisan maka:migration create_jobs_table```
### run the create migration file and save to database
a command used to insert the create table column into the database
```php artisan migrate```
### delete the create migration file from the database
a command used to delete the create migration file that is save into the database
```php artisan migrate:rollback ```

# Factory
used to crate a factory file to generate fake data for testing

### create a factory file
``` php artisan make:factory JobsFactory ```
# Order to create a database table and load the data
1. Migration
2. Factory
3. Model
4. Seeders
5. controllers
6. view (render the data)