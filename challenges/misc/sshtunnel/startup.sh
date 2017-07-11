#!/bin/sh
docker build -t iwantix2 .
docker run --name db-iwantix2 -e MYSQL_ROOT_PASSWORD=wow_w0w -e MYSQL_USER=iwantix2 -e MYSQL_PASSWORD=iwantix22 -e MYSQL_DATABASE=iwantix2 -v pathtosql/sql.sql:/docker-entrypoint-initdb.d/sql.sql -d mysql
docker run --name iwantix2 --link db-iwantix2 -d -p 8002:80 -p 8001:22 iwantix2
docker exec -ti iwantix2 bash
service ssh start
