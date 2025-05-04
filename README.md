# Portfólio de Arquitetura de Soluções - Raphaella Rodrigues

![Status do Projeto](https://img.shields.io/badge/Status-Em%20Desenvolvimento-yellow)
![Versão](https://img.shields.io/badge/Versão-1.0.0-blue)
![Propósito](https://img.shields.io/badge/Propósito-Educacional-green)

## 📋 Visão Geral

Plataforma web para apresentação do portfólio profissional de Raphaella Rodrigues como Arquiteta de Soluções. O site exibe projetos em formato de cards interativos, permitindo visualização detalhada e buscas avançadas com filtros e ordenações.

## ✨ Funcionalidades Principais

- **Página Inicial**: Apresentação geral e cards destacados dos projetos principais
- **Catálogo de Projetos**: Sistema de cards interativos com preview de informações
- **Visualizador de Projetos**: Páginas individuais com detalhamento completo de cada projeto
- **Sistema de Busca**: Interface com filtros avançados e ordenação personalizada
- **Seções Informativas**:
  - Sobre Mim: Trajetória profissional e informações pessoais
  - Habilidades: Competências técnicas e soft skills
  - Certificados: Qualificações e certificações obtidas
  - Contato: Formulário e informações para comunicação

## 🛠️ Tecnologias Utilizadas

### Frontend
- **React.js**: Biblioteca para construção da interface
- **Tailwind CSS**: Framework para estilização com classes utilitárias
- **React Router**: Navegação entre páginas
- **Axios**: Requisições HTTP para a API

### Backend
- **PHP 8+**: Linguagem de programação
- **Laravel**: Framework para desenvolvimento do backend
- **MySQL**: Sistema de gerenciamento de banco de dados
- **RESTful API**: Padrão de comunicação entre frontend e backend

### DevOps
- **Git/GitHub**: Controle de versão e hospedagem do código
- **Docker**: Containerização (opcional)
- **CI/CD**: Integração e entrega contínuas (a definir)

## 🚀 Instalação e Execução

### Pré-requisitos
- Node.js (v16 ou superior)
- PHP 8.0 ou superior
- Composer
- MySQL
- Git

### Instalação (Frontend)

```bash
# Clone o repositório
git clone https://github.com/seu-usuario/portfolio-raphaella.git

# Acesse o diretório do frontend
cd portfolio-raphaella/frontend

# Instale as dependências
npm install

# Inicie o servidor de desenvolvimento
npm run dev
```

### Instalação (Backend)

```bash
# Acesse o diretório do backend
cd ../backend

# Instale as dependências PHP
composer install

# Configure o ambiente
cp .env.example .env
php artisan key:generate

# Configure seu banco de dados no arquivo .env
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=portfolio_db
# DB_USERNAME=root
# DB_PASSWORD=

# Execute as migrações
php artisan migrate

# Popule o banco com dados iniciais (opcional)
php artisan db:seed

# Inicie o servidor
php artisan serve
```

## 📊 Estrutura do Banco de Dados

### Tabelas Principais
- **users**: Administração do sistema
- **projects**: Projetos do portfólio
- **categories**: Categorias para classificação de projetos
- **skills**: Habilidades e competências
- **certificates**: Certificados e qualificações
- **contacts**: Mensagens recebidas pelo formulário de contato

## 📝 Arquitetura da Aplicação

### Frontend
```
frontend/
├── public/
├── src/
│   ├── assets/
│   ├── components/
│   │   ├── common/
│   │   ├── layout/
│   │   └── projects/
│   ├── context/
│   ├── hooks/
│   ├── pages/
│   ├── services/
│   ├── styles/
│   └── utils/
├── package.json
└── tailwind.config.js
```

### Backend
```
backend/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│   ├── Models/
│   └── Services/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── routes/
│   └── api.php
└── composer.json
```

## 🧪 Testes

```bash
# Execute testes no frontend
cd frontend
npm test

# Execute testes no backend
cd backend
php artisan test
```

## 📈 Roadmap de Desenvolvimento

### Fase 1 - MVP
- [x] Estruturação do projeto
- [ ] Implementação do CRUD básico de projetos
- [ ] Design e layout responsivo das páginas principais
- [ ] Implementação da autenticação de administrador

### Fase 2 - Aprimoramento
- [ ] Sistema avançado de filtros e busca
- [ ] Melhorias de UX/UI
- [ ] Otimização de performance
- [ ] Implementação de analytics

### Fase 3 - Expansão
- [ ] Multilingue (PT-BR/EN)
- [ ] Tema claro/escuro
- [ ] Modo de apresentação para reuniões
- [ ] Integração com redes sociais

## 📚 Uso e Referência

Este projeto foi desenvolvido por Lucas para sua esposa Raphaella Rodrigues.

O código está disponível para estudo e referência. Sinta-se à vontade para:
- Analisar a estrutura e implementações
- Utilizar trechos como referência para seus próprios projetos
- Adaptar a ideia para outros portfólios profissionais

Não são aceitas contribuições externas ao projeto neste momento.

## 📄 Licença

Este projeto é de código aberto disponível para fins educacionais e de referência. Você pode visualizar, estudar e adaptar partes do código para seu aprendizado pessoal, mas os direitos autorais pertencem ao desenvolvedor (Lucas).

## 📞 Contato

**Desenvolvedor:**
Lucas Moreira
- GitHub: [github.com/LucasABM](https://github.com/LucasABM)
- LinkedIn: [linkedin.com/in/lucasabmoreira](https://www.linkedin.com/in/lucasabmoreira/)
- Email: lucasabmoreira@gmail.com

**Portfólio de:**
Raphaella Rodrigues
- Email: santosraphaellar@gmail.com
- LinkedIn: [linkedin.com/in/raphaella-rodrigues-santos](https://www.linkedin.com/in/raphaella-rodrigues-santos/)
