<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    
    <!-- HTML Meta Tags -->
    <title>Everaldo.Dev || Everaldo Matias - Desenvolvedor WordPress e Designer Gráfico/Digital</title>
    <meta name="description" content="Everaldo Matias, desenvolvedor dedicado a criação, manutenção e suporte de sites e lojas virtuais com WordPress.">
    
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Everaldo.Dev">
    <meta itemprop="description" content="Everaldo Matias, desenvolvedor dedicado a criação, manutenção e suporte de sites e lojas virtuais com WordPress.">
    <meta itemprop="image" content="">
    
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://everaldo.dev/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Everaldo.Dev">
    <meta property="og:description" content="Everaldo Matias, desenvolvedor dedicado a criação, manutenção e suporte de sites e lojas virtuais com WordPress.">
    <meta property="og:image" content="">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Everaldo.Dev">
    <meta name="twitter:description" content="Everaldo Matias, desenvolvedor dedicado a criação, manutenção e suporte de sites e lojas virtuais com WordPress.">
    <meta name="twitter:image" content="">
    
    <style>
        html {
        	scroll-behavior: smooth;
        }
        body {
        	background-color: #666;
        	color: #fff;
        	font-size: 16px;
        	margin: 0;
        }
        a {
        	text-decoration: none;
        }
        img {
        	display: block;
        	height: auto;
        	max-width: 100%;
        }
        .italic {
        	font-style: italic;
        }
        .container {
        	padding: 3vh 5vw;
        }
        .top-title {
        	color: #FFF;
        	font-size: 2.5rem;
        }
        .dev {
        	background: #262624;
        	color: #66D9EF;
        	font-family: "Courier New", "Courier", "Lucida Sans Typewriter" , "Lucida Typewriter", monospace;
        	font-size: 1.1rem;
        	overflow: hidden;
        }
        body.show-blog .dev {
        	padding-bottom: 0;
        }
        .dev a {
        	color: #AC80EB;
        	font-size: 18px; /* Some tweener fallback that doesn't look awful */ 
          	font-size: 1.5rem;
          	font-weight: bold;
        	opacity: 0.75;
        	overflow: overlay;
        }
        .dev a:hover {
        	color: #F92672;
        }
        .dev h3 {
        	color: #A6E22E;
        	word-wrap: break-word;
        }
        .dev li {
        	line-height: 1.7rem;
        	margin-bottom: 1vw;
        	margin-left: 3.5vw;
        }
        .dev .abre-codigo {
        	display: inline-block;
        }
        .dev .fecha-codigo {
        	display: block;
        	margin-bottom: 15px;
        }
        .dev p {
        	line-height: 1.7rem;
        	margin-left: 2vw;
        }
        .dev p span.skills {
        	background-color: #444444;
        	display: inline-block;
        	margin-bottom: 7px;
        	padding: 5px 10px;
        }
        .dev p span.skills.skills80 {
        	width: 80%;
        }
        .dev p span.skills.skills65 {
        	width: 65%;
        }
        .dev p span.skills.skills50 {
        	width: 50%;
        }
        .dev p span.skills.skills30 {
        	width: 30%;
        }
        .dev p span.skills.skills20 {
        	width: 20%;
        }
        @media( max-width: 1200px ) {
        	.dev {
        		/* font-size: 1.5vw; */
        	}
        }
        @media( max-width: 768px ) {
        	.dev {
        		/* font-size: 2.5vw;
        		height: auto; */
        	}
        }
        @media( max-width: 576px ) {
        	.dev {
        		/* font-size: 3.5vw; */
        	}
        }
        /* Blog */
        .blog {
        	background-color: #f5f5f5;
        	bottom: 0;
        	color: #262624;
        	position: relative;
        	width: 100%;
        }
        .link-blog {
        	background-color: #f5f5f5;
        	bottom: 0;
        	color: #262624;
        	position: fixed;
        	transition: opacity 0.8s;
        	width: 100%;
        	z-index: 99;
        }
        .link-blog .container {
            display: flex;
            align-items: flex-end;
        }
        .link-blog h2 {
        	display: inline-block;
        }
        body.show-blog .link-blog {
        	opacity: 0;
        }
        body.show-blog .blog {
        	position: relative;
        }
        .blog .top-title,
        .link-blog .top-title {
        	color: #3C1379;
        	margin: 10px 10px 0 0;
        }
        .blog h2.top-title {
            margin-bottom: 30px;
        }
        .blog h1, h2, h3, h4, h5, h6 {
        	color: #AC80EB;
        }
        .blog a {
        	font-size: 1.1rem;
        	opacity: 1;
        }
        .blog .each-post {
        	background-color: #eee;
            border-radius: 10px;
            border: 1px solid #ddd;
            margin-bottom: 30px;
            padding: 15px  30px;
            -webkit-transition: background-color 1s;
            transition: background-color 1s;
        }
        .blog .each-post:hover {
            background-color: #fbfbfb;
        }
        .blog .each-post figure {
        	margin: 1.5vw 2vw;
        }
        .blog .each-post .screen-reader-text {
            display: none;
        }
        * {
          box-sizing: border-box;
        }
        .blog-rotating {
        	display: none;
            position: absolute;
            top: 36px;
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-9704918-9"></script>
	<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-9704918-9');
	</script>

    
</head>

<body class="home home-headless">

    <main class="wrap">
	
		<section class="dev">

			<div class="container">
			
				<section itemscope itemtype="http://schema.org/Person">
					<h1 class="top-title"><span itemprop="givenName">Everaldo</span> <span itemprop="familyName">Matias</span></h1>
					<h2><span itemprop="jobTitle">Desenvolvedor WordPress</span></h2>
					<p itemprop="knowsAbout">Desenvolvimento, manutenção e suporte para sites e lojas virtuais (e-commerce) em WordPress desde 2009.</p>
				</section>

				<section itemscope itemtype="http://schema.org/hasOccupation">
					<h3>Skills</h3>
					<span class="abre-codigo">{</span>
					<p>
						<span itemprop="skills" class="skills skills80">WordPress (Desenvolvimento de Temas e Plugins)</span><br>
						<span itemprop="skills" class="skills skills80">HTML</span><br>
						<span itemprop="skills" class="skills skills80">CSS</span><br>
						<span itemprop="skills" class="skills skills65">PHP</span><br>
						<span itemprop="skills" class="skills skills50">Versionamento Git</span><br>
						<span itemprop="skills" class="skills skills30">JavaScript</span><br>
						<span itemprop="skills" class="skills skills20">jQuery</span><br>
						<span itemprop="skills" class="skills skills20">MySQL</span><br>
						<span itemprop="skills" class="skills skills20">SASS</span><br>
					</p>
					<span class="fecha-codigo">}</span>
				</section>			

				<h3>Formação</h3>

				<a href="https://www.uninove.br/graduacao/tecnologia-em-sistemas-para-internet/o-que-e/" target="_blank" rel="noopener">Uninove</a>
				<span class="abre-codigo">{</span>
				<p>
					2017/2019
					<br>
					Tecnologia em Sistemas para Internet
				</p>			
				<span class="fecha-codigo">}</span>

				<h3>Experiência</h3>

				<a href="https://agpagencia.com.br" target="_blank" rel="noopener">AGP Agência</a>
				<span class="abre-codigo">{</span>
				<p>
					2015/atual
					<br>
					Desenvolvedor WordPress
				</p>
				<span class="fecha-codigo">}</span>

				<a href="">Junto Propaganda</a>
				<span class="abre-codigo">{</span>
				<p>
					2015/2015
					<br>
					Desenvolvedor WordPress
				</p>
				<span class="fecha-codigo">}</span>

				<a href="https://www.bloglite.net/blog/" target="_blank" rel="noopener">Bloglite</a>
				<span class="abre-codigo">{</span>
				<p>
					2014/2015
					<br>
					Redator de posts sobre WordPress
				</p>
				<span class="fecha-codigo">}</span>

				<a href="https://brasa.art.br" target="_blank" rel="noopener">Brasa Design</a>
				<span class="abre-codigo">{</span>
				<p>
					2009/atual
					<br>
					Sócio fundador e desenvolvedor WordPress
				</p>
				<span class="fecha-codigo">}</span>

				<a href="http://www.racine.com.br/" target="_blank" rel="noopener">Instituto Racine</a>
				<span class="abre-codigo">{</span>
				<p>
					2007/2009
					<br>
					Designer assistente web e gráfico
				</p>
				<span class="fecha-codigo">}</span>

				<h3>Ações Voluntárias</h3>

				<a href="https://profiles.wordpress.org/everaldomatias" target="_blank" rel="noopener">Comunidade WordPress</a>
				<span class="abre-codigo">{</span>
				<p>Contribuo com a comunidade WordPress desde Março de 2010, auxiliando no Fórum Brasileiro, traduzindo temas, plugins e o próprio Core do WordPress.</p>
				<span class="fecha-codigo">}</span>
				
				<a href="https://wordpress.org/plugins/open-whatsapp-chat/" target="_blank" rel="noopener">Open WhatsApp Chat (Descontinuado)</a>
				<span class="abre-codigo">{</span>
				<p>Plugin WordPress para adicionar de forma simples o WhatsApp Chat ao seu site. Criado e disponibilizado de forma gratuita no repositório oficial de plugins do WordPress.</p>
				<span class="fecha-codigo">}</span>

				<a href="http://tema.coletivowp.com.br/" target="_blank" rel="noopener">Tema Coletivo</a>
				<span class="abre-codigo">{</span>
				<p>Ocasionalmente participo do desenvolvimento e evolução do <b>Tema Coletivo</b>. Um tema WordPress desenvolvido com o objetivo de facilitar a implementação de sites por designers e até mesmo usuários finais.</p>
				<span class="fecha-codigo">}</span>

				<a href="https://gitlab.com/everaldomatias/tim-maia" target="_blank" rel="noopener">Tim Maia</a>
				<span class="abre-codigo">{</span>
				<p>Tema WordPress que criei com foco em <i>mini-sites</i> e que está disponível gratuitamente no Gitlab.</p>
				<span class="fecha-codigo">}</span>

				<a href="https://caminhodobem11.com/" target="_blank" rel="noopener">Caminho do Bem 11 (Descontinuado)</a>
				<span class="abre-codigo">{</span>
				<p>Criei o site do <b>Caminho do Bem 11</b> como minha contribuição para a causa. <b>O Caminho do Bem 11</b> é uma ação social em benefícios de comunidades, ONGs, abrigos, asilos, orfanatos e das pessoas em situação de rua.</p>
				<span class="fecha-codigo">}</span>

				<h3>Contatos</h3>

				<a href="tel:+5511947910004" target="_blank" rel="noopener">Celular/WhatsApp/Telegram</a>
				<span class="abre-codigo">{</span>
				<p>+55 11 9 4791 0004</p>
				<span class="fecha-codigo">}</span>

				<a href="mailto:aoseudispor@everaldo.dev" target="_blank" rel="noopener">E-mail</a>
				<span class="abre-codigo">{</span>
				<p>aoseudispor@everaldo.dev</p>
				<span class="fecha-codigo">}</span>

			</div><!-- /.container -->
			
		</div><!-- /.dev -->

		<section class="blog" id="blog">
			<div class="container">
				<h2 class="top-title">Blog
                <div id="blog-rotating" class="blog-rotating lds-css ng-scope"><div style="width:100%;height:100%" class="lds-pacman"><div><div></div><div></div><div></div></div><div><div></div><div></div></div></div>
				<style type="text/css">@keyframes lds-pacman-1{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}50%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}100%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}}@-webkit-keyframes lds-pacman-1{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}50%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}100%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}}@keyframes lds-pacman-2{0%{-webkit-transform:rotate(180deg);transform:rotate(180deg)}50%{-webkit-transform:rotate(225deg);transform:rotate(225deg)}100%{-webkit-transform:rotate(180deg);transform:rotate(180deg)}}@-webkit-keyframes lds-pacman-2{0%{-webkit-transform:rotate(180deg);transform:rotate(180deg)}50%{-webkit-transform:rotate(225deg);transform:rotate(225deg)}100%{-webkit-transform:rotate(180deg);transform:rotate(180deg)}}@keyframes lds-pacman-3{0%{-webkit-transform:translate(190px,0);transform:translate(190px,0);opacity:0}20%{opacity:1}100%{-webkit-transform:translate(70px,0);transform:translate(70px,0);opacity:1}}@-webkit-keyframes lds-pacman-3{0%{-webkit-transform:translate(190px,0);transform:translate(190px,0);opacity:0}20%{opacity:1}100%{-webkit-transform:translate(70px,0);transform:translate(70px,0);opacity:1}}.lds-pacman{position:relative}.lds-pacman > div:nth-child(2) div{position:absolute;top:40px;left:40px;width:120px;height:60px;border-radius:120px 120px 0 0;background:#e9d40c;-webkit-animation:lds-pacman-1 1s linear infinite;animation:lds-pacman-1 1s linear infinite;-webkit-transform-origin:60px 60px;transform-origin:60px 60px}.lds-pacman > div:nth-child(2) div:nth-child(2){-webkit-animation:lds-pacman-2 1s linear infinite;animation:lds-pacman-2 1s linear infinite}.lds-pacman > div:nth-child(1) div{position:absolute;top:92px;left:-8px;width:16px;height:16px;border-radius:50%;background:#767676;-webkit-animation:lds-pacman-3 1s linear infinite;animation:lds-pacman-3 1s linear infinite}.lds-pacman > div:nth-child(1) div:nth-child(1){-webkit-animation-delay:-.67s;animation-delay:-.67s}.lds-pacman > div:nth-child(1) div:nth-child(2){-webkit-animation-delay:-.33s;animation-delay:-.33s}.lds-pacman > div:nth-child(1) div:nth-child(3){-webkit-animation-delay:0;animation-delay:0}.lds-pacman{width:35px!important;height:35px!important;-webkit-transform:translate(-17.5px,-17.5px) scale(0.175) translate(17.5px,17.5px);transform:translate(-17.5px,-17.5px) scale(0.175) translate(17.5px,17.5px)}</style>
                </div><!-- /.lds-pacman -->
                </h2>
				<div id="posts-container"></div>
			</div><!-- /.container -->
		</section><!-- /.blog -->

	</main><!-- /.wrap -->
	
	<script>
        var postsContainer = document.getElementById( 'posts-container' );
        var blogRotating = document.getElementById( 'blog-rotating' );
          
        window.addEventListener( 'load', function(){
    
            var ourRequest = new XMLHttpRequest();
            
            blogRotating.style.display = 'inline-block';
            
            ourRequest.open( 'GET', 'https://everaldo.dev/wp/wp-json/wp/v2/posts?order=desc' );
            ourRequest.onload = function() {
                if ( ourRequest.status >= 200 && ourRequest.status < 400 ) {
                    var data = JSON.parse( ourRequest.responseText );
                    //console.log(data);
                    createHTML( data );
                    blogRotating.style.display = 'none';
                } else {
                    console.log( 'We connected to the server, but it returned an error.' );
                }
            };
    
            ourRequest.onerror = function() {
                console.log( 'Connection error' );
            }
    
            ourRequest.send();
    
        });
        function createHTML( postsData ) {
            var ourHTMLString = '';
            
            for( var i = 0; i < postsData.length; i++ ) {
                
        		ourHTMLString += '<div class="each-post">';
                ourHTMLString += '<a href="' + postsData[i].link + '">';
                ourHTMLString += '<h2>' + postsData[i].title.rendered + '</h2>';
                ourHTMLString += '</a>';
        		ourHTMLString += postsData[i].excerpt.rendered;
        		ourHTMLString += '</div><!-- /.each-post -->';
            }
        
            postsContainer.innerHTML = ourHTMLString;
        }

    </script>

</body>
</html>