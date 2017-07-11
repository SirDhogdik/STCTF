#!/bin/sh
docker build -t comment .
docker run -t -d -p 9007:80 --name comment comment
docker start comment
