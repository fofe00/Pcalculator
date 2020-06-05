
## AINIXCal ##
 
### Installation ###
 
Add Scafold to your composer.json file to require Scafold :
```
    require : {
        "laravel/framework": "5.8.*",
        "ainix/calculator": "dev-master"
    }
```
 
Update Composer :
```
    composer update
```
 
The next required step is to add the service provider to config/app.php :
```
    'Ainix\Calculator\CalculatorServiceProvider',
```
 
### Publish ###
 
The last required step is to publish views and assets in your application with :
```
    php artisan vendor:publish
```
 
Congratulations, you have successfully installed calculator !
