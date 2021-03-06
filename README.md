## Getting Started

It's super easy to get the application up and running.

1. clone the project

```shell
git clone https://github.com/zubayer-hossain/miaccount_test.git
```

2. install the dependencies

```shell
cd miaccount_test
composer install
```

3. Copy `.env.example` to `.env`

```shell
cp .env.example .env
```

4. Generate application key

```shell
php artisan key:generate
```

5. Start the webserver

```shell
php artisan serve
```

5. Database Migration and Seeding

```shell
php artisan migrate:fresh --seed
```

Here you go! Setup is done!
Now login with below credentials:

```shell
Email: superadmin@gmail.com
Password: superadmin
```

You will get two reports on sidebar menu.
1. Hierarchical Report

![See Hierarchical Report image](public/Hierarchical_Report.png)


2. Table Report

![See Table Report image](public/Table_Report.png)
