# Sistema de Notificação

Este sistema permite o envio de notificações por e-mail ou SMS para um destinatário específico, com a opção de registrar um novo usuário (opcional). Após o envio, uma página de sucesso é exibida, confirmando os detalhes da notificação enviada.

## Funcionalidades

- **Envio de Notificação**: O usuário pode escolher entre enviar uma notificação por **E-mail** ou **SMS**.
- **Formulário de Envio**: O sistema requer informações como destinatário, mensagem e um campo opcional para registrar um novo usuário.
- **Página de Sucesso**: Após o envio da notificação, uma página de sucesso é exibida com os detalhes da notificação enviada.

## Requisitos

Antes de rodar o projeto, é necessário ter os seguintes requisitos:

- **PHP** (preferencialmente PHP 8 ou superior).
- **Composer** para gerenciar dependências PHP.
- **Servidor Web** como Apache ou Nginx (recomendado usar o XAMPP ou MAMP para fácil configuração local).

## Como Rodar o Projeto

### Passo 1: Clone o Repositório

Clone o repositório para o seu ambiente local:

git clone https://github.com/seu-usuario/sistema-notificacao.git

cd sistema-notificacao
composer install

Isso irá instalar todas as dependências necessárias, incluindo bibliotecas externas para enviar e-mails e SMS.

### Passo 3: Configuração do Servidor Web
O projeto foi estruturado para ser executado localmente com um servidor Apache. Se estiver usando o XAMPP, siga estas etapas:

Mova o conteúdo do projeto para a pasta htdocs do XAMPP:

Exemplo: C:\xampp\htdocs\sistema-notificacao
Inicie o Apache no painel de controle do XAMPP.

### Passo 4: Configuração do E-mail (opcional)
Para enviar notificações por e-mail, você pode configurar um servidor SMTP no seu código. No arquivo src/notify.php, adicione as configurações do servidor SMTP que você está utilizando (por exemplo, Gmail, Mailgun, SendGrid, etc.).

### Passo 5: Acesse o Sistema
Abra seu navegador e vá para http://localhost/sistema-notificacao/public/index.php para acessar a página de envio de notificação.

### Passo 6: Teste a Notificação
Preencha o formulário com o destinatário e a mensagem. Após o envio, você será redirecionado para uma página de sucesso com os detalhes da notificação enviada.

Estrutura de Arquivos

```bash

sistema-notificacao/
├── public/
│   ├── index.php            # Página inicial com o formulário de envio
│   └── success.php          # Página de sucesso após o envio da notificação
├── src/
│   ├── singleton/           # Padrão Singleton para gerenciar usuários
│   ├── strategy/            # Estratégia para enviar notificações (Email e SMS)
│   └── utils/               # Utilitários auxiliares
├── tests/                   # Testes para verificar o funcionamento do sistema
├── vendor/                  # Dependências do Composer
├── composer.json            # Arquivo de configuração do Composer
└── readme.md

Tecnologias Utilizadas
PHP 8.2+: Linguagem de programação principal.
Composer: Gerenciamento de dependências.
Biblioteca de Envio de E-mails (ex: PHPMailer): Para enviar e-mails via SMTP.
Estratégia de Notificação: Utilização do padrão de design Strategy para separar a lógica de envio de notificações.
Singleton: Para gerenciamento de usuários com o padrão Singleton.
Como Funciona
O usuário preenche um formulário com o tipo de notificação (E-mail ou SMS), destinatário, mensagem e um campo opcional para registrar um novo usuário.
Quando o formulário é enviado, o sistema processa a solicitação, envia a notificação para o destinatário usando a estratégia selecionada e registra o usuário (se fornecido).
O sistema redireciona o usuário para uma página de sucesso, onde os detalhes da notificação (destinatário, mensagem e usuário) são exibidos.
Contribuindo
Sinta-se à vontade para abrir issues e fazer pull requests. Para contribuir:

Faça um fork do repositório.
Crie uma nova branch: git checkout -b minha-contribuicao.
Faça suas alterações.
Envie para o repositório original: git push origin minha-contribuicao.
Abra um pull request.
