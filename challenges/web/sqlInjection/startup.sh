#!/bin/sh
docker build -t sqli .
docker run --name sqli-db -e MYSQL_ROOT_PASSWORD=rootpw -e MYSQL_USER=user -e MYSQL_PASSWORD=userpw -e MYSQL_DATABASE=users -d mysql
docker run --name sqli --link="sqli-db" -d -p 8001:80  sqli
docker start sqli
