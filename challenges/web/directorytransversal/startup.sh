#!/bin/sh
docker build -t dirtrav .
docker run -t -d -p 9014:8080 --name dirtrav dirtrav
docker start dirtrav
