# laravel8 template
###### starter template for laravel 8 projects
- ✨Magic ✨

## Already installed packages

- [BotMan](https://botman.io/)
    - WebChat and Telegram 
- [Laravel-permission](https://spatie.be/docs/laravel-permission)
- [Laravel Authentication Log-](https://github.com/yadahan/laravel-authentication-log)
- [Laravel-activitylog](https://spatie.be/docs/laravel-activitylog/)
    - Log CRUDS history
- [Laravel log viewer](https://github.com/rap2hpoutre/laravel-log-viewer)
    - View errors log in web 
- [laravel/telescope](https://laravel.com/docs/)
- [laravel/socialite](https://laravel.com/docs/)
- [laravel/passport](https://laravel.com/docs/)
    - Log with email or phone number 
- [Laravel](https://laravel.com/docs/)
- [darkaonline/l5-swagger](https://github.com/DarkaOnLine/L5-Swagger)
    - Documentation API package 
- Export documents as Markdown, HTML and PDF
- [AdminLTE Bootstrap Dashboard implemented] (https://adminlte.io/)
- LandingPage
- Error Pages

## Installation

laravel8template requires [Node.js](https://nodejs.org/) v10+ to run.

Install the dependencies and devDependencies and start the server.

```sh
cd laravel8template
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
```

## Development

Want to contribute? Great!

## Docker

### Laravel packaged by Bitnami

#### What is Laravel?

> Laravel is an open source PHP framework for web application development. 
[Overview of Laravel](https://laravel.com/)

Trademarks: This software listing is packaged by Bitnami. The respective trademarks mentioned in the offering are owned by the respective companies, and use of them does not imply any affiliation or endorsement.

### Local workspace

```console
$ mkdir ~/myapp && cd ~/myapp
$ curl -LO https://raw.githubusercontent.com/bitnami/bitnami-docker-laravel/master/docker-compose.yml
$ docker-compose up
```

**Warning**: This quick setup is only intended for development environments. You are encouraged to change the insecure default credentials and check out the available configuration options for the [MariaDB container](https://github.com/bitnami/bitnami-docker-mariadb#readme) for a more secure deployment.

## Why use Bitnami Images?

* Bitnami closely tracks upstream source changes and promptly publishes new versions of this image using our automated systems.
* With Bitnami images the latest bug fixes and features are available as soon as possible.
* Bitnami containers, virtual machines and cloud images use the same components and configuration approach - making it easy to switch between formats based on your project needs.
* All our images are based on [minideb](https://github.com/bitnami/minideb) a minimalist Debian based container image which gives you a small base container image and the familiarity of a leading Linux distribution.
* All Bitnami images available in Docker Hub are signed with [Docker Content Trust (DCT)](https://docs.docker.com/engine/security/trust/content_trust/). You can use `DOCKER_CONTENT_TRUST=1` to verify the integrity of the images.
* Bitnami container images are released daily with the latest distribution packages available.
## License

MIT

**Free Software, Hell Yeah!**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)

   [dill]: <https://github.com/joemccann/laravel8template>
   [git-repo-url]: <https://github.com/joemccann/laravel8template.git>
   [john gruber]: <http://daringfireball.net>
   [df1]: <http://daringfireball.net/projects/markdown/>
   [markdown-it]: <https://github.com/markdown-it/markdown-it>
   [Ace Editor]: <http://ace.ajax.org>
   [node.js]: <http://nodejs.org>
   [Twitter Bootstrap]: <http://twitter.github.com/bootstrap/>
   [jQuery]: <http://jquery.com>
   [@tjholowaychuk]: <http://twitter.com/tjholowaychuk>
   [express]: <http://expressjs.com>
   [AngularJS]: <http://angularjs.org>
   [Gulp]: <http://gulpjs.com>

   [PlDb]: <https://github.com/joemccann/laravel8template/tree/master/plugins/dropbox/README.md>
   [PlGh]: <https://github.com/joemccann/laravel8template/tree/master/plugins/github/README.md>
   [PlGd]: <https://github.com/joemccann/laravel8template/tree/master/plugins/googledrive/README.md>
   [PlOd]: <https://github.com/joemccann/laravel8template/tree/master/plugins/onedrive/README.md>
   [PlMe]: <https://github.com/joemccann/laravel8template/tree/master/plugins/medium/README.md>
   [PlGa]: <https://github.com/RahulHP/laravel8template/blob/master/plugins/googleanalytics/README.md>
