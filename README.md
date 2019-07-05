<p style="text-align:center; margin: 1px auto;">
    <img src="./public/images/logo.png" width="90" height="" style="text-align:center; margin: 10px auto;" />
</p>

# Proof Digital Media Group

## Installation :-
### Step 1: Cloning Repository
<p>Begin by cloning this repository to your local server as follows</p> 

``` 
git clone https://github.com/octs-SA/fossil.git 
```

### Step 2: Installing Components
<p>
Before you run this command make sure you installed composer on your machine or you can get it here <a href="https://composer.org/downloads">Composer</a>
Now you need to get all components used in this project as follows:
</p>

``` 
composer install 
```

<p>Once done you need to install one more components that will help alot in styling. Make sure you have NodeJS installed too:</p>

``` 
npm install 
```

or

```
 yarn 
```

### Step 3: Configuring Database
<p>
let's begin by creating .env file then configure database according to your specification, and you must make sure you created that database first.
</p>

Run: 
``` 
cp .env.example .env 
```

once done then add encryption key

``` 
php artisan key:generate
```

now add database information to .env file as follows:

``` 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=proof
DB_USERNAME=root
DB_PASSWORD=
```

Once done then migrate all tables to the database created:

```
php artisan migrate
````

Then now you can run it if you set virtual environment for it or you can simply just run the following command and add the results to your browser:

```
php artisan serve
```

Or 

If you have local server set-up then navigate to this site according to your server configuration

# Support
