# dockerized-wordpress-br

> *Inicia um projeto Wordpress 5.1.1 em um ambiente docker pronto para o uso*.
  
![Wallpaper](https://user-images.githubusercontent.com/5404361/56098143-d2d81e00-5ed3-11e9-9a53-55ae92a4d44d.png)

## Características
Inicia uma instalação completamente limpa do WordPress (5.1.1) em um ambiente dockerizado com MariaDB (10.4.2-bionic), PHP (7.3.1), Nginx (1.15.8) e PHP My Admin (4.7).

Este projeto está pronto para trabalhar com variáveis ​​de ambiente. Os dados de acesso ao banco de dados da aplicação Wordpress são centralizados no arquivo **.env ** na raiz do projeto, junto com as variáveis ​​de ambiente dos containers.

## Passos iniciais
1 - Certifique-se de ter o Docker e o Docker Compose instalados em seu sistema operacional. Se você não acessar a documentação oficial em https://docs.docker.com/install/ e instalar.

2 - Clone este repositório com o comando **`git clone git@github.com:vitorgiovane/dockerizedwordpress.git`** ou **`git clone https://github.com/vitorgiovane/dockerized-wordpress-br.git`** em um terminal.

3 - Abra a pasta raiz do projeto em um terminal e execute o comando **`composer install`**.

4 - Renomeie o arquivo **.env.example** na raiz do projeto para **.env** e preencha as variáveis ​​de ambiente como preferir. Você pode usar o arquivo **.env.ready** como base para preencher essas variáveis. Esse arquivo possui dados genéricos do ambiente, mas é capaz de iniciar o ambiente rapidamente.

5 - Agora é a hora de iniciar os containers. Abra a raiz do projeto em um terminal e execute o comando **`sudo docker-compose up -d - build`**.

> Nota: O atributo **--build** constrói as imagens e **-d** executa os containers em segundo plano.
