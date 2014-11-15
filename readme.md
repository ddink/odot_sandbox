## Treehouse's Odot App Preconfigured With A Laravel Console

After completing Treehouse's Laravel Basics course I was looking for a way to keep improving my knowledge of PHP within a Laravel environment. I was also curious about in-browser consoles, so I did a google search, found Darsain's Laravel Console package, and installed it into the odot application.

The result is a simple (if slightly incomplete) todo list application that's routed to the console package. You can use the console to test blocks of PHP and Blade code. It's also great for performing database queries without placing code in your actual app. I hope you find this as useful as I am. Enjoy! :D

## Documentation

There are only two routes in the application. '/' is the index route. It will take you to the todo list index page. '/console' is the console route, and it will take you to the console. No configuration needed. Just clone it, plug, and play. If you want to install a console into your own app, check out Darsain's laravel-console package. It's no more than a few easy steps, that are provided on the package's page. However, there are two things that were left out: 

1) Comment out the route filters (lines 47-54) in the vendor package's routes file (/vendor/darsain/laravel-console/src/routes.php).

2) Move the contents of the package's views folder (/vendor/darsain/laravel-console/src/views) into your app's views folders (/app/views).