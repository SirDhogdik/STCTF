#!/bin/sh
docker build -t forcedbutton .
docker run -t -d -p 9012:80 --name forcedbutton forcedbutton
docker start forcedbutton
