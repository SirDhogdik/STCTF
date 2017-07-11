#!/bin/sh
docker build -t encoded .
docker run -t -d -p 9008:80 --name encoded encoded
docker start encoded
