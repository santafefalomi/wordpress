/*
Como esconder itens do menu do wp-admin para determinados usuários
Em casos em que você cria um site e precisa disponibilizar o usuário com funções administrativas para seus clientes, recomendo que limite algumas opções do WP-Admin.

Já me aconteceu de alguns clientes receberem os dados do wp-admin e alterarem configurações relativas ao funcionamento do site, e tomar grandes prejuízos, como:

Desindexação do site no Google
Desconfiguração do WooCommerce
Desconfiguração nos formulários de contato
etc…
Desta forma, não enviamos mais para nossos clientes o wp-admin completo – isto é, os usuários tem permissão apenas para alterar o que os convém, como notícias e produtos.

Limitar as permissões de páginas para usuário no wp-admin
O que o código abaixo faz não é exatamente restringir o acesso dos usuários no wp-admin a determinadas áreas. O que o código faz é esconder os itens do menu. Desta forma, usuários menos experientes não vão alterar configurações que podem prejudicar o bom funcionamento do site.

Para esconder itens específicos do menu do wp-admin, basta usar o código abaixo em seu functions.php, removendo os campos que deseja deixar disponível para o usuário.
*/


$user_id = get_current_user_id();
if ($user_id == 10) { //em 10, adicione o ID do usuário que deseja remover os itens do menu

 function remove_menus(){

 remove_menu_page( 'index.php' ); //Dashboard 
 remove_menu_page( 'edit.php' ); //Posts - publicações
 remove_menu_page( 'upload.php' ); //Media - imagens, vídeos, docs, etc...
 remove_menu_page( 'edit.php?post_type=page' ); //Pages - páginas
 remove_menu_page( 'edit-comments.php' ); //Comments - comentários
 remove_menu_page( 'themes.php' ); //Appearance - aparência (recomendo!)
 remove_menu_page( 'plugins.php' ); //Plugins (recomendo!)
 remove_menu_page( 'users.php' ); //Users - usuários 
 remove_menu_page( 'tools.php' ); //Tools - ferramentas (recomendo!)
 remove_menu_page( 'options-general.php' ); //Settings - configurações 
 remove_menu_page( 'admin.php?page=revslider' ); //revolution slider, se estiver instalado
 
 }
 add_action( 'admin_menu', 'remove_menus' );
 
} else {}
