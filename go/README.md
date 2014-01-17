# boopathi/go

A go build environment set for you

# Go applications build environment

+ Base image: `ubuntu:12.04`
+ Applications installed: `curl`, `git`, `mercurial`, `bazaar`, and of course `go`
+ Go version `1.2`

## Environment

+ Projects folder: `/go/src`
+ Go root directory: `/usr/local/go`

## Use this to create your application containers

    FROM boopathi/go:latest
    WORKDIR /go/src/github.com/myname/my-golang-repo
    # A hack to cache `go get`
    RUN go get github.com/myname/my-golang-repo
    ADD . /go/src/github.com/myname/my-golang-repo
    RUN go get
    RUN go build
    EXPOSE 8080
    ENTRYPOINT ./my-golang-project -option value args


