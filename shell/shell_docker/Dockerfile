FROM ubuntu:latest

RUN apt update && \
	apt install -y openssh-server nano gzip bzip2 

RUN mkdir /var/run/sshd
RUN echo root:googleme | chpasswd

EXPOSE 22
CMD ["/usr/sbin/sshd", "-D"]

RUN echo "PermitRootLogin yes" >> /etc/ssh/sshd_config
RUN echo "PasswordAuthentication yes" >> /etc/ssh/sshd_config
RUN echo "Banner /etc/banner" >> /etc/ssh/sshd_config

RUN mkdir /ctf_work
RUN mkdir /ctf_work/host
RUN mkdir /pirate

RUN for group in ctf_player0 ctf_player1 ctf_player2 ctf_player3 ctf_player4 ctf_player5 ctf_player6 ctf_player7 ctf_player8 ctf_player9 ctf_player10;do groupadd ${group};done

COPY user10.txt /ctf_work/
COPY grep /bin/grep
COPY custom_shell/more_or_less /bin/more_or_less

RUN newusers /ctf_work/user10.txt

COPY ctfcopy/q1/* /home/shell1/
COPY ctfcopy/q2/* /home/shell2/
COPY ctfcopy/q3/* /home/shell3/
COPY ctfcopy/q4/* /home/shell4/
COPY ctfcopy/q5/* /home/shell5/
COPY ctfcopy/q6/* /home/shell6/
COPY ctfcopy/q7/* /home/shell7/
COPY ctfcopy/q8/* /home/shell8/
COPY ctfcopy/q9/* /home/shell9/
COPY ctfcopy/q10/* /home/shell10/

RUN chown -R root:ctf_player0 /home/shell0/
RUN chown -R root:ctf_player1 /home/shell1/
RUN chown -R root:ctf_player2 /home/shell2/
RUN chown -R root:ctf_player3 /home/shell3/
RUN chown -R root:ctf_player4 /home/shell4/
RUN chown -R root:ctf_player5 /home/shell5/
RUN chown -R root:ctf_player6 /home/shell6/
RUN chown -R root:ctf_player7 /home/shell7/
RUN chown -R root:ctf_player8 /home/shell8/
RUN chown -R root:ctf_player9 /home/shell9/
RUN chown -R root:ctf_player10 /home/shell10/


RUN chmod -R 750 /home/shell0/
RUN chmod -R 750 /home/shell1/
RUN chmod -R 750 /home/shell2/
RUN chmod -R 750 /home/shell3/
RUN chmod -R 750 /home/shell4/
RUN chmod -R 750 /home/shell5/
RUN chmod -R 750 /home/shell6/
RUN chmod -R 750 /home/shell7/
RUN chmod -R 750 /home/shell8/
RUN chmod -R 750 /home/shell9/
RUN chmod -R 750 /home/shell10/

#RUN chown shell0:ctf_player7 /home/shell7/flag.txt
#RUN chown shell0:ctf_player7 /home/shell7/read-it

#RUN chmod 4550 /home/shell7/read-it
#RUN chmod 400 /home/shell7/flag.txt

RUN chmod +x /bin/more_or_less

RUN chmod +x /home/shell10/binary
RUN chmod -rw /home/shell10/binary

RUN mv /bin/kill /pirate/pkill
RUN mv /bin/ps /pirate/pps
RUN mv /usr/bin/top /pirate/ptop
RUN mv /usr/bin/pkill /pirate/ppkill
RUN mv /usr/bin/pgrep /pirate/ppgrep

RUN chmod -R o-rwx /pirate/
