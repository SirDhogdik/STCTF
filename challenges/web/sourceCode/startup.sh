#!/bin/sh
docker build -t sourcecode .
docker run -t -d -p 9003:80 --name sourcecode sourcecode
docker start sourcecode
