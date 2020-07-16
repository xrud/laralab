<html>
  <h3>Baixar a Biblioteca&nbsp;<em>CRUD Generator</em></h3>
<p>Vamos usar nosso melhor amigo, o Composer, para baixar a nossa arma secreta.</p>
<div>
<div id="highlighter_253229" class="syntaxhighlighter  bash">
<div class="toolbar"><a class="toolbar_item command_help help" href="http://blog.ultimatephp.com.br/sistema-de-cadastro-php-laravel/#">?</a></div>
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="gutter">
<div class="line number1 index0 alt2">1</div>
</td>
<td class="code">
<div class="container">
<div class="line number1 index0 alt2"><code class="bash plain">composer require appzcoder</code><code class="bash plain">/crud-generator</code></div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<p> 2 ffff Enquanto baixa, voc&ecirc; pode fazer as seguintes altera&ccedil;&otilde;es:</p>
<p>Abra o arquivo&nbsp;<code>config/app.php</code>&nbsp;e adicione estas linhas ao array&nbsp;<code>providers</code>:</p>
<div>
<div id="highlighter_511758" class="syntaxhighlighter  php">
<div class="toolbar"><a class="toolbar_item command_help help" href="http://blog.ultimatephp.com.br/sistema-de-cadastro-php-laravel/#">?</a></div>
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="gutter">
<div class="line number1 index0 alt2">1</div>
<div class="line number2 index1 alt1">2</div>
</td>
<td class="code">
<div class="container">
<div class="line number1 index0 alt2"><code class="php plain">Appzcoder\CrudGenerator\CrudGeneratorServiceProvider::</code><code class="php keyword">class</code><code class="php plain">,</code></div>
<div class="line number2 index1 alt1"><code class="php plain">Collective\Html\HtmlServiceProvider::</code><code class="php keyword">class</code><code class="php plain">,</code></div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<p>O final do array ficar&aacute; desta forma, com as duas linhas que adicionamos em destaque:</p>
<div>
<div id="highlighter_287526" class="syntaxhighlighter  php">
<div class="toolbar"><a class="toolbar_item command_help help" href="http://blog.ultimatephp.com.br/sistema-de-cadastro-php-laravel/#">?</a></div>
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="gutter">
<div class="line number1 index0 alt2">1</div>
<div class="line number2 index1 alt1">2</div>
<div class="line number3 index2 alt2">3</div>
<div class="line number4 index3 alt1">4</div>
<div class="line number5 index4 alt2">5</div>
<div class="line number6 index5 alt1">6</div>
<div class="line number7 index6 alt2">7</div>
<div class="line number8 index7 alt1">8</div>
<div class="line number9 index8 alt2 highlighted">9</div>
<div class="line number10 index9 alt1 highlighted">10</div>
</td>
<td class="code">
<div class="container">
<div class="line number1 index0 alt2"><code class="php comments">/*</code></div>
<div class="line number2 index1 alt1"><code class="php spaces">&nbsp;</code><code class="php comments">* Application Service Providers...</code></div>
<div class="line number3 index2 alt2"><code class="php spaces">&nbsp;</code><code class="php comments">*/</code></div>
<div class="line number4 index3 alt1"><code class="php plain">App\Providers\AppServiceProvider::</code><code class="php keyword">class</code><code class="php plain">,</code></div>
<div class="line number5 index4 alt2"><code class="php plain">App\Providers\AuthServiceProvider::</code><code class="php keyword">class</code><code class="php plain">,</code></div>
<div class="line number6 index5 alt1"><code class="php plain">App\Providers\EventServiceProvider::</code><code class="php keyword">class</code><code class="php plain">,</code></div>
<div class="line number7 index6 alt2"><code class="php plain">App\Providers\RouteServiceProvider::</code><code class="php keyword">class</code><code class="php plain">,</code></div>
<div class="line number8 index7 alt1">&nbsp;</div>
<div class="line number9 index8 alt2 highlighted"><code class="php plain">Appzcoder\CrudGenerator\CrudGeneratorServiceProvider::</code><code class="php keyword">class</code><code class="php plain">,</code></div>
<div class="line number10 index9 alt1 highlighted"><code class="php plain">Collective\Html\HtmlServiceProvider::</code><code class="php keyword">class</code><code class="php plain">,</code></div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<p>Agora altere o array&nbsp;<code>aliases</code>, adicionando estas duas linhas:</p>
<div>
<div id="highlighter_172062" class="syntaxhighlighter  php">
<div class="toolbar"><a class="toolbar_item command_help help" href="http://blog.ultimatephp.com.br/sistema-de-cadastro-php-laravel/#">?</a></div>
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="gutter">
<div class="line number1 index0 alt2">1</div>
<div class="line number2 index1 alt1">2</div>
</td>
<td class="code">
<div class="container">
<div class="line number1 index0 alt2"><code class="php string">'Form'</code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <code class="php plain">=&gt; Collective\Html\FormFacade::</code><code class="php keyword">class</code><code class="php plain">,</code></div>
<div class="line number2 index1 alt1"><code class="php string">'HTML'</code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <code class="php plain">=&gt; Collective\Html\HtmlFacade::</code><code class="php keyword">class</code><code class="php plain">,</code></div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<p>O array vai ficar assim:</p>
<div>
<div id="highlighter_226306" class="syntaxhighlighter  php">
<div class="toolbar"><a class="toolbar_item command_help help" href="http://blog.ultimatephp.com.br/sistema-de-cadastro-php-laravel/#">?</a></div>
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="gutter">
<div class="line number1 index0 alt2">1</div>
<div class="line number2 index1 alt1">2</div>
<div class="line number3 index2 alt2">3</div>
<div class="line number4 index3 alt1 highlighted">4</div>
<div class="line number5 index4 alt2 highlighted">5</div>
</td>
<td class="code">
<div class="container">
<div class="line number1 index0 alt2"><code class="php string">'Validator'</code> <code class="php plain">=&gt; Illuminate\Support\Facades\Validator::</code><code class="php keyword">class</code><code class="php plain">,</code></div>
<div class="line number2 index1 alt1"><code class="php string">'View'</code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <code class="php plain">=&gt; Illuminate\Support\Facades\View::</code><code class="php keyword">class</code><code class="php plain">,</code></div>
<div class="line number3 index2 alt2">&nbsp;</div>
<div class="line number4 index3 alt1 highlighted"><code class="php string">'Form'</code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <code class="php plain">=&gt; Collective\Html\FormFacade::</code><code class="php keyword">class</code><code class="php plain">,</code></div>
<div class="line number5 index4 alt2 highlighted"><code class="php string">'HTML'</code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <code class="php plain">=&gt; Collective\Html\HtmlFacade::</code><code class="php keyword">class</code><code class="php plain">,</code></div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<p>Tamb&eacute;m edite o arquivo&nbsp;<code>.env</code>, mudando os valores das vari&aacute;veis&nbsp;<code>DB_HOST</code>,&nbsp;<code>DB_DATABASE</code>,&nbsp;<code>DB_USERNAME</code>, e&nbsp;<code>DB_PASSWORD</code>, com as credenciais de acesso ao seu banco de dados MySQL.</p>
<p>Feito isso, &eacute; bem prov&aacute;vel que o Composer j&aacute; tenha terminado de baixar os arquivos.</p>
<p>Caso tenha alguma d&uacute;vida sobre a configura&ccedil;&atilde;o do&nbsp;<em>CRUD Generator</em>, veja as orienta&ccedil;&otilde;es no&nbsp;<a href="https://github.com/appzcoder/crud-generator" target="_blank" rel="noopener noreferrer">Github do projeto</a>.</p>
<h2>Criando o CRUD</h2>
<p>Vamos usar este comando no terminal para criar nosso CRUD:</p>
<div>
<div id="highlighter_53349" class="syntaxhighlighter  bash">
<div class="toolbar"><a class="toolbar_item command_help help" href="http://blog.ultimatephp.com.br/sistema-de-cadastro-php-laravel/#">?</a></div>
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="gutter">
<div class="line number1 index0 alt2">1</div>
</td>
<td class="code">
<div class="container">
<div class="line number1 index0 alt2"><code class="bash plain">php artisan crud:generate Person --fields=</code><code class="bash string">"name:string; email:string; gender:char; birthdate:date"</code> <code class="bash plain">--route=</code><code class="bash functions">yes</code> <code class="bash plain">--pk=</code><code class="bash functions">id</code></div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<p>Usamos os mesmos campos que utilizamos no artigo anterior e chamamos a entidade de Person, em vez de User.</p>
<p>Voc&ecirc; dever&aacute; ver a seguinte sa&iacute;da:</p>
<div>
<div id="highlighter_224535" class="syntaxhighlighter  bash">
<div class="toolbar"><a class="toolbar_item command_help help" href="http://blog.ultimatephp.com.br/sistema-de-cadastro-php-laravel/#">?</a></div>
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="gutter">
<div class="line number1 index0 alt2">1</div>
<div class="line number2 index1 alt1">2</div>
<div class="line number3 index2 alt2">3</div>
<div class="line number4 index3 alt1">4</div>
<div class="line number5 index4 alt2">5</div>
</td>
<td class="code">
<div class="container">
<div class="line number1 index0 alt2"><code class="bash plain">Controller created successfully.</code></div>
<div class="line number2 index1 alt1"><code class="bash plain">Model created successfully.</code></div>
<div class="line number3 index2 alt2"><code class="bash plain">Migration created successfully.</code></div>
<div class="line number4 index3 alt1"><code class="bash plain">View created successfully.</code></div>
<div class="line number5 index4 alt2"><code class="bash plain">Crud</code><code class="bash plain">/Resource</code> <code class="bash plain">route added to ...</code><code class="bash plain">/cadastro/app/Http/routes</code><code class="bash plain">.php</code></div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<p>&Oacute;timo!</p>
<p>Agora s&oacute; falta criar a tabela no banco. Pra isso, &eacute; s&oacute; executar este comando:</p>
<div>
<div id="highlighter_339217" class="syntaxhighlighter  bash">
<div class="toolbar"><a class="toolbar_item command_help help" href="http://blog.ultimatephp.com.br/sistema-de-cadastro-php-laravel/#">?</a></div>
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="gutter">
<div class="line number1 index0 alt2">1</div>
</td>
<td class="code">
<div class="container">
<div class="line number1 index0 alt2"><code class="bash plain">php artisan migrate</code></div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<p>Voc&ecirc; ver&aacute; uma sa&iacute;da parecida com esta:</p>
<div>
<div id="highlighter_336948" class="syntaxhighlighter  bash">
<div class="toolbar"><a class="toolbar_item command_help help" href="http://blog.ultimatephp.com.br/sistema-de-cadastro-php-laravel/#">?</a></div>
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="gutter">
<div class="line number1 index0 alt2">1</div>
<div class="line number2 index1 alt1">2</div>
<div class="line number3 index2 alt2">3</div>
<div class="line number4 index3 alt1">4</div>
</td>
<td class="code">
<div class="container">
<div class="line number1 index0 alt2"><code class="bash plain">Migration table created successfully.</code></div>
<div class="line number2 index1 alt1"><code class="bash plain">Migrated: 2014_10_12_000000_create_users_table</code></div>
<div class="line number3 index2 alt2"><code class="bash plain">Migrated: 2014_10_12_100000_create_password_resets_table</code></div>
<div class="line number4 index3 alt1"><code class="bash plain">Migrated: 2015_11_27_124058_create_people_table</code></div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<p>Esse era o segundo comando que comentei.</p>
<p>Tudo pronto! Agora vem a parte legal: testar!</p>
<p>J&aacute; pode olhar pro rel&oacute;gio e ver quanto tempo levou!</p>
<h2>Testando o Sistema de Cadastro</h2>
<p>Para testar, primeiro vamos iniciar o servidor.</p>
<p>O Laravel usa o&nbsp;<a href="http://rberaldo.com.br/como-usar-o-servidor-nativo-do-php-5-4/" target="_blank" rel="noopener noreferrer">Servidor Nativo do PHP</a>. Para inici&aacute;-lo, execute:</p>
<div>
<div id="highlighter_142169" class="syntaxhighlighter  bash">
<div class="toolbar"><a class="toolbar_item command_help help" href="http://blog.ultimatephp.com.br/sistema-de-cadastro-php-laravel/#">?</a></div>
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="gutter">
<div class="line number1 index0 alt2">1</div>
</td>
<td class="code">
<div class="container">
<div class="line number1 index0 alt2"><code class="bash plain">php artisan serve</code></div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<p>Voc&ecirc; ver&aacute; o seguinte no terminal:</p>
<div>
<div id="highlighter_840359" class="syntaxhighlighter  bash">
<div class="toolbar"><a class="toolbar_item command_help help" href="http://blog.ultimatephp.com.br/sistema-de-cadastro-php-laravel/#">?</a></div>
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="gutter">
<div class="line number1 index0 alt2">1</div>
</td>
<td class="code">
<div class="container">
<div class="line number1 index0 alt2"><code class="bash plain">Laravel development server started on http:</code><code class="bash plain">//localhost</code><code class="bash plain">:8000/</code></div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<p>Agora &eacute; s&oacute; acessar a URL&nbsp;<strong><a class="vglnk" href="http://localhost:8000/person" rel="nofollow">http://localhost:8000/person</a></strong>&nbsp;e come&ccedil;ar a se divertir!</p>
  
  <h3>
    php artisan crud:generate Posts --fields='title#string; content#text; category#select#options={"technology": "Technology", "tips": "Tips", "health": "Health"}' --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html
  </h3>
  </h3>
</html>

