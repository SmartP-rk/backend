<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# SmartPark Backend

Este é o backend do projeto SmartPark, desenvolvido com o framework Laravel.

## Requisitos

- **PHP**: Versão 8.0 ou superior
- **Composer**: Gerenciador de dependências para PHP
- **Banco de Dados**: MySQL ou PostgreSQL

## Instalação

1. **Clone o repositório**:

   ```bash
   git clone https://github.com/SmartP-rk/backend.git
   cd backend
   ```

2. **Instale as dependências**:

   ```bash
   composer install
   ```

3. **Configure o arquivo `.env`**:

   - Duplique o arquivo `.env.example` e renomeie para `.env`.
   - Atualize as variáveis de ambiente conforme necessário, especialmente as configurações do banco de dados.

4. **Gere a chave da aplicação**:

   ```bash
   php artisan key:generate
   ```

5. **Execute as migrações do banco de dados**:

   ```bash
   php artisan migrate
   ```

## Execução

Para iniciar o servidor de desenvolvimento, execute:

```bash
php artisan serve
```

A aplicação estará disponível em `http://localhost:8000`.

---

### Licença

Este projeto está licenciado sob os termos da [MIT License](LICENSE).
