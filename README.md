# RCS Laravel

Meu Projeto Boilerplate para Laravel 5.4

[rcs_laravel.dev](rcs_laravel.dev)


## Provisionamento

### Laragon (MS Windows)
instalar [laragon](https://laragon.org/)

### Vagrant (Linux / Mac)
- Subir o servidor
```bash
vagrant up
```
- Interromper o servidor
```bash
vagrant halt
```
- Reiniciar as configs do Servidor
```bash
vagrant reload --provision
```
- Conectar via SSH ao Servidor
```bash
vagrant ssh
```


## WebPack



## Swagger
- Publicar Views 
```bash
artisan l5-swagger:publish-views
```
- Gerar Documentação
```bash
artisan l5-swagger:generate
```

