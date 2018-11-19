# How to setup the machine

On your windows machine (the host), you need to have the latest versions of the
following programs installed :
- [vagrant (64bits)](https://www.vagrantup.com/downloads.html)
- [virtualbox](https://www.virtualbox.org/wiki/Downloads)

Then :
- clone this repository
- open a console (`cmd`)
- go to the directory where you cloned this repository (using `cd`)
- add the ubuntu box : `vagrant box add ubuntu/bionic64`
- start the machine : `vagrant up`
- log into the machine `vagrant ssh`

You should then be logged into the ubuntu dev machine.
This project should be mounted on the `/vagrant` directory on the VM.

The machine should be provisionned and so you should have access to docker.
To check that everything's alright, type the following commands :

```bash
$ docker pull hello-world
$ docker run --rm hello-world
```

You should see the `Hello from Docker!` message.
