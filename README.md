# App Artigos

## Comandos Úteis

- Acessar Gii

`http://localhost:8080/?r=gii`

## Rotas

- Sign Up

`http://localhost:8080/index.php?r=site/sign-up`

## Comandos p/ banco de dados

- Criação do banco:

`create database artigos;`

- Criação de tabelas:

```
create or replace table user(

  id int auto_increment,
  username varchar(55) not null,
  password varchar(255) not null,
  auth_key varchar(255) not null,
  access_token varchar(255) not null,
  primary key (id)

);
```

```
create or replace table article(

  id int auto_increment,
  title varchar(1024) not null,
  slug varchar(1024) not null,
  body LONGTEXT not null,
  created_at int,
  updated_at int,
  created_by int,
  PRIMARY KEY (id)
	
);    
```

`alter table article
	add constraint article_user_created_by_fk
  	foreign key (created_by) references user (id);`
    










