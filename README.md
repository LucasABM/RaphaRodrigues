# Portfólio Raphaella Rodrigues

Repositório público do **Portfólio Raphaella Rodrigues** — uma Single‑Page Application que apresenta projetos, habilidades, certificados e informações de contato da arquiteta de soluções **Raphaella Rodrigues**.

> **Desenvolvido e mantido por Lucas Moreira.**
> Projeto público: sinta-se à vontade para **clonar** ou **estudar**, mas **não receberá pull requests** ou contribuições externas.

---

## 📸 Demonstração

| Página                         | Preview             |
| ------------------------------ | ------------------- |
| Landing / Projetos em Destaque | *screenshot ou GIF* |
| Página “Ver Todos”             | *screenshot ou GIF* |
| Project Page (detalhes)        | *screenshot ou GIF* |

> Substitua as imagens de exemplo pelas suas capturas de tela ou GIFs após o build (`frontend`).

---

## ✨ Funcionalidades

1. **Cards Interativos** (animações com Framer Motion)

   * Clique no card → navegação para Project Page detalhada
   * Botão **Ver Mais** → exibe lista de todos os projetos com **busca**, **filtros** (tags, stack, ano) e **ordenação** (data, complexidade, impacto)
2. **Sobre Mim** — biografia, missão e valores
3. **Habilidades & Certificados** — tech stack, soft skills, badges (Credly / Microsoft Learn). Filtros por categoria
4. **Contato** — formulário de e‑mail (via API Laravel), validação server‑side e links para redes sociais
5. **PWA Ready** — instalação no mobile / desktop e *offline fallback*
6. **Acessibilidade (A11y) & i18n** — semântica, navegação por teclado e suporte a PT‑BR ↔ EN
7. **Dark Mode** — configuração com Tailwind CSS e armazenamento em localStorage

---

## 🛠️ Tech Stack & Ferramentas

| Camada             | Tecnologias                                                                                      |
| ------------------ | ------------------------------------------------------------------------------------------------ |
| **Front‑end**      | React 18 • Vite • Tailwind CSS v3 • React Router Dom 6 • Axios • Framer Motion                   |
| **Back‑end**       | Laravel 11 (PHP 8.3) • Sanctum (API Token)                                                       |
| **Banco de Dados** | MySQL 8                                                                                          |
| **Dev Ops**        | Docker Compose • GitHub Actions (CI/CD) • ESLint + Prettier • Husky + lint‑staged • EditorConfig |
| **Testes**         | PHPUnit • Pest PHP                                                                               |

---

## 🏗️ Estrutura de Pastas

```text
portfolio-raphaella/
├── .github/                # Workflows CI/CD
│   └── workflows/
├── backend/                # API Laravel
│   ├── app/
│   ├── config/
│   ├── database/
│   ├── public/
│   ├── resources/
│   ├── routes/
│   └── tests/
├── frontend/               # SPA React + Tailwind CSS
│   ├── public/
│   ├── src/
│   │   ├── components/
│   │   ├── pages/
│   │   ├── services/       # chamadas à API
│   │   ├── hooks/
│   │   └── styles/
│   └── tests/
├── docker-compose.yml      # Compose para DB e serviços auxiliares
├── README.md               # Este arquivo
└── LICENSE
```

---

## 🚀 Guia de Instalação

### Pré‑requisitos

* Node.js ≥ 16
* PHP 8.3
* Composer
* MySQL 8
* Docker (opcional)

### Passo a Passo

1. **Clone o repositório**

   ```bash
   git clone https://github.com/seu-usuario/portfolio-raphaella.git
   cd portfolio-raphaella
   ```

2. **Configurar variáveis de ambiente**

   * Copie `backend/.env.example` para `backend/.env` e ajuste conexões DB, APP\_KEY e outras.
   * Em `frontend/.env`, defina a URL base da API.

3. **Rodar containers (opcional)**

   ```bash
   docker-compose up -d mysql
   ```

4. **Instalar dependências e iniciar backend**

   ```bash
   cd backend
   composer install
   php artisan key:generate
   php artisan migrate --seed
   php artisan serve --host=0.0.0.0 --port=8000
   ```

5. **Instalar dependências e iniciar frontend**

   ```bash
   cd frontend
   npm install
   npm run dev
   ```

A aplicação estará disponível em `http://localhost:3000` e a API em `http://localhost:8000`.

---

## ⚙️ Scripts Úteis

* **Backend** (dentro de `backend/`):

  * `php artisan test` — executa suíte de testes
  * `php artisan migrate` — executa migrations
* **Frontend** (dentro de `frontend/`):

  * `npm run dev` — servidor de desenvolvimento
  * `npm run build` — build de produção
  * `npm run lint` — lint e formatação

---

## 📄 Licença

Este projeto está licenciado sob a **MIT License**. Consulte o arquivo [LICENSE](LICENSE) para mais detalhes.
