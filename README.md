# Wordpress - Documentação de projetos Santa Fé/FALOMI

Informações úteis para desenvolvimento de projetos da plataforma Wordpress na agência Santa Fé/FALOMI.

## Template base

Usamos o [stanleywp](http://santafepublicidade.com.br/clientes/santafe/stanleywp.zip) como template para desenvolvimento. Ele serve apenas como base, já que é um template básico em HTML5 e Bootstrap, além de ter algumas funções úteis configuradas pelo *functions.php*

Não restringimos o uso de outro template base, ficando a critério do desenvolvedor qual template será usado.

## Padrão de plugins

Após anos de desenvolvimento e testes nesta plataforma, chegamos a um consenso de plugins que podem ser usados para modificações e melhorias no site. 

Segue a lista de plugins usados e testados por nossa agência:

### Conteúdo dinâmico inserido pelo cliente

- [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/)

#### Add-ons úteis: 

- [Image Crop](https://wordpress.org/plugins/acf-image-crop-add-on/) - Para campos de imagem onde seja necessário uma dimensão exata da imagem

### SEO/Inbound Marketing

- [Yoast SEO](https://wordpress.org/plugins/wordpress-seo/)
- [301 Redirects](https://wordpress.org/plugins/eps-301-redirects/)
- [RD Station](https://wordpress.org/plugins/integracao-rd-station/) - Para integração de formulários
- [Clean Image Filenames](https://wordpress.org/plugins/clean-image-filenames/)
- Caso o ambiente tenha endereço seguro (SSL): [Force HTTPS](https://br.wordpress.org/plugins/wp-force-https/)

### Site multi-idioma

- [qTranslate X](https://wordpress.org/plugins/qtranslate-x/)

#### Add-ons úteis:
- [ACF qTranslate](https://br.wordpress.org/plugins/acf-qtranslate/) - Para integração com o Advanced Custom Fields

### Performance e Otimização

- [Autoptimize](https://wordpress.org/plugins/autoptimize/)
- [Smush](https://wordpress.org/plugins/wp-smushit/) - Configurar para tamanho máximo de arquivo: 1024x1024

#### Cache

- [WP Super Cache](https://wordpress.org/plugins/wp-super-cache/)
- Para servidores Apache: [Leverage Browser Caching](https://wordpress.org/plugins/leverage-browser-caching/)

### Migração de ambiente

- Caso já tenha o Wordpress instalado no ambiente de publicação: [All-in-One WP Migration](https://wordpress.org/plugins/all-in-one-wp-migration/)
- Caso não haja Wordpress instalado no ambiente de publicação: [Duplicator](https://wordpress.org/plugins/duplicator/)

### Outros plugins úteis

- [Custom Taxonomy Order](https://wordpress.org/plugins/custom-taxonomy-order-ne/) - Para reordenação de taxonomias já cadastradas
- [pipDisqus](https://wordpress.org/plugins/pipdisqus/) - Para implementação do Disqus nos comentários
- [TinyMCE Advanced](https://br.wordpress.org/plugins/tinymce-advanced/) - Habilita mais botões no editor de conteúdo do Wordpress (como tabelas)
- [Increase Max Upload Filesize](https://wordpress.org/plugins/upload-max-file-size/) - Para aumentar o tamanho máximo de arquivos para upload no Wordpress. Útil quando não se tem acesso ao *.htaccess* do ambiente
- [File Manager](https://wordpress.org/plugins/wp-file-manager/) - Útil quando não se tem acesso ao FTP do ambiente

## Suporte da plataforma

- Stack Overflow
- [CODEX](https://codex.wordpress.org/)
- **Sites já desenvolvidos (arquivos no servidor)**

