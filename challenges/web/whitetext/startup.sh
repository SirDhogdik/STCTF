#!/bin/sh
docker build -t whitetext .
docker run -t -d -p 9002:80 --name whitetext whitetext
docker start whitetext
