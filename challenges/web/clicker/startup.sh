#!/bin/sh
docker build -t clicker .
docker run -t -d -p 9013:80 --name clicker clicker
docker start clicker
