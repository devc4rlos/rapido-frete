# Rápido Frete

**Rápido Frete** é um projeto fictício desenvolvido como parte do meu portfólio para demonstrar a construção de uma aplicação moderna voltada para o setor de mudanças e fretes.

---

## Tecnologias Utilizadas

- **Back-end:** Laravel 12 (PHP 8.2)
- **Front-end:** Tailwind CSS 4, Vite, Anime.js
- **Comunicação Cliente:** Toastify.js (notificações), Inputmask (formulários)
- **Ambiente de Desenvolvimento:** Docker + Docker Compose
- **Utilitários:** Laravel Pint, Pail, Faker, PHPUnit

---

## Funcionalidades Principais

- Exibição de serviços.
- Formulário de contato.
- Componentização baseada em **Atomic Design**.

---

## Como rodar localmente

### Pré-requisitos

- Docker
- Docker Compose

### Passo a passo

```bash
# Clone o repositório
git clone https://github.com/devc4rlos/rapido-frete.git
cd rapido-frete

# Instale as dependências
composer install
npm install

# Inicialize os containers
docker compose up -d

# Acesse a aplicação
http://localhost:8080
```

---

## Estrutura do Projeto

- `app/Components` — Componentes Blade organizados com Atomic Design
- `resources/js` — Scripts de interação (animações, máscaras, notificações)
- `resources/views` — Telas da aplicação

---

## Demonstração

O projeto pode ser acessado como **demonstração de portfólio** no seguinte endereço:

- *[Rápido Frete Demo](https://rapido-frete.carlosalexandre.com.br/)*
- *[Meu portfólio](https://carlosalexandre.com.br/)*

---

## Licença

Projeto com fins educacionais e de demonstração. Código aberto sob a licença [MIT](LICENSE).

---

## Colaboradores

Desenvolvido por [Carlos Alexandre](https://github.com/devc4rlos) — Full Stack Developer.  
Focado em soluções para o setor de mudanças e fretes
[dev@carlosalexandre.com.br](mailto:dev@carlosalexandre.com.br) • [linkedin.com/in/devc4rlos](https://www.linkedin.com/in/devc4rlos/)
