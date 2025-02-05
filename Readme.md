# Serannto Café & Bistrô

Serannto Café & Bistrô é um projeto desenvolvido em PHP com PDO e MySQL para fins de estudo. O sistema possui uma área do cliente para visualizar os menus disponíveis e uma área administrativa para gerenciar os menus, realizar operações CRUD e gerar relatórios, além de tratar imagens.

**Atenção:** Este projeto segue uma arquitetura desatualizada e não é recomendável para uso em produção.

---

## 🔧 Tecnologias Utilizadas

* **PHP** (com PDO para conexão com MySQL)
* **MySQL** (banco de dados relacional)
* **HTML/CSS/JavaScript** (para a interface do usuário)

---

## 📌 Funcionalidades

### Área do Cliente

* Visualização dos menus disponíveis no bistrô.

### Área Administrativa

* **Gerenciamento de menus** (CRUD - Criar, Ler, Atualizar e Excluir).
* **Geração de relatórios** sobre os menus cadastrados.
* **Tratamento de imagens** para os menus.

### Funcionalidades Futuras

* Implementação de sistema de login e gerenciamento de usuários.
* Melhorias na arquitetura do sistema.
* Otimização da segurança e desempenho.

---

## 🚀 Como Executar o Projeto

1. Clone o repositório:
   ```
   git clone https://github.com/VictorIshizuka/serenatto_cafe_e_bistro.git
   ```
2. Configure o banco de dados MySQL:
   * Crie um banco de dados e importe o arquivo SQL disponível no projeto.
3. Configure a conexão com o banco de dados no arquivo `<span>conexao-bd.php</span>`:
   ```
   define('DB_HOST', 'seu_host');
   define('DB_NAME', 'serannto_cafe');
   define('DB_USER', 'seu_usuario');
   define('DB_PASS', 'sua_senha');
   ```
4. Inicie o servidor local com PHP:
   ```
   php -S localhost:8000
   ```
5. Acesse `<span>http://localhost:8000</span>` no navegador.

---

## ⚠️ Avisos

* **Não recomendado para produção** devido à estrutura desatualizada.
* O projeto ainda está em desenvolvimento, e o sistema de login não foi implementado.
* Melhorias de segurança e organização do código serão abordadas em versões futuras.

---

## 📜 Licença

Este projeto é apenas para fins de estudo e aprendizado. Sinta-se livre para modificá-lo e aprimorá-lo!

Desenvolvido para aprendizado e prática de desenvolvimento web. 🍽️☕
