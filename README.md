<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## Minhas Malas - Sobre Aplicação



Minhas malas é um sistema de controle de estoque e reserva de malas web que utiliza o framework PHP Laravel. O Minhas malas permite o administrado criar e gerenciar seus produtos sem muito contato com os clientes. Dessa maneira, o cliente entra no site e reserva sua mala, assim o sistema notifica o administrado que houve uma reserva e informando os dados do cliente como: nome, cpf, data de nascimento, sexo, endereço, telefone. Portanto, o administrador passaria tais dados para o entregador que localizaria o cliente e efetua o recebimento do pagamento manualmente.

### Sumário 
* [Instalação de recursos para o ambiente](#ambiente)
* [Clonagem do projeto com ambiente pronto](#instalação-e-configuração-do-projeto)
* [Instalação do vue3](#integração-com-vue3-no-inertia-usando-o-breeze)
* [Configurando rotas](#configurando-rotas)
* [Configurando controller](#configurando-controller)
* [Configurando banco de dados](#configurando-o-banco-de-dadosmodel-e-migrate)
* [Lidando com possíveis erros](#lidando-com-possíveis-erros)


# Ambiente

*obs: As instruções de instalação estão disponíveis para ambos sistemas: Windows e Linux.* 

**Para realizar clonagem de um projeto LARAVEL existente do github/gitlab para o UBUNTU serão necessários:**

* [git](https://git-scm.com/downloads)
* [Composer 2](https://getcomposer.org/download/) ou superior
* PHP da versão do projeto ou superior
* [Extensões do PHP](#instalação-do-php-junto-de-extensões)
* [Docker Engine](https://code.visualstudio.com/download)
* IDE para códificação como [VSCode](https://code.visualstudio.com/download) (OPCIONAL)
* Docker Desktop
* [Laradock](https://www.youtube.com/watch?v=GMxcUO1GhKU&list=PLbjGpiBmGKl3W4Pc9haW-XJo-mRMv74N_&index=2&t=779s)

# Instalação git:
Abra um terminal e utilize o seguinte comando:
```
sudo apt install git -y
```
e insira a senha do usuário.

# Instalação do PHP junto de extensões:
Dependente da versão a ser instalada e dos pacotes disponíveis para instalação, pose ser necessário alterar a versão inserida pelo comando, o comando a seguir é para a instalação do PHP 8.1 junto de algumas extensões necessárias:
```
sudo apt install php8.1 php8.1-common php8.1-curl php8.1-xml php8.1-mbstring php8.1-mysql php8.1-cli php8.1-opcache -y
```
# Instalação Composer 2 ou superior:
**Não utilize "sudo apt install composer", este comando instala Composer 1**
Siga os comandos encontrados no link:
* https://getcomposer.org/download/
```
sudo mv ./composer.phar /usr/local/bin/composer
```

# Instalação do Docker Engine
Siga as instruções encontradas no link:
* https://docs.docker.com/engine/install/ubuntu/

***

# Instalação e Configuração do projeto
Inicia-se a instalação do projeto por meio da clonagem do projeto existente com o uso de **git**:
```
git clone <repositorio>
```
e mudando o diretório de trabalho para a pasta do projeto baixado com:
```
cd <nome-do-projeto>
```
## Adicionando pastas faltantes
Em seguinte é criada a pasta vendor dentro do projeto utilizado o comando:
```
composer install
```
Podem ocorrer um tipo de erro nessa parte que é a falta de algum módilo de PHP no sistema. esse tipo de erro irá mostrar diversas linhas de erro porém no início irá também falar qual(ais) extensão(ões) falta(m) com algo como *"ext-< extensao >"* e para resolver o erro, é utilizado o seguinte comando:
```
sudo apt install php8.1-<extensao>
```
Por exemplo, se no erro estiver "ext-curl", comando de instalar será "sudo apt install php8.1-curl"

[ERRO DE CREDENCIAL]()
***

## Configuração inicial do sistema
Executar os seguintes comandos dentro de [projeto]:
```
cd projeto && cp .env.example .env
php artisan key:generate
```

## Faça o teste de inicializar o sistema
Utilize o comando a seguir e veja se já funciona:
```
./vendor/bin/sail up -d
```
## L-Configuração inicial do banco de dados
  - Dentro do arquivo *`[projeto]\malas\.env`*, altere as seguintes linhas para os dados valores:

  ```
  DB_HOST=127.0.0.1
  DB_PASSWORD=root
  ```

  - Com o terminal na pasta *`[projeto]\malas\`*, execute o seguinte comando:

  ```
  php artisan migrate
  ```

  - Altere o arquivo *`.env`* novamente, altere a linha e salve:

  ```
  DB_HOST=mysql
  ```
***
## Utilizando mais de um projeto simultaneamente no laradock

* Primeiro passo é está Dentro do arquivo *`[projeto]\malas\.env`*, altere as seguintes os dados valores:

```
APP_URL=http://localhost.<nomedoprojeto>
```

* Segundo passo é abrir a pasta `[projeto]\laradock\ngnix\sites\defaut.conf` e altere a linha que contém :
`root /var/www/public;`, assim informe o diretório do seu projeto1 e a pasta public :
```
server_name localhost;
root /var/www/public/malas/desenvolvimento/public;
```

* Terceiro passo ainda dentro da pasta  `[projeto]\laradock\ngnix\sites\app.conf.example` fazer uma cópia do arquivo e altere o nome do arquivo para `<nome do segundo projeto>.conf`, dentro desse arquivo altere a linha que contém :
`root /var/www/public;`, assim informe o diretório do seu projeto1 e a pasta public:
```
server_name localhost;
root /var/www/public/malas/teste/public;
```

* ultimo passo, abra o seguinte arquivo `C:\Windows\System32\drivers\etc\hosts.` adicione abaixo da linha descomentada `127.0.0.1       localhost`:
```
	127.0.0.1     localhost.<nomedoprojeto>
```
***

## Integração com Vue3 no inertia usando o breeze

* instalar laravel breeze via composer:
```
composer require laravel/breeze --dev
```
* Em seguida, cole abaixo do comando:
```
php artisan breeze:install
```
* instalar breeze com vue 3
```
php artisan breeze:install vue
```
* instalações finais Dependências
```
npm install
```
```
npm run dev
```

## Configurando o banco de dados(model e migrate)

crie uma model e depois informe os dados do seu banco:
```
php artisan make:model produtos
```

crie uma migrate 
```
php artisan make:migration create_produtos_table
```

adicione os dados da model em sua migrate
```
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->String('NomeProduto');
            $table->integer('QuantidadeProduto');
            $table->float('PrecoProduto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
```

atualize o banco de dados:
```
php artisan migrate:refresh
```

## Configurando Controller


Crie uma Controller:
```
php artisan make:controller ProdutoController
```

adicione biblioteca Inertia e crie função index para retornar para [Home]

```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProdutoController extends Controller
{
    public function index()
    {
        return Inertia::render('Home',[
            'name' => 'Marcos'
        ]);
    }

}
```

## Configurando rotas:

 Dentro de [Routes/web.php] informe sua rota e o controlador:
```
use App\Http\Controllers\ProdutoController;

 Route::prefix('crud')->group(function(){
    Route::get('/principal', [ProdutoController::class, 'index']);
}); 
```

* Certifique se o arquivo app.blade.php localizado dentro de [resources/views/app.blade.php]. Caso não exista, crie dentro desse diretório um arquivo chamado "app.blade.php"

- Dentro do arquivo [app.blade.php], cole: 
```
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
        <script src="{{ mix('/js/app.js') }}" defer></script>
        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
    @section('content_header')
        <h1>Principal</h1>
    @stop
        @inertia
    </body>
</html
```

## Configurando Vue3

- localize o seguinte diretório dentro do projeto [resources/js/Pages], dentro de pages crie o arquivo "Home.vue" e nele cole:
```
<template>
    <div class="container">
        <h1>Olá {{name}}, seja bem vindo! estamos na vue</h1>
    </div>
</template>
<script>
export default {
    props: {
        name: String
    }
}
</script>
<style>
</style>
```

***
## Lidando com possíveis erros
### Erro na porta 80:

Cheque se o serviço do apache2 está rodando no computador e se positivo, utilize os seguintes comandos para parar e desabilitar o apache2 de iniciar no sistema:
```
sudo systemctl stop apache2
sudo systemctl disable apache2
```
Teste novamente a inicialização do laravel.

### Erro com o sail

Caso apareça um erro relacionado ao sail, será necessário executar o comando:
```
php artisan sail:install
```
e inserir os numeros separados por vírgula dos servições que vai querer instalar, a instalação padrão é *1,3,5,7,8*

Após instalação, volte ao teste de inicialização do laravel.

### Erro de permissão " There is no existing directory at "/storage/logs" and it could not be created: Permission denied "

Caso apareça esse erro, basta executar os seguintes comandos:
```
php artisan route:clear

php artisan config:clear

php artisan cache:clear
```

ou

dentro da pasta do projeto utilizando o gerenciador de arquivos do linux, selecionar a pasta `storage` e aperte o botão direito do mouse e clique em propriedades, após clique em permissões e vá na ultima opção que é ` Alterar permissões dos arquivos contidos na pasta`. Dessa forma altere as opções `apenas leitura` e `acessar arquivo` para `leitura e escrita` e `criar e excluir arquivo`, por fim clique em mudar.

### Erro Acess denied

Caso apareça este seguinte erro:
```
git pull --tags origin main
remote: HTTP Basic: Access denied. The provided password or token is incorrect or your account has 2FA enabled and you must use a personal access token instead of a password. See https://gitlab.com/help/topics/git/troubleshooting_git#error-on-git-fetch-http-basic-access-denied
fatal: Authentication failed for 'https://gitlab.com/George-Trindade/desenvolvimento.git/' 
```
esse erro é comum de acontecer quando estiver fazendo git push ou git pull pela primeira vez no projeto, para sua resolução é necessário que o usuário faça uma autenticação global onde é utilizada esses comandos: 
```
git config --global user.name <seu nome de usuário no gitlab ou hub>
git config --global user.email <informa seu email do gitlab/hub>
```
ou exemplo mais real

```
git config --global user.name joao-lima
git config --global user.email joaolima@gmail.com
```

## Erro require(vendor/autoload.php): failed to open stream
```
PHP Warning:  require(C:\src\laravel\public\desenvolvimento/vendor/autoload.php): Failed to open stream: No such file or directory in C:\src\laravel\public\desenvolvimento\artisan on line 18
```
Resolução:
```
composer update --no-scripts
```

## Erro SQLSTATE[HY000] [2002] Connection refused

Resolução: Alterar DB_HOST=127.0.0.1 para DB_HOST=mysql


  ```
  DB_HOST=mysql
  ```