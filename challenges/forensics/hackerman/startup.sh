#!/bin/sh
docker build -t hackerman .
docker run -t -d -p 9009:80 --name hackerman hackerman
docker start hackerman
