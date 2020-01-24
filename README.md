# Front-end Web Development

Este repositório tem por objetivo acompanhar o desenvolvimento do aprendizado
introdutório ao avançado em Front-end Web Development.

	- Os códigos estão comentados descrevendo o fluxo do programa e a descrição narrativa da problemática;
	- Os que não estão comentados servem de exercício de leitura da linguagem em questão.
	- Diretório geral em debian-based distros: /var/www/html;
	- Endereço http://localhost/path/to/file.php para acessar a aplicação do navegador de preferência;

Siga as lições em ordem numeral, ou escolha a que deseja, abra o arquivo em seu editor de texto e leia atentamente o arquivo!

HACK IT ALL.

*Consulte: http://hdam.pro.br/  
@LPS
	
## Contexto

### Aplicações para Web

Programa para internet. Exige além do sistema computacional, a comunicação com a internet (navegadores). É o usuário desencadeia as ações através do navegador. 

### Aplicação Dinâmica x Documento Estático

Aplicação estática não existe: os documentos são partes da aplicações que não mudam. A página pode ser estática, e a edição manual não conta como dinamismo, apenas as mudanças referentes à interações do usuário.

### Linguagens de Marcação

Tecnologia básica, linguagem fundamental com elementos marcadores adequados para orientar o navegador como proceder. Tabelas, parágrafos, link, botões, imagem, formulários, etc. HTML5 tem aproximadamente 150 marcadores atualmente (2018). Hypertext é um sinômimo para um texto em formato de link(ligação, referência). 

O navegador não complita, interpreta ouexecuta o código e sim renderiza!	O XML (Extensible Markup Language) é uma nova linguagem demarcação bastante exigida pelo mercado.	
	
	CSS / HTML -> Documento Estático (interface gráfica) 


## HTML5

HTML é a abreviação em inglês do termo HyperText Markup Language, ou em português linguagem de marcação de hipertexto. Essa linguagem de marcação é composta por elementos chamados "tag"s, que são os rótulos dos marcadores que definem a forma como o navegador renderiza a informação na página web.	

"O navegador é o software mais importante para a exibição e renderização de um documento HTML". É bom salientar que essa linguagem manipua textos imagens, áudio e vídeo, e é padronizada pelo W3C. 

Todo o documento criado pode ser finalizado com a extensão .html fazendo com que a aplicação correta interprete o arquivo da forma desejada.

- REGRAS:
	- Tags completas devem ser fechadas (`<p>`Parágrafo...`</p>`);
	- Tags vazias (void) não devem ser fechadas (`<img ...>`);
	- Nomes de tags e atributos sempre em MINÚSCULO;
	- Tags aninhadas (filhas) são fechadas na ordem em que foram abertas;
	- Identação é o uso de espaços para facilitar a visão de relação entre  diferentes estruturas;
	
Esqueleto básico html utilizado nos exemplos:

	<!DOCTYPE html> 
	<html> 
		<head> 
			<title>	Título do Documento </title> 
		</head> 
		<body> 
			<h1> Título mais Importante </h1>
			<p> Uma página muito simples. </p> 
		</body> 
	</html> 


## CSS

CSS é a abreviação em inglês do termo Cascading	Style Sheet, ou, em português, folhas de estilo em cascata. “Folha de estilo em cascata é um mecanismo simples para adicionar estilos (fontes, cores, espaçamentos, etc...) a um documento HTML.”

Estilização! Formatar alcança desde cores de fontes e tipos de letras, passando por definições de tamanho, opacidades, transparências, até a parte mais complexa do layout dos elementos (posicionamentos, camadas de conteúdo - eixos x, y, z...) em uma mesma página.

CSS não é uma linguagem de programação, há divergências sobre aspectos de linguagem por diferentes autores, porém existe um conjunto de regras e sintaxes para dar sentido aos dados escritos. Sendo assim, pode ser considerada também uma linguagem de marcação.

Separando estilo e significado semântico, o CSS ajuda no tamanho e complexidade de um arquivo .html.

- REGRA:
	- É a unidade básica de uma folha de estilo. Entenda-se por unidade básica a menor porção de código capaz de estilizar determinado elemento HTML. Veja, abaixo, os principais componentes de uma regra CSS. O agrupamento de diversas regras CSS compõem o que chamamos de folha de estilo:

		p {  
			color: #aabbcc;				(Cor da letra)  
			background-color: #ff0;		(Cor do fundo)  
			font-style: italic;			(Fonte estilizada)  
			text-align: right;			(Alinhamento de texto)  
			width: 300px;				(Largura do seletor)  
			font-size: 1,5cm;			(Tamanho de fonte)  
		}
	
	- Mais de um seletor (h1, p e ul):
	
		h1, p, ul {  
			color: #aabbcc;  
			font-style: italic;  
			text-align: right;  
		}

	- Para cada tipo de seletor, pode-se utilizar dois tipos principais de atributos: classe e id, separando os estilos de acordo com a necessidade. Regras básicas: comunicação pura, sem começar com dígitos, sem espaços em branco ou carácteres especiais (ç, ã...). Com relação ao atributo ID, só é possível existir um único elemento atribuído à especificação (identidade única).

	Do html para o .css:

		`<p class="centraliza">`...			p.centraliza{...}  
		`<p id="id001">`...				#id001 {...}

- CORES:	
	- RGB - Red Green Blue - (0 ~ 255, 0 ~ 255, 0 ~ 255). Isso leva à:  
	256 * 256 * 256 = 2⁸ * 2⁸ * 2⁸ = 2^24 ~ 17 milhões de possibilidades.  
	Ex.: rgb(22,117,49); ou rgb(45%,125,10%);
	
	- Hexadecimal:
			D			H  
			0			0  
			1			1  
			2			2  
			...			...  
			9			9  
			10			A  
			11			B  
			12			C  
			13			D  
			14			E  
			15			F  
			...			...  
			255			FF  
	Ex.: #1CA71A
	
	- RGBA - A = Opacidade entre 0 ~ 1.  
	Ex.: rgba(12,200,99,0.6); ou rgba(12,200,99,60%);

## Aplicações para WEB

De acordo com o conteúdo do html e a estilização dada pelo css, quando esses elementos não mudam o design é considerado estático, do contrário, é dinâmico. Os Protocolos de Comunicação, principalmente o http, são  fundamentais para a existência de uma aplicação para web. Deveremos entender o tipo de uso de cada usuário. podendo ser client-side ou server-side.

Cliente x Servidor

Interesses: python, pearl, javascript...

O Processo de interpretação de uma linguagem funciona linha por linha, em conjunto com o processador, gerenciando os envíos enquanto for necessário. Já no caso da Compilação, o programa atua lendo todas as linhas de código e convertendo-as em binário executável (pronto para o processador executar).


### PHP - Pre-HyperlinkProcessor

Percussor Finlandês criou a linguagem para mediar os dados em páginas a internet. O termo foi mudado após algum tempo, tendo como nome primário ersonal Home Page. Quando todos essas ferramentas estão presentes (Pacotes Apache, MySql, PhP), junto à Tecnologia computacional, forma-se uma estação de esenvolvimento (DevStation).