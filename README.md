[English](https://github.com/Gilberto-Mascena/course-PHP/blob/main/README-en.md) |
[Português Brasileiro](https://github.com/Gilberto-Mascena/course-PHP/blob/main/README.md)

[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://Gilberto-Mascena/course-PHP)
[![license](https://img.shields.io/github/license/Gilberto-Mascena/course-PHP)](https://github.com/Gilberto-Mascena/course-PHP/blob/main/LICENSE.md)
[![GitHub stars](https://img.shields.io/github/stars/Gilberto-Mascena/course-PHP)](https://github.com/Gilberto-Mascena/course-PHP/stargazers)
[![GitHub issues](https://img.shields.io/github/issues/Gilberto-Mascena/course-PHP)](https://github.com/Gilberto-Mascena/course-PHP/issues)
[![tag](https://img.shields.io/github/v/release/Gilberto-Mascena/course-PHP?include_prereleases)](https://github.com/Gilberto-Mascena/course-PHP/releases)
![release](https://img.shields.io/github/release-date/Gilberto-Mascena/course-PHP)
![size](https://img.shields.io/github/repo-size/Gilberto-Mascena/course-PHP)

# *Curso de PHP 8*

## *Tecnologias usadas*

- [PHP](https://www.php.net)
- [Maven](https://maven.apache.org)
- [Docker](https://www.docker.com/products/docker-desktop/)
- [Docker engine para Linux](https://docs.docker.com/engine/install/)
- [Docker HUB](https://hub.docker.com)
- [JavaScript](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript)
- [HTML](https://developer.mozilla.org/pt-BR/docs/Web/HTML)
- [CSS](https://developer.mozilla.org/pt-BR/docs/Web/CSS)
- [Git](https://git-scm.com)

---

## *Como executar o projeto*

### *Requisitos:*

- [Docker](https://www.docker.com/products/docker-desktop/)
- [Docker engine para Linux](https://docs.docker.com/engine/install/)

> [!IMPORTANT]
> _No docker-compose.yml, alterar o caminho do projeto_

<img src="./assets/docker-compose.png">

#### *No **Linux** navegue para o diretório `course_php` e crie um arquivo `.env` e insira suas credenciais para a base de dados, agora execute o comando abaixo*

```
docker compose start
```
- _Pra parar o container_
    - _Execute o comando abaixo_

```
docker compose stop
```

## *Dependências*

### *PDO e MySQLi para conexão com o MySQL*

*_execute no container o comando abaixo e restart:_* 

```
docker compose exec php docker-php-ext-install pdo pdo_mysql mysqli
```

*_Caso dê erro ao instalar a extensão no Ubuntu 24.04 LTS, baixar uma imagen mais recente do PHP-Apache do [*Docker HUB*](https://hub.docker.com/r/thekingscode/php8.2-apache)_* 
   
---

## *Licença* 

[*Licença MIT*](LICENSE.md) (*MIT*)

*Gilberto | Dev 2023* 