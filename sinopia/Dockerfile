FROM node:0.12.0
MAINTAINER Boopathi Rajaa <me@boopathi.in>

RUN mkdir /opt/sinopia

WORKDIR /opt/sinopia

ADD package.json /opt/sinopia/
ADD config.yaml /opt/sinopia/

RUN npm install

EXPOSE 80

VOLUME ['/opt/sinopia/storage']

ENTRYPOINT /opt/sinopia/node_modules/.bin/sinopia -c /opt/sinopia/config.yaml
