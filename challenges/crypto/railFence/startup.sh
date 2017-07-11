#!/bin/sh
docker build -t railfence .
docker run -t -d -p 9001:80 --name railfence railfence
docker start railfence
