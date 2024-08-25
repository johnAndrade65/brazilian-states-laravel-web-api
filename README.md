# Brazilian States API

A **Brazilian States API** é uma aplicação Laravel super simples criada como projeto para concluir a formação da Dio.me em PHP que fornece informações sobre os estados do Brasil. A API permite que os usuários obtenham dados básicos como o nome do estado, sigla (UF), e código postal (CEP) de cada estado brasileiro.

## Funcionalidades

- Listar todos os estados brasileiros.
- Obter informações detalhadas de um estado específico pelo código UF.

## Tecnologias Utilizadas

- **Laravel 11.9** - Framework PHP para o desenvolvimento da API.
- **PHP 8.2** - Versão do PHP utilizada.

## Pré-requisitos

- **PHP 8.1** ou superior
- **Composer**
- **Laravel 10**

## Instalação

1. Clone o repositório:

    ```bash
    git clone https://github.com/johnAndrade65/brazilian-states-laravel-web-api.git
    cd brazilian-states-api
    ```

2. Instale as dependências do projeto:

    ```bash
    composer install
    ```

3. Inicie o servidor local:

    ```bash
    php artisan serve
    ```

    A aplicação estará disponível em `http://127.0.0.1:8000`.

## Endpoints

### Listar Todos os Estados

**GET** `/api/v1/states`

**Resposta de Sucesso:**
```json
[
    {
        "name": "Acre",
        "uf": "AC",
        "zip_start": "69900-000",
        "zip_end": "69999-999"
    },
    {
        "name": "Alagoas",
        "uf": "AL",
        "zip_start": "57000-000",
        "zip_end": "57999-999"
    },
    ...
]
```

### Obter Informações de um Estado Específico

**GET** `/api/v1/states/{uf}`

**Parâmetro:**
- `uf`: Sigla do estado (por exemplo, `SP`, `RJ`).

**Resposta de Sucesso:**
```json
{
    "name": "São Paulo",
    "uf": "SP",
    "zip_start": "01000-000",
    "zip_end": "19999-999"
}
```

**Resposta de Erro (UF não encontrada):**
```json
{
    "error": "UF not found"
}
```

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para enviar pull requests, abrir issues ou sugerir melhorias.

Este README cobre as principais informações necessárias para configurar, rodar e utilizar a API, bem como detalhes sobre como contribuir e realizar testes.
