# **Projeto Laravel 11 para a matéria de Projeto de software 2**

Este é um projeto Laravel 11 construído com PHP 8.1 e Node.js 14.21.

## **Instalação**

Certifique-se de ter o PHP 8.1 e o Node.js 14.21 instalados em seu sistema antes de continuar.

1. Clone o repositório para o seu ambiente local, ou entre no link do github e faça o dowload do zip(o mesmo enviado pelo e-mail):
    
    ```bash
    git clone https://github.com/dsbuhrer/crud-projeto2.git
    ```
    
2. Acesse o diretório do projeto:
    
    ```bash
    cd laravel
    ```
    
3. Instale as dependências PHP usando o Composer:
    
    ```
    composer install
    ```
    
4. Instale as dependências JavaScript usando o npm:
    
    ```
    npm install
    ```
5. Crie um arquivo .env na raiz do projeto e defina suas variáveis de ambiente. Você pode usar o arquivo .env.example como referência:
    
    ```
    cp .env.example .env
    ```
    
## **Configuração do Banco de Dados**
Após criar o banco de dados com a colação utf8mb4_general_ci, você precisa executar as migrações para criar as tabelas necessárias. Certifique-se de que suas credenciais de banco de dados estejam corretas no arquivo .env.

1. Execute o comando php artisan key:generate :
    
    ```
    php artisan key:generate
    ```

2. Execute as migrações usando o comando php artisan migrate:
    
    ```
    php artisan migrate
    ```


## **Execução**

Após instalar todas as dependências, você pode rodar a aplicação utilizando os comandos do Laravel:

Para rodar a aplicação localmente em um servidor de desenvolvimento, utilize o seguinte comando:
1. Compile os ativos JavaScript usando o comando npm run dev:

```
npm run dev
```

2. Para rodar a aplicação localmente em um servidor de desenvolvimento, utilize o seguinte comando:

```
php artisan serve
```

Esses dois últimos passos devem ser rodados em dois terminais diferentes e devem estar rodando ao mesmo tempo para o sistema funcionar.

A aplicação estará disponível em **`http://localhost:8000`**.
