# Comunidade MySNS

### How to Run
# Site
clone the repo
serve

# Forum
## Requisitos

- [VirtualBox](https://www.virtualbox.org/)
- [Vagrant](https://www.vagrantup.com/)

## Instalação

>  localizaçao por default: `~/Sites/forum`

1. Run `composer start`
2. Run `vagrant up`
3. `vagrant ssh` e abrir `/home/vagrant/Code/forum` 
4. Run `composer setup`
4. Adicionar `192.168.10.10 forum.app` ao `/etc/hosts` file
5. Setup a working e-mail (usei[Mailtrap](https://mailtrap.io/) )
6. Setup Github auth (editar .env file)


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