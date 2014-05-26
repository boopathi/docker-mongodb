FROM nodeos/base
 
MAINTAINER Robo <hop2deep@gmail.com>
 
ENV HOME /root
ENV PATH /root/bin:/usr/bin:/usr/sbin:/bin:/sbin
 
# Use `init` to boot the system
ENTRYPOINT ["init"]
 
# Run `nsh` on boot
CMD ["nsh"]
 
# Install root command line
RUN npkg install bin-nsh
RUN npkg install bin-man
RUN npkg install bin-fs
RUN npkg install bin-cat
RUN npkg install bin-pwd