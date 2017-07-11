#!/bin/sh
docker build -t cookie .
docker run -t -d -p 9006:80 --name cookie cookie
docker start cookie
