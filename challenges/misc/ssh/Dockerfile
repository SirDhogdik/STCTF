FROM ubuntu:16.04

RUN apt-get update && apt-get install -y openssh-server
RUN mkdir /var/run/sshd
RUN echo 'root:CSICyb3rRang3' | chpasswd
RUN sed -i 's/PermitRootLogin prohibit-password/PermitRootLogin yes/' /etc/ssh/sshd_config

# SSH login fix. Otherwise user is kicked off after login
RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd

ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

RUN useradd -ms /bin/bash -p password tim
RUN echo 'tim:password' | chpasswd

RUN touch /home/tim/FLAG
RUN echo CWCTF{S7r3SS_Ba11} > /home/tim/FLAG
RUN chmod 444 /home/tim/FLAG

EXPOSE 22
CMD ["/usr/sbin/sshd", "-D"]
