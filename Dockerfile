FROM debian
Label maintainer="teste"
RUN apt update  && apt install -y ssh
RUN service ssh start
RUN useradd -p $(openssl passwd -1 teste) teste3
CMD ["/usr/sbin/sshd","-D"]
