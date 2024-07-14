ProntoEstoque do CL
ProntoEstoque do CL é um sistema de gerenciamento de inventário desenvolvido em PHP. Ele permite cadastrar, consultar e administrar produtos, aprovar usuários, gerenciar pedidos, gerar relatórios e integrar com WhatsApp. Com uma interface amigável, facilita a organização e eficiência no controle de estoque.

Funcionalidades Principais
Cadastro de Produtos: Adicionar novos produtos ao inventário com detalhes como nome, plaqueta/lote, imagem, entidade, setor, descrição e quantidade.
Aprovação de Usuários: Administradores podem aprovar novos usuários registrados no sistema.
Administração de Usuários: Gerenciamento de usuários existentes (edição e exclusão).
Administração de Pedidos: Gerenciamento de pedidos feitos pelos usuários.
Histórico de Pedidos: Visualização do histórico de todos os pedidos realizados no sistema.
Relatórios: Geração de relatórios detalhados de pedidos e itens no estoque.
Busca e Filtragem: Pesquisa e filtragem de produtos no inventário.
Integração com WhatsApp: Botão para contato rápido via WhatsApp para suporte ou consultas sobre pedidos.
Tecnologias Utilizadas
PHP
HTML/CSS
JavaScript
MySQL (para gerenciamento de banco de dados)
Font Awesome (para ícones)
Bibliotecas externas para estilização e funcionalidades adicionais
Instalação
Clone o repositório para sua máquina local:

bash
Copiar código
git clone https://github.com/seu-usuario/prontoestoque-cl.git
Navegue até o diretório do projeto:

bash
Copiar código
cd prontoestoque-cl
Configure o banco de dados MySQL:

Crie um banco de dados e importe o arquivo schema.sql para criar as tabelas necessárias.
Atualize as configurações de conexão no arquivo sys/conexao.php com suas credenciais do MySQL.
Inicie um servidor local para rodar o projeto:

bash
Copiar código
php -S localhost:8000
Abra seu navegador e acesse:

arduino
Copiar código
http://localhost:8000
Como Usar
Login: Acesse o sistema com suas credenciais. Se não tiver uma conta, registre-se e aguarde a aprovação do administrador.
Cadastro de Produtos: Navegue até a seção "Adicionar Item" para cadastrar novos produtos no inventário.
Administração: Se for um administrador, utilize as opções disponíveis para aprovar usuários, gerenciar usuários e pedidos, e gerar relatórios.
Busca e Consulta: Utilize a barra de pesquisa e os filtros disponíveis para encontrar produtos específicos no inventário.
Contato via WhatsApp: Clique no ícone do WhatsApp para entrar em contato direto com o suporte.
Contribuição
Se você deseja contribuir com o projeto, siga os passos abaixo:

Faça um fork do projeto.
Crie uma nova branch:
bash
Copiar código
git checkout -b minha-branch
Faça as alterações desejadas.
Faça um commit das suas alterações:
bash
Copiar código
git commit -m 'Minha contribuição'
Envie para o repositório remoto:
bash
Copiar código
git push origin minha-branch
Abra um Pull Request no GitHub.
Licença
Este projeto está licenciado sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.
