# Larvel VueJS~Vuetify Starter Project For Experienced Users
<<<<<<< HEAD
Laravel Vue-cli scaffolded project with Vuetify UI library. 
NOTE:This application scaffold inspired by <a href="https://github.com/darryldecode">darryldecode</a>'s <a href="https://github.com/darryldecode/laravel-starter-kit">laravel-starter-kit</a>
=======
Laravel Vue Webpack scaffolded project with Vuetify UI library. 
NOTE:This application scaffolde inspired by <a href="https://github.com/darryldecode">darryldecode</a>'s <a href="https://github.com/darryldecode/laravel-starter-kit">laravel-starter-kit</a>
>>>>>>> 99c91369afe17ba8b586e387bf80302ce8165845
![application](https://github.com/ashkan90/Laravel-Vue-Scaffold/blob/master/application.png?raw=true)

## Clone Repository
```
git clone https://github.com/ashkan90/Laravel-Vue-Scaffold.git 
cd Laravel-Vue-Scaffold
```

## Install requires
```
composer install
cd frontend
npm install
```
## Vue-cli used to deal with API
Most common supply from developers for using Vue with Laravel's API
In this scaffold is needed to use CORS to deal with API.
So you can change your local settings for CORS.

## CORS Middleware
Located at: App\Http\Middleware\Cors
```
public function handle($request, Closure $next)
    {
        if($request->server('HTTP_ORIGIN')) {
            $origin = $request->server('HTTP_ORIGIN');
            
            $domain = Domain::where("domain", $origin)->get();
            if($domain) {
                header('Access-Control-Allow-Origin: ' . $origin);
                header('Access-Control-Allow-Headers: Origin, Content-Type');
            }
        }

        return $next($request);
    }
```
As you can see, we need to make sure that we've inserted our local urls to 'Domain' Model.

## Domain Model
```
public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('domain', 150)->unique();
            $table->timestamps();
        });
    }
```

Absolutely we've to seed our local urls before we started to develop something great!
## Seed Them!
```
$domains = ["http://127.0.0.1:8000", "http://192.168.1.30:8080"];

foreach ($domains as $domain) {
    App\Domain::create(["domain" => $domain]);
}
```
## Settings up 
```
php artisan migrate
php artisan db:seed
```


