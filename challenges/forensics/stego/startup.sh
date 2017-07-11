#!/bin/sh
docker build -t stego .
docker run -t -d -p 9004:80 --name stego stego
docker start stego
