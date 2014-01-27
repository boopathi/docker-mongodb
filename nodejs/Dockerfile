FROM ubuntu:12.04
MAINTAINER Boopathi Rajaa <me@boopathi.in>

# Install Curl
RUN apt-get update
RUN apt-get install -y curl

# Install NodeJS
RUN curl -s http://nodejs.org/dist/v0.10.25/node-v0.10.25-linux-x64.tar.gz | tar -v -C /usr/local/ --strip-components=1 -xz
ENV PATH /usr/local/bin:/usr/local/sbin:/usr/bin:/usr/sbin:/bin:/sbin

