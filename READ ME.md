### Product Application

This application uses OOP concepts and various design patterns to showcase object-oriented thinking in programming.

The main access to this app is the ```index.php``` file that provides a frontend design pattern to provide one entry
point into our application.

The index.php contains an autoloader file ```autoload.php```  located in inc/autoload to provide PSR-0/PSR-4 compliant
loading and starting of session immediately.

Routes are automatically loaded using the ```routes/web.php``` which can provide single access to all route files and
other routes can be added e.g api, broadcast etc routes.

Classes in classes folder are used in providing the business logic when fetching our controllers dynamically (using our
controller factory in ```factories\ControllerFactory``` ) and parsing the right interface to the controller
from ```app.Register.php``` file.

The app ensures single responsibility of every object of the app.

A simple flow chart of data flow from the index page to the database is as follows

```
index.php 
-> routes/web.php
-> app/Request
-> app/Router
-> factories/ControllerFactory
-> Controllers (any of the controllers) 
-> Interfaces (any interface used by the controller) 
-> Repositories (repository attached dynamically to the controller)
-> Classes (class extended by the controller) 
-> models/Model (the model attached to the controller) 
-> DBConnection (any db driver specified) 
```

Data is gotten back from database as follows

``` DBConnection 
-> models/Model (the model from where the request originated e.g ProductDB ) 
-> Classes 
->Repository 
->Controller
-> views/Views (any of the views) 
```

This app uses bootstrap 5 for styling while custom css styling is done using scss in   ```assets/css/app.scss``` and
custom javascript codes can be found in ```assets/js/app.js```

# INSTALLATION
Follow these steps to have you set up and ready to test.

>The Database is controlled from the Connection Driver file located in the databases folder. You can change the database
credentials in that folder and create a new connection type for the queries there. This application is easy to modify to
allow new connections from the ``` databases/ConnectionDriver.php```  file.
>To use app with mariaDb, create a new database in your xampp or wamp or sequel pro. use the table name of your choice
i.e. ```php_product_app``` is the name used for this app's database. Configure your username and password too and
migrate the tables from the server.sql file located in the database folder.
> After successfully uploading the tables to your newly created database,
visit the url ```https://rootfolder/add-demo-data``` to generate demo products for testing purposes.
>Once all tables are created, you will notice a product category record has already been made available in the database because the task does not require us creating a page for adding products category dynamically
> Click on the add button to add new products and be sure to provide an sku that correspond to the product type you are uploading.