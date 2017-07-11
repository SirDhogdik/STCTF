#!/bin/sh
docker build -t logohex .
docker run -t -d -p 9010:80 --name logohex logohex
docker start logohex
