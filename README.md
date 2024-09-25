
# Bwc API Laravel (10)
Para esta projeto e necessario um php 8.1 para cima 

### Passo a passo

Clone Repositório
```sh
git clone 
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Instalar as dependências do projeto
```sh
composer install
```

Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

criar a tabela no BD
```sh
php artisan migrate
```

rota para store
```sh
POST http://localhost/bwc
```
rota para index se for necessario

```sh
GET http://localhost/bwc
```