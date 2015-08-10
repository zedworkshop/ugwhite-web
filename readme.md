## UG White website

A [Kirby](http://getkirby.com/) site.

### Updating

```
$ cd your/project/root
$ git submodule foreach --recursive git checkout master
$ git submodule foreach --recursive git pull
```

### Local Dev

```
$ cd your/project/root
$ php -S localhost:8000
```