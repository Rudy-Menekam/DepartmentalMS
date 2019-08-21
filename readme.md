## Departmental Management System

Enter your description here

### Front-end view 

<img src="public/img/front-view-ms.png">

### Back-end view 
Generated with [QuickAdminPanel](https://quickadminpanel.com)

### How to setup

- `git clone https://github.com/Rudy-Menekam/DepartmentalMS.git`
- `cd DepartmentalMS`
- `composer install`
- `cp .env.example .env`
- `php artisan key:gen`

*Now create an empty database in mysql with any name of your choice. Add database credentails to `.env`*

- `php artisan migrate --seed`

- `php artisan serve`

Credentials to log in:

Email: admin@admin.com

Password: password

![Back-end view](http://laraveldaily.com/wp-content/uploads/2017/08/Screen-Shot-2017-08-23-at-1.34.35-PM.png)

### License


