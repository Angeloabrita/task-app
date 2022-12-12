# API LARAVEL LISTA DE TAREFA

## User story
- Criar uma conta para o usuário
- o usuário precisará logar a conta caso contrário será negado acesso a criação ou a edição de tarefas
- O usuário logado poderá ver todas tarefas
- O usuário poderá criar, editar ou excluir somente suas tarefas


## Deployment

Para instalar o projeto você precisa do **Docker** instalado em sua máquina

Clone esse repositório
```git
  git clone Angeloabrita/task-app
```

Copie o modelo e gere uma nova ``.ENV``
```bash
cp .env.example .env
```
Abra o arquivo ``.ENV``edite e adicione uma senha ao ``DB_PASSWORD=``

Teste para ver se o Docker está rodando

```bash
docker --version
```
Gere as images/cointener com o comando

```bash
docker compose up -d
```
Remove o ``composer.lock`` e instale o composer
```bash 
docker-compose exec app rm -rf vendor composer.lock
docker-compose exec app composer install
```
Agora gere a base de dados usando o **artisan**

```bash
docker-compose exec app php artisan migrate

```

Se tudo der certo ao acessar a URL  ``localhost:8080`` e verá a página inicial do app

```
GET /api/tasks
```