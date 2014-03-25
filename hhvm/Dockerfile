FROM ubuntu:precise
MAINTAINER Boopathi Rajaa <me@boopathi.in>

# HHVM Repository
RUN echo "deb http://ppa.launchpad.net/mapnik/boost/ubuntu precise main" >> /etc/apt/sources.list.d/hhvm.list
RUN echo "deb-src http://ppa.launchpad.net/mapnik/boost/ubuntu precise main" >> /etc/apt/sources.list.d/hhvm.list
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 5D50B6BA
RUN apt-get install -y wget
RUN wget -O - http://dl.hhvm.com/conf/hhvm.gpg.key | apt-key add -
RUN echo "deb http://dl.hhvm.com/ubuntu precise main" >> /etc/apt/sources.list.d/hhvm.list

# Update and install everything
RUN apt-get update
RUN apt-get install -y hhvm

# Expose ports and run server
EXPOSE 80

ENTRYPOINT ["/usr/bin/hhvm", "-m", "server", "-p", "80"]
