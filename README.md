# Projeto - EntregaFácil

> Aplicativo de delivery usando php e laravel, IFSP 2024 - PRWE7 - PROGRAMAÇÃO PARA WEB.

## Intalação e Uso

1. Instale o aplicativo usando:

```
composer install
```

2. Configure as portas em .env. Caso esse arquivo não tenha sido criado altere de .env.example.
3. Em config/database.php Certifique que o banco de dados esteja correto, Exemplo - MySQL:

```
'default' => env('DB_CONNECTION', 'mysql')
```

4. Migre as tabelas do banco de dados

```
php artisan migrate
```

5. Caso queira criar elementos na tabela para testes use:

```
php artisan db:seed
```

6. Acesse o aplicativo em localhost:8000
```
Main -> localhost:8000/app
Testes -> localhost:8000/teste
```

## Contribuição

1. Configure o git com email e nome do usuário (É necessario estar na lista de contribuidores)

```
git config --global user.email "usuario@exemplo.com"
git config --global user.name "NomeUsuario"
```

2. Ao criar ou alterar views utilizadas para testar as funções dos controllers. Utilize resources/views/teste (Disponivel apenas no repositório teste). *Ao terminar use commit no branch 'teste'*.

3. Ao criar ou alterar view utilizadas no aplicativo principal. Utilize resources/views/app (Disponivel em ambos repositórios). *Ao terminar use commit no branch 'teste'*.

4. Após verificar e comunicar alterações em resources/views/app *Use commit no branch 'teste'* (*Não inclua resources/views/teste*)
