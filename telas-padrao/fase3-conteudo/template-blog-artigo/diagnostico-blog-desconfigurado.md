# Diagnóstico — página do Blog desconfigurada (sem CSS/sem markup customizado)

A Priscila aplicou o pacote `fase3-conteudo/template-blog-artigo/` e a
página do blog voltou totalmente sem estilo: título genérico "Arquivos",
lista simples de posts sem hero, sem filtros de categoria, sem grid de
cards — nenhum markup nosso aparece (só o header/menu, que já estava
certo com "BLOG" no menu).

Isso indica duas coisas prováveis ao mesmo tempo:
1. O arquivo de listagem não está na hierarquia de templates do
   WordPress (ou foi deixado com o nome `home-blog.php`, que é só o
   nome de referência no repo — ele PRECISA ser renomeado antes de ir
   pro tema).
2. O CSS/JS (`blog-artigo.css`/`blog-artigo.js`) não está sendo
   enfileirado — ou o `functions-additions.php` não foi colado, ou foi
   colado mas com erro silencioso.

## Rode isto primeiro (só leitura, não mexer em nada ainda)

1. **Qual child theme está ativo e onde** — `wp-content/themes/<child-theme>/`.
   Rodar `site-info-get` ou equivalente no Novamira pra confirmar o
   theme ativo e o caminho real.
2. **Listar os arquivos da raiz do child theme** (via `novamira/execute-php`
   com algo como `scandir(get_stylesheet_directory())` ou leitura direta
   de arquivo) — precisamos ver exatamente quais arquivos existem:
   `functions.php`, e se existe `home.php`, `page-blog.php`,
   `archive.php`, `index.php`, `single.php`, e a pasta `assets/`.
3. **Confirmar qual URL é a página do blog** (a do print) — é a "página
   de posts" padrão (Configurações > Leitura > "Uma página estática" ou
   "Seus últimos posts")? Rodar algo que leia essa opção
   (`get_option('show_on_front')` e `get_option('page_for_posts')`).
4. **Ler o conteúdo de `functions.php`** do child theme — checar se as
   funções de `functions-additions.php` (`telas_enqueue_assets`,
   `telas_read_time`, `get_primary_category_slug`, `telas_generate_toc`,
   `telas_add_heading_ids`) estão lá dentro, literalmente, com o
   `add_action('wp_enqueue_scripts', 'telas_enqueue_assets')`.
5. **Confirmar se os arquivos `assets/blog-artigo.css` e
   `assets/blog-artigo.js` existem** dentro do child theme (mesmo path
   que `functions-additions.php` espera:
   `get_stylesheet_directory_uri() . '/assets/blog-artigo.css'`).
6. **Checar o log de erros do PHP** (`wp-content/debug.log` se WP_DEBUG
   estiver ligado, ou o log do Hostinger) — se `functions-additions.php`
   tiver sido colado com erro de sintaxe, o WordPress pode estar
   silenciosamente ignorando parte do `functions.php` (fatal error
   recuperável) ou a página inteira pode estar com white screen em outro
   lugar.

## O que eu preciso que você me responda (ou cole aqui) depois de rodar isso

- Nome do child theme + lista de arquivos na raiz dele.
- Se `home.php`/`page-blog.php`/`archive.php` existe e, se sim, o
  conteúdo atual (é o nosso `home-blog.php` renomeado, ou é outra
  coisa?).
- Trecho do `functions.php` relevante (se as funções do
  `functions-additions.php` estão lá).
- Se `assets/blog-artigo.css` e `.js` existem no caminho certo.
- Qualquer erro no log.

Com isso eu te devolvo a correção exata (reaplica o arquivo certo com o
nome certo, ou corrige o enqueue, ou os dois). Não aplicar nada ainda
além dessa leitura — é só diagnóstico.

## Lembrete — ainda pendente, não relacionado a este bug

Os 3 posts órfãos ("Aço Inox no cotidiano...", "Tela Inox ou
Galvanizada...", "5 Motivos para escolher Tela Soldada Galvanizada...")
aparecem na listagem — a decisão de republicar ou descartar ainda não foi
tomada com a Priscila (ver `fase3-conteudo/calendario-artigos.md`). Não
mexer nisso agora, só registrar que apareceu no print.
