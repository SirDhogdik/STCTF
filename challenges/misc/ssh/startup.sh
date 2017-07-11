#!/bin/sh
docker build -t sshcontainer .
docker run -t -d -P --name sshcontainer sshcontainer
docker port sshcontainer 22
docker start sshcontainer
