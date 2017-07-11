#!/bin/sh
docker build -t darkcat .
docker run -t -d -p 9011:80 --name darkcat darkcat
docker start darkcat
