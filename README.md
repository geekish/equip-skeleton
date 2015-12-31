# Spark Skeleton

A project skeleton for [Spark](http://github.com/sparkphp/Spark), forked from [sparkphp/project](//github.com/sparkphp/project).

## Start Your Project

You will need [Composer](https://getcomposer.org) to create your new project.

Pick a project name, and use Composer to create it with Spark. Let's create
one called `my-project`:

```bash
composer create-project -s dev geekish/spark-skeleton my-project
```

Confirm the installation by changing into the project directory and starting a
development web server:

```bash
cd my-project
bin/start-server
```

You can then browse to <http://localhost:8000/hello> and see JSON output:

```json
{"hello": "world"}
```

You can also browse to <http://localhost:8000/hello/nancy> and see modified JSON output:

```json
{"hello":"nancy"}
```
