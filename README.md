# Comunidade MySNS

### Forum:
Made with Laravel

#### How to Run
##### Site
clone the repo
serve

##### Forum
## Requisitos

- [VirtualBox](https://www.virtualbox.org/)
- [Vagrant](https://www.vagrantup.com/)

## Instalação

>  localizaçao por default: `~/Sites/forum`

1. Run `composer start`
2. Run `vagrant up`
3. SSH into your Vagrant box, go to `/home/vagrant/Code/forum` & run `composer setup`
4. Add `192.168.10.10 forum.app` to `/etc/hosts` file
5. Setup a working e-mail driver like [Mailtrap](https://mailtrap.io/)
6. Setup Github authentication (see below)


## Admin
Alterar campo 'type' na base de dados, da primeira vez
- 1 normal
- 2 moderator
- 3 admin

## Edit contents
resources/views

### Main layout
resources/views/layouts/base.blade.php

### Onde está o canvas.html ?
public/assets/canvas.html



### RoadMap:
* Ajuda (animações svg) - eGuia de Tratamento
* Área Programador (Documentação, GitHub)