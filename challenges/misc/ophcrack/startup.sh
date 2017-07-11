#!/bin/sh
docker build -t oph .
docker run -t -d -p 9005:80 --name oph oph
docker start oph
