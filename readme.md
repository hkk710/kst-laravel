#KESAVAPURAM SREEKRISHNASWAMY TEMPLE
This website is created for **KESAVAPURAM SREEKRISHNASWAMY TEMPLE**<br>
This work was done in laravel.
<br>To know how to install laravel in your computer please visit [Laravel](https://laravel.com/docs/5.3)<br>
For viewing this html please follow the following instructions:
##Instructions
###For windows:
- Clone this Repo
- Make sure you have php and composer installed in your system
- cd to the main folder of the repo
- Then type `composer install`
- Then `copy .env.example .env`
- Then go to [phpmyadmin](http://localhost/phpmyadmin/) and create a database with name 'kst'
- Then `php artisan migrate`
- Then `php artisan key:generate`
- Type `php artisan serve`
- Goto [localhost:8000](http://localhost:8000/)

###For Linux:
- Clone this Repo
- Make sure you have php and composer installed in your system
- cd to the main folder of the repo
- Type `composer install`
- Type `chmod -R 777 bootstrap/cache`
- Type `cp .env.example .env`
- open the .env file and change the value of 'DB_PASSWORD' from blank to your linux password
- Then go to [phpmyadmin](http://localhost/phpmyadmin/) and create a database with name 'kst'
- Then `php artisan migrate`
- Type `php artisan key:generate`
- Type `php artisan serve`
- Goto [localhost:8000](http://localhost:8000/)

###For Editing:
- We have used [Sass](http://sass-lang.com/) as css processor.
- Please edit the css file in `kst-laravel/resources/assets/sass/main.scss`
- After the editing is completed please use `gulp --production` command in terminal
- To know how to install gulp please visit [here](https://laravel.com/docs/5.3/elixir#installation)
