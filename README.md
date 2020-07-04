# Mageda Social Login

Pequeno projeto desenvolvido em Laravel, com a finalidade de controlar o acesso de usuário usando suas contas de Facebook e/ou Google.

## Dependências

 - NPM;
 - Composer;
 - MySQL Local;
 - PHP >= 7.2.5;
 - BCMath PHP Extension;
 - Ctype PHP Extension;
 - Fileinfo PHP extension;
 - JSON PHP Extension;
 - Mbstring PHP Extension;
 - OpenSSL PHP Extension;
 - PDO PHP Extension;
 - Tokenizer PHP Extension;
 - XML PHP Extension;
 
É preciso acessar o painel de desenvolvedores de Google e Facebook, para criar as chaves de acesso às APIs de login social. Copie as chaves geradas para usá-las na instalação do projeto.
 
## Instalação
 
Faça o clone do projeto na sua máquina local, usando o seguinte comando no terminal:

```
$ git clone git@bitbucket.org:thi_alves/mageda-social-login.git
```

Crie uma cópia do arquivo `.env.example` para `.env`, preenchendo-o com suas próprias credenciais de aplicação, banco de dados e chaves de acessos às APIs de Facebook e Google.

No terminal, execute o composer para instalar as dependências da aplicação:

```
$ composer install
```

Também execute o npm para instalar as dependências de front-end e compilar os assets:

```
$ npm install && npm run dev
```

Agora, basta iniciar a aplicação e testá-la:

```
$ php artizan serve
```

Acesse: [http://localhost:8000](http://localhost:8000).