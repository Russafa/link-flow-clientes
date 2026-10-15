# Template Blog + Artigo — Telas Padrão (Fase 3)

Gerado em 2026-10-15 a partir do PDF de referência enviado pela Priscila
("Telas Padrão — Implementação Blog e Artigos no WordPress"), com uma
mudança deliberada em relação ao PDF original: **removida a categoria/aba
de filtro "Construção"**. Confirmado com a Priscila (2026-10-15): a
Telas Padrão não trabalha com Malha POP nem telas para construção civil
(decisão já registrada em `projeto.md` → `## ICP (Fase 1)` em 2026-10-08).
As categorias reais do catálogo usadas nos filtros/cards são:
**eletrosoldada, galvanizada, inox, protecao, peneiracao**.

Referências visuais usadas como base de fidelidade (mockups prontos,
claude.ai — mencionados no PDF):
- Blog (listagem): https://claude.ai/artifact/2kZ7xY2sbEYu3u9WuAuoHJ
- Artigo (single): https://claude.ai/artifact/S7C8JCEBCr4CXTZ1n1t9NN
- Cabeçalho/header: https://claude.ai/artifact/ToCN7s2yQoAnCrPQoFTAQK

## O que tem aqui

- `assets/blog-artigo.css` — design tokens (cores/fontes/layout) + estilos
  da listagem do blog (hero, filtros, grid de cards) e do artigo (hero,
  corpo, figuras, TOC sticky).
- `assets/blog-artigo.js` — reveal-on-scroll, filtro de categoria (sem
  "construcao"), destaque da seção ativa no índice (TOC).
- `functions-additions.php` — código para colar no `functions.php` do
  child theme: enqueue dos assets, `add_image_size('blog-card', 800, 450,
  true)`, `telas_read_time()`, `get_primary_category_slug()`,
  `telas_generate_toc()`, `telas_add_heading_ids()` (filtro `the_content`
  que adiciona `id` automático em H2/H3 para a TOC funcionar).
- `home-blog.php` — template da listagem do blog (ver nota abaixo sobre
  nome do arquivo).
- `single.php` — template do artigo único.

## Como aplicar (sessão local com Novamira — este ambiente remoto não tem
escrita no WordPress)

1. **Child theme**: confirmar se a Telas Padrão já tem child theme ativo
   (Raio-X Técnico da Fase 2 não deixou isso registrado explicitamente —
   checar antes de escrever arquivos). Se não houver, criar um antes de
   prosseguir (nunca editar o tema pai direto).
2. Copiar `functions-additions.php` para dentro do `functions.php` do
   child theme (ou `require_once` de um arquivo separado, ex.
   `inc/telas-blog.php`).
3. Criar a pasta `assets/` no child theme e copiar `blog-artigo.css` e
   `blog-artigo.js` para lá.
4. Copiar `single.php` para a raiz do child theme.
5. Para a listagem do blog, **decidir antes de copiar `home-blog.php`**:
   - Se o site usa a "última página de posts" padrão do WordPress (sem
     página estática de blog configurada) → renomear para `home.php`.
   - Se existe uma página estática atribuída como "página de posts" em
     Configurações > Leitura → renomear para `page-blog.php` (ou o slug
     real da página) e confirmar que essa página existe/está configurada.
   - Checar isso no site antes de decidir — não assumir.
6. **Thumbnails**: os posts existentes provavelmente não têm imagem
   destacada no tamanho certo. Specs do PDF:
   - Card da listagem: 800×450 (16:9) — tamanho `blog-card` já registrado
     no `functions-additions.php`.
   - Hero do artigo: 1600×900 (16:9), mínimo 1200px de largura (fallback
     `var(--dark)` se não houver imagem destacada).
   - Figura no meio do artigo (opcional, via ACF): 900×506 (16:9).
   Regenerar thumbnails dos posts existentes depois de adicionar
   `add_image_size` (plugin "Regenerate Thumbnails" ou similar).
7. **Menu de navegação**: o PDF pede para trocar "Aplicações" por "Blog"
   e "Contato" no header, estrutura final:
   `PRODUTOS ▾ | BLOG | CONTATO | A EMPRESA ↑ | [botão ORÇAMENTO]`.
   Fazer isso em Aparência > Menus — **não está incluído nos arquivos
   deste pacote** (é configuração de menu, não código). Conferir a
   referência "Cabeçalho" acima antes de aplicar.
8. Publicar/testar uma página e um post reais, comparando com os 2
   mockups de referência (listagem e artigo).

## Checklist de validação (antes de considerar concluído)

- [ ] Child theme confirmado/criado antes de qualquer edição
- [ ] `functions-additions.php` colado sem erros de sintaxe (checar
      `wp-content/debug.log` ou tela branca)
- [ ] CSS/JS carregando só em `is_home()`/`is_archive()`/post single
      (não vazar para Money Pages nem outras páginas)
- [ ] Filtro de categoria no blog mostra **só** eletrosoldada, galvanizada,
      inox, protecao, peneiracao — **sem** "Construção"
- [ ] Nenhum post real está marcado com uma categoria "construcao" (se
      existir, reclassificar antes de publicar o filtro)
- [ ] TOC do artigo gera links funcionais (IDs batendo com os H2/H3 reais)
- [ ] Thumbnails nos tamanhos corretos (card 800×450, hero 1600×900)
- [ ] Botão de WhatsApp no fim do artigo aponta para
      `https://api.whatsapp.com/send?phone=5511933460625`
- [ ] Menu do header atualizado (Blog + Contato) — conferido visualmente
      contra a referência "Cabeçalho"
- [ ] **Nenhuma medida específica inventada nos textos dos artigos**
      (malha, bitola, diâmetro, largura) — regra de integridade de
      conteúdo já seguida nas Money Pages
- [ ] Testado em mobile (grid 1 coluna, TOC não quebra layout)
- [ ] Aprovação da Priscila antes de publicar artigos reais usando o
      template

## Pendente de decisão/execução (fora do escopo deste pacote de arquivos)

- Escrever os 8 artigos do calendário (`fase3-conteudo/calendario-artigos.md`)
  — nenhum foi escrito ainda, isso é um passo separado.
- Decisão da Priscila sobre os 3 posts órfãos (republicar ou descartar)
  antes de popular a listagem do blog com conteúdo real.
- Aplicar `/telas_onduladas/` (já aprovado, briefing em
  `fase3-conteudo/briefing-telas-onduladas.md`) — não é parte do
  blog/artigo, mas está pendente na mesma leva de trabalho da sessão local.
