<h1 align="center">
  Desafio Telzir
</h1>


<p align="center">
  <a href="https://www.linkedin.com/in/realeliakim/">
    <img alt="Linkedin" src="https://img.shields.io/badge/-Eliakim%20Aquino-0e76a8?label=Linkedin&logo=linkedin&style=flat-square"/>
  </a>
</p>

## :page_facing_up: Descrição

O desafio consiste na criação de um simulador de planos telefonico: 
o cliente adquire um plano e pode falar de graça até um determinado tempo (em minutos) 
e só paga os minutos excedentes. Os minutos excedentes tem um acréscimo de 10% sobre a 
tarifa normal do minuto. Os planos são FaleMais 30 (30 minutos), FaleMais 60 (60 minutos) 
e FaleMais 120 (120 minutos).


## :computer: Instalação

```bash
# Clone este repositório.
$ git clone https://github.com/realeliakim/telzir_desafio.git

# Vai para a pasta do projeto
Configure o arquivo .env com as credenciais do seu banco

Com as credenciais do banco devidamente configuradas, execute os seguintes comandos:

$ composer update -vvv # Atualiza todas as dependencias para rodar a aplicação

$ php artisan migrate # As tabelas da aplicação serão criadas no banco de dados
 
$ php artisan db:seed # As tabelas da aplicação serão devidamente alimentadas

$ php artisan serve #O servidor do aplicação será executado

```

## Executar o docker

```bash

No terminal dentro da pasta da aplicação execute
$ docker-compose up -d --build


No navegador abra o link http://http://localhost:8080/

```


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
