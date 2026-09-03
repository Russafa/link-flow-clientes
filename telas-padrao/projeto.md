# Projeto — Telas Padrão

> Fonte da verdade do cliente. Handoff entre as fases. SÓ o orquestrador consolida aqui.
> Gerado por `orq-icp` no onboarding. Nunca editar manualmente campos gerados por MCP.

slug: telas-padrao

## Info Basica
- Negocio / segmento: Telas Padrão — fabricação e comércio de telas metálicas sob medida (telas soldadas, alambrado, telas onduladas, telas de aço inox)
- Cidade / regiao / raio: São Paulo capital, atendimento nacional (entregas para todo o Brasil)
- Site (host WordPress): https://telaspadrao.com.br/
- Conta (governanca de dados): ( ) 4maos  ( ) publicon — [A DEFINIR — Priscila deixou em aberto no onboarding]
- `location_id` (Ubersuggest): cidade (keywords) = 1001773 (São Paulo, SP) | nacional (domínio/tráfego) = 2076 (Brasil)

## NAP (consistente em site/schema/GBP)
- Nome: Telas Padrão
- Endereco: R. Periperi, 348 - Vila Socorro, São Paulo - SP
- CEP: 04760-060
- Telefone: Vendas (11) 93346-0625 | Financeiro (11) 5523-9198
> Nome, endereço e telefone confirmados pela Priscila em 2026-08-26. Razão Social/CNPJ não coletados neste onboarding (decisão da Priscila) — se necessário para schema Organization/GBP nas fases seguintes, coletar então.

## Horario de Atendimento
- Dias e horarios: Segunda a sexta, 07h às 18h.
> Coletado no BLOCO 2. Usado no schema openingHours, rodape e FAQ.

## Ambiente de Publicacao
- WordPress URL: https://telaspadrao.com.br — confirmado WordPress 7.1, PHP 8.2.30 (via `site-info-get`, 2026-09-02)
- Application Password: (NUNCA visivel ao cliente — guardado pelo sistema)
- Novamira: (x) instalado — v1.12.0 ativo (update disponível: 1.12.1). Conectado via MCP nativo do Claude Code (`novamira-telaspadrao-com`, OAuth escopo `mcp`), não via CLI standalone `novamira` (esse continua bloqueado por bug de Windows Credential Manager — ver nota em Estado das Fases).
  Abilities confirmadas via `discover-abilities` em 2026-09-02:
  - **Liberadas** para esta credencial OAuth: `hostinger-ai-assistant/site-info-get`; todo o bloco `hostinger-ai-assistant/elementor-*` (list-pages, get-page-structure, get-active-kit, get-kit-by-id, find-widgets, get-widget-by-id, update-widget-content/image/link/styles, assign-global-color, update-global-styles, create/update/delete-container); `yoast-seo/get-seo-scores` e `get-readability-scores`; todo o bloco `novamira/*` (execute-php, read/write/edit/delete-file, list-directory, create-upload-link, create-admin-access-link, agent-context, gutenberg-*, skill-*, design system).
  - **Bloqueadas** (`403 rest_oauth_route_forbidden`) para esta credencial: todo o resto do namespace `hostinger-ai-assistant/*` testado — `pages-get`, `pages-search`, `menus-search`, `wp-settings-get` (não testei individualmente cada uma das ~50 abilities restantes do namespace — posts/tags/categorias/usuários/mídia/temas/plugins/revisões/template-parts —, mas o padrão consistente sugere que todo o bloco de CRUD de conteúdo está fora do escopo atual, só as abilities Elementor + site-info-get + novamira/* passam).
  - `novamira/execute-php` funciona (testado, leitura de `wpseo_titles`), mas é bloqueado por padrão pelo classificador de segurança do Claude Code — exige confirmação explícita a cada chamada, não é "sempre disponível" na prática.
> ⚠️ Este campo NÃO é fonte de verdade. O agente DEVE verificar as abilities reais via discover-abilities antes de assumir o que pode ou não fazer.
- Tema / templates da designer (Money Page / Post): **Hello Elementor 3.5.1** (tema base minimalista, sem estilo próprio) + **Elementor 4.2.4 + Elementor Pro 3.28.3** (builder real de 100% do conteúdo — 11 páginas/posts usam `_elementor_data`). Kit de template usado como base: **"Dustrium - Template kit for Industrial & Manufacturing"** (kit_id 129, ativo). Ver `## Molde de Money Page` abaixo para o inventário de widgets.
- Backup automatico: All-in-One WP Migration and Backup 7.110 instalado e ativo — permite export manual; agendamento automático NÃO verificado (ability para checar configuração do plugin está fora do escopo OAuth atual).

## Molde de Money Page
- molde_id: 7 (post_id WordPress da página `/telas_soldadas/`, kw_principal "tela soldada")
- molde_slug: telas_soldadas
- inventario_widgets: (lido via `elementor-get-page-structure` em 2026-09-02, `_elementor_data` real de `post_id 7`)
  - 19 containers (layout aninhado: hero full-width com background de imagem → seções de conteúdo → grid 2x3 de aplicações → CTA final com background de imagem)
  - **heading** × 7 (`6a126f1e`, `1769dbbe`, `996d462`, `4dd4aaeb`, `1faad44c`, `389f14d`, `cc9527d`)
  - **text-editor** × 4 (`6b6a0c77`, `5436ebae`, `13fd58ea`, `2038977c`)
  - **icon-list** × 1 (`78d7440c` — características do produto)
  - **icon-box** × 6 (`54ed4417`, `356d141b`, `606aef9a`, `65291432`, `23f4b3d7`, `6e6a5233` — ícones das 6 aplicações)
  - **image** × 8 (`5e5f3bfe`, `4567f61c`, `b4f1a7e`, `15a1f8ae`, `1a1c308e`, `5d1b607c`, `1817bbba`, `24e7e6b5`)
  - **button** × 8 (`122c2b5`, `1de04c2d`, `3016cbf9`, `277a57d2`, `31af1f79`, `4fdfb1a0`, `2b33fdef`, `7e905679` — 6× "saiba mais" nos cards de aplicação + "FAÇA SEU PEDIDO" + "fale conosco" no CTA final)
  - **divider** × 1 (`4d1056da`)
  - Total: 35 widgets em 19 containers
  - Página irmã `/telas_soldadas_modelos/` (post_id 489) e `/telas_onduladas/` (post_id 398) reaproveitam os MESMOS container-IDs base (`45de065d`, `19f349c`, `1a4107e`, `2c9e447a`), confirmando que as 4 páginas de produto foram clonadas de um template comum — uma alteração estrutural no molde tende a precisar ser replicada manualmente nas outras 3, pois não usam Template/Theme Builder do Elementor Pro (conteúdo direto por página, sem template compartilhado de fato).

> molde_id e molde_slug: preenchidos no setup do cliente (antes da Fase 3).
> inventario_widgets: preenchido pelo agente na ETAPA 3 do SKILL.md ao ler o _elementor_data.
> NUNCA reutilizar inventário de outro cliente — cada molde tem IDs de widget únicos.

## Tom de Voz / Restricoes
- Tom: Técnico e direto — profissional, objetivo, reforça precisão/qualidade técnica do produto sob medida (telas soldadas, alambrado, aço inox), sem termos rebuscados, focado em especificações e prazo. Definido pela Priscila em 2026-08-26.
- Profissao regulada? (OAB/CFM/CFO/CONAR): Não
- `regulado: false`

## Dados do Profissional
- Numero de registro: N/A (sem regulação)
- Abordagem / especialidade: N/A
- Formacao (graduacao): N/A
- Especializacao / pos: N/A
> Profissão não regulada — Bloco 3 do onboarding não se aplica.

## Concorrentes (ORGANICOS — nao patrocinados)
1. catumbitelas.com.br (concorrente líder)
2. telasmm.com.br
3. teciam.com.br

| Concorrente | Domínio | DA | Tráfego orgânico (nacional) | KWs de overlap |
|---|---|---|---|---|
| Catumbi Telas | catumbitelas.com.br | 10 | ~14.713/mês | tela soldada, alambrado |
| Telas MM | telasmm.com.br | 18 | ~1.916/mês | tela soldada, tela de aço (inox) |
| Teciam | teciam.com.br | 22 | ~441/mês | tela soldada, tela ondulada |

Concorrente líder (maior tráfego): **catumbitelas.com.br** — usado na Etapa 6 (arquiteto-seo).

> Lista revisada em 2026-08-26 a pedido da Priscila: `paperplast.com.br` (catálogo principal é lona plástica, não tela metálica) e `casadascercas.com.br` (e-commerce de cercas em geral, não fabricante de tela metálica sob medida) foram RETIRADOS por não serem concorrentes diretos do negócio da Telas Padrão. Substituídos por `teciam.com.br` e `telasmm.com.br` — ambos fabricantes de telas metálicas sob medida (soldada, ondulada, aço inox/tecido metálico), catálogo muito mais próximo do da Telas Padrão. `catumbitelas.com.br` foi mantido (confirmado por SERP overlap e vende telas metálicas, ainda que também venda mosquiteiras/redes).
>
> Metodologia original (SERP overlap): 4 KWs transacionais com volume real (locId nacional 2076): "tela soldada", "alambrado", "tela soldada galvanizada", "tela ondulada". `teciam.com.br` e `telasmm.com.br` apareceram nessas buscas (posições 9 e 23 respectivamente, na SERP de "tela ondulada") mas com tráfego menor que os domínios inicialmente escolhidos — priorizados agora por relevância de catálogo (decisão da Priscila) em vez de só volume de overlap.

## ICP (Fase 1)
- Servicos (priorizados por receita, a partir do catálogo atual do site + volume real):
  1. Tela soldada galvanizada sob medida (produto core — já é página existente)
  2. Tela ondulada sob medida
  3. Tela de aço inox sob medida
  4. Telas para alambrado/cercamento (aplicação de maior volume de busca, hoje sem página dedicada — ver GAP em Money Pages)
- Publico-alvo: Empresas de construção civil, indústrias, condomínios e produtores rurais em todo o Brasil que compram tela metálica sob medida (soldada, ondulada, aço inox) para cercamento, segurança e uso industrial/agropecuário — compra B2B/B2C via e-commerce com entrega nacional, não é negócio hiperlocal.
- `kw_principal`: tela soldada (9.900 buscas/mês nacional, SD 14 — baixa dificuldade)
- KWs secundarias (volume real nacional, locId 2076): alambrado (22.200/mês), tela alambrado (9.900/mês), tela de alambrado (8.100/mês), tela soldada galvanizada (3.600/mês), tela ondulada (2.400/mês), tela para alambrado (2.900/mês). Volume local (São Paulo, locId 1001773): tela soldada (390/mês), tela de aço inox (70/mês).

## SERP da KW principal (Fase 1)
> Preenchido por `serp_analysis` (Ubersuggest) em `fase1-planejamento`. KW: "tela soldada" — 9.900 buscas/mês (Brasil), SD 14.
- Local pack (3-pack): ( ) nao — negócio de entrega nacional via e-commerce, sem local pack nesta KW
- Top 3 organico real da SERP: casadascercas.com.br (pos. 2), catumbitelas.com.br (pos. 4), paperplast.com.br (pos. 5) — os 2 primeiros não são tratados como concorrentes de conteúdo (ver nota em Concorrentes); `teciam.com.br` aparece na posição 12 e `telasmm.com.br` na posição 35 para esta mesma KW.
- Featured snippet: ( ) nao detectado
- PAA (People Also Ask): presente na SERP (posição 6), conteúdo não extraído — ver nota em H2s dos Concorrentes

## Arquitetura Aprovada (Gate Humano 1)
- `approved: true`
- `approved_at`: 2026-08-27
- Silos / categorias (proposta — aguardando aprovação da Priscila):
  - Silo "Telas Soldadas" (nível 1, já existe em `/telas_soldadas/` e `/telas_soldadas_modelos/`) — inclui aplicações (construção civil, cercamento, viveiro/agropecuária)
  - Silo "Telas Onduladas" (nível 1, já existe em `/telas_onduladas/`)
  - Silo "Tela de Aço Inox" (nível 1, GAP — hoje só existe como menção em página comparativa, sem página de produto dedicada)
  - Silo "Alambrado / Cercamento" (nível 1, GAP — maior volume de busca do nicho, 22.200/mês em "alambrado", nenhuma página dedicada hoje; catumbitelas.com.br tem)
  - Blog/comparativos técnicos (nível 1, já existe: `/tela-ondulada-ou-tela-eletrosoldada-qual-a-melhor-para-o-seu-projeto/`)
- Mapa de URLs: ver `arquiteto-seo/estrategia_seo_catumbitelas.com.br.md` e `arquiteto-seo/paginas.json` — gerados a partir de `domain_top_pages`/`domain_overview` do concorrente líder (catumbitelas.com.br), sem crawl completo (sandbox de rede desta sessão bloqueia WebFetch para domínios externos — ver nota nas H2s dos Concorrentes)

## Money Pages
> wp_post_id preenchido em 2026-09-02 (via `elementor-list-pages`/`site-info-get`) para as páginas que já existem — Novamira conectado (ver Ambiente de Publicacao). "—" nas linhas GAP = página ainda não existe. Slugs reais confirmados via `page-sitemap.xml` usam underscore, não hífen (ver nota em Raio-X Tecnico).

| Slug | Template | KW principal | Volume/mês | wp_post_id | Status |
|---|---|---|---|---|---|
| / (home) | — | telas padrão (branded) | 320/mes | 138 | pendente (existe — já #1 orgânico, manter) |
| /telas_soldadas/ | — | tela soldada | 9.900/mes | 7 | pendente (existe — posição 46/50, precisa otimização forte; molde_id da Fase 2, ver Molde de Money Page) |
| /telas_soldadas_modelos/ | — | modelos de tela | 720/mes | 489 | pendente (existe — posição 24) |
| /telas_onduladas/ | — | tela ondulada | 2.400/mes | 398 | pendente (existe — fora do top 20 nacional na SERP consultada, checar indexação) |
| /tela-ondulada-ou-tela-eletrosoldada-qual-a-melhor-para-o-seu-projeto/ | — | telas corrugadas | 260/mes | 786 | pendente (existe, é blog comparativo — manter como conteúdo de apoio, não money page) |
| /tela-ondulada-ou-tela-eletrosoldada-qual-a-melhor-para-o-seu-projeto-3/ | — | tipos de tela metálica | 170/mes | — (não localizado por título exato em `elementor-list-pages`; existe no `post-sitemap.xml` junto com 2 outras variantes -2 e -4 do mesmo slug — ver achado de conteúdo duplicado no Raio-X Tecnico) | pendente (existe, variante da página acima — avaliar consolidar/canonicalizar) |
| /alambrado/ (a criar) | — | alambrado | 22.200/mes | — | pendente (GAP — maior volume do nicho, os 3 concorrentes têm página dedicada) |
| /tela-de-aco-inox/ (a criar) | — | tela de aço | 3.600/mes (nacional) | — | pendente (GAP — telasmm.com.br rankeia pos. 26 nesta KW com página dedicada de "tecidos metálicos de aço inoxidável"; cliente já cita "aço inox" no catálogo mas sem página de produto própria) |

## Artigos / Clusters (v1.1)

## Sitemap do cliente
> Preenchido por `linkflow configurar` se sitemap fornecido no intake.
- sitemap_url (tentativas): `https://telaspadrao.com.br/sitemap_index.xml` (Yoast — confirmado com URLs reais em `page-sitemap.xml`/`post-sitemap.xml`, HTTP 200); também existe `https://telaspadrao.com.br/sitemaps.xml` (declarado pelo bloco gerenciado do Cloudflare no robots.txt, HTTP 200, conteúdo não inspecionado em detalhe)
- sitemap_status: acessível publicamente e NÃO bloqueado para crawlers de busca padrão (`User-agent: * / Allow: /` no bloco Yoast do robots.txt). **Porém o robots.txt bloqueia explicitamente vários bots de IA** (regra gerenciada pelo Cloudflare, `Disallow: /` para cada um): Amazonbot, Applebot-Extended, Bytespider, CCBot, **ClaudeBot**, CloudflareBrowserRenderingCrawler, Google-Extended, GPTBot, meta-externalagent. Também declara `Content-Signal: search=yes, ai-train=no, use=reference` para o user-agent geral. Isso não afeta indexação/SEO tradicional, mas impede rastreamento e citação por LLMs (relevante para qualquer estratégia de GEO/AEO na Fase 3) — vale confirmar com a Priscila/cliente se esse bloqueio de IA foi uma decisão consciente.

## Baseline (Fase 1)
- Data: 2026-08-26
- DR do cliente (Ubersuggest `domain_overview`): 4 (telaspadrao.com.br)
- Trafego atual estimado: ~47 visitas/mês (orgânico, nacional, jul/2026); 19 keywords orgânicas; 16 backlinks / 12 domínios de referência
- Posicoes iniciais KW principal: telaspadrao.com.br não aparece no top 20 orgânico de "tela soldada" (verificado via `serp_analysis`, Brasil) — a própria página `/telas_soldadas/` do cliente rankeia na posição 46 para a variante "telas soldada" (dado de `domain_overview`)
- SERP snapshot: (ver secao SERP acima)

## GBP (Fase 5)
- locId:
- Diagnostico (% completude):
- NAP consistente com site: ( ) sim  ( ) nao

## Estado das Fases
- auditoria_global: não rodada — cliente não tem WordPress/Novamira conectado nesta sessão; não avaliado se o site atual é WordPress
- guardiao_fase1: PASS PARCIAL em 2026-08-26 (lista de concorrentes revisada no mesmo dia a pedido da Priscila — ver nota em Concorrentes) — kw_principal com volume real, 3 concorrentes definidos (relevância de catálogo + SERP overlap), baseline real via domain_overview e Money Pages reconciliadas. H2s dos concorrentes (KW "tela soldada") extraídos em 2026-09-03 via `WebFetch` — ver `## H2s dos Concorrentes`. Sem pendências conhecidas para liberar a Fase 3 escrever a Money Page de "tela soldada".
- [x] Fase 1 Planejamento  [x] .approved (2026-08-27) — arquitetura (4 silos: Telas Soldadas, Telas Onduladas, Tela de Aço Inox, Alambrado/Cercamento) aprovada pela Priscila
- [ ] Fase 2 Site — CONEXÃO RESOLVIDA em 2026-09-02 (MCP nativo do Claude Code, ver histórico). Em 2026-09-02 preenchidos com dados reais: `## Ambiente de Publicacao`, `## Molde de Money Page`, `## Sitemap do cliente`, subseções "Schema do cliente"/"SEO Técnico do cliente" em `## Raio-X Tecnico`. Em 2026-09-03: lido o `_elementor_data` COMPLETO (texto real, não só estrutura) de `/telas_soldadas/`, extraídos os H2s reais dos 3 concorrentes via `WebFetch`, e escrito um rascunho de `yoast_title`/`yoast_desc`/schema `Product.description` — ver `### Briefing de Otimização — /telas_soldadas/` em `## H2s dos Concorrentes`. **Nada disso foi aplicado no WordPress ainda** — aguardando revisão do copy com a Priscila (gate `.publish-approved`). Também NÃO decidido: schema `Organization` (global) e conflito Yoast SEO vs. SEOPress — aguardando repasse da decisão da Priscila.
- [ ] Fase 3 Conteudo      [ ] .publish-approved
- [ ] Fase 5 GMN

## Paginas dos Concorrentes (Fase 1)
> Preenchido por fase1-planejamento. Mapeamento completo das paginas transacionais dos 3 concorrentes.
> Usado pela Fase 3 (pauta de conteudo) - NAO refazer a pesquisa, consultar aqui.

| Concorrente | URL | KW provavel | Trafego/mes | Backlinks | Tipo |
|---|---|---|---|---|---|
| catumbitelas.com.br | /telas/construcao-civil/tela-soldada-malha-75mm-x-50mm-fio-2-10-mm-largura-de-2-00m-preco-por-metro | tela soldada | 1.214 | — | transacional (equivalente à página do cliente) |
| catumbitelas.com.br | /casa-e-jardim/alambrado-galvanizado-malha-3-fio-2-75-mm-altura-2m-preco-por-metro | alambrado / preço de alambrado | 128 | — | transacional (gap — cliente não tem página de alambrado) |
| catumbitelas.com.br | /tela-soldada-galv-pesada-m25x25mm-f1-24mm-25-00x0-50m | tela soldada galvanizada pesada | 104 | — | transacional (produto — variante de malha) |
| telasmm.com.br | /fabricante-de-tela-soldada.php | tela soldada | 17 | — | transacional (equivalente à página do cliente) |
| telasmm.com.br | /fabricante-de-tecidos-metalicos-de-aco-inoxidavel.php | tela de aço (inox) | 5 | — | transacional (gap — cliente não tem página dedicada de aço inox) |
| telasmm.com.br | /fabricante-de-tela-ondulada-artistica.php | tela artística ondulada | 8 | — | transacional (variante do silo Telas Onduladas) |
| teciam.com.br | /telas-soldadas-diferenciais-e-uso/ | tela soldada / telas soldada | 128 | — | transacional (equivalente à página do cliente) |
| teciam.com.br | /tela-soldada-x-tela-ondulada-qual-a-melhor-para-o-seu-projeto/ | tela ondulada | 83 | — | não-transacional (blog comparativo — mesmo formato do blog já existente do cliente) |
| teciam.com.br | /telas-revestimento/ | telinco telas / tela para reboco | 1 | — | transacional (cauda longa — não prioritário) |

## H2s dos Concorrentes (por KW)
> Preenchido por fase1-planejamento (ETAPA 5) para a kw_principal, e por fase3-conteudo (ETAPA 2B) para cada Money Page ao ser escrita.
> Cada Money Page usa a subseção da SUA KW. A busca só roda uma vez por KW — resultado salvo aqui.
> AUSENTE para uma KW = fase3-conteudo roda serp_analysis. NUNCA cai em template sem buscar primeiro.

### KW: tela soldada
> ✅ H2s extraídos em 2026-09-03 via `WebFetch` (disponível nesta sessão).

- **Concorrente 1** — http://www.catumbitelas.com.br/telas/construcao-civil/tela-soldada-malha-75mm-x-50mm-fio-2-10-mm-largura-de-2-00m-preco-por-metro
  H2: Tela Soldada Galvanizada Malha de 75x50mm... (título literal da variante) → Descrição Geral → ESPECIFICAÇÕES TÉCNICAS → CARACTERÍSTICAS → VANTAGENS → UTILIZAÇÃO → COMO INSTALAR → TABELA DE MEDIDAS → Produtos relacionados → Produtos visualizados
  H3 (variantes de produto/malha): 4 títulos de produtos similares (outras malhas/rolos) + "Nenhum produto visitado"
  Padrão: página de produto único de e-commerce, extremamente técnica/estruturada (specs, tabela de medidas, instalação) — reflete o catálogo por variação de malha/fio/altura já registrado em `Arvore de Silos`.

- **Concorrente 2** — http://telasmm.com.br/fabricante-de-tela-soldada.php
  H2: Fabricante de Tela Soldada → Sobre o produto da Fabricante de Tela Soldada Telas MM → Outros produtos da Fabricante de Tela Soldada Telas MM → Sobre a Fabricante de Tela Soldada Telas MM → Fale com a Fabricante de Tela Soldada Telas MM
  H6 (produtos relacionados): Fabricante de Tela Soldada / Tela Fibra de Vidro / Tela para Cercamento / Peneira de Plástico
  Padrão: página institucional simples (produto → outros produtos → sobre a empresa → contato), sem H3, menos técnica que a Catumbi.

- **Concorrente 3** — http://teciam.com.br/telas-soldadas-diferenciais-e-uso/
  H2: Detalhes Técnicos e Diferenciais do Produto → Algumas aplicações das Telas Soldadas → Por que escolher as telas soldadas da Teciam? → Você também pode gostar → Postagens recentes → Telas metálicas com qualidade superior → Assine nossa newsletter → Mapa do site → Siga-nos em nossas redes sociais → Fale Conosco
  H3 (sob "Algumas aplicações"): 1. Construção civil / 2. Cercamentos e Segurança / 3. Logística / 4. Indústria / 5. Agronegócio
  Padrão: post de blog otimizado (não página de produto pura) — combina detalhes técnicos + aplicações segmentadas por H3 + "por que escolher" (prova social/diferencial).

**Gap real do cliente vs. os 3 concorrentes:** a página `/telas_soldadas/` do cliente já cobre "características" (via icon-list) e "aplicações" (via cards, sem H3 dedicado) e "tipos" (via lista), mas NÃO tem um H2 explícito de "Vantagens"/"Por que escolher" nem "Especificações Técnicas"/tabela de medidas (a Catumbi tem ambos; a Teciam tem "por que escolher"). Isso é insumo para a Fase 3 — não implementado agora, só registrado.

### Briefing de Otimização — /telas_soldadas/ (rascunho — NÃO aplicado no WordPress)
> Escrito em 2026-09-03 com base no `_elementor_data` REAL de `post_id 7` (lido widget a widget via `elementor-get-widget-by-id`, não apenas a estrutura/preview) + H2s reais dos 3 concorrentes (acima). Nenhuma especificação de produto (malha/fio/altura/preço, como a Catumbi expõe) foi inventada — só o que já está publicado na página do cliente foi usado. **Nada disto foi escrito no WordPress** — fica como rascunho até aprovação (gate `.publish-approved`).

**Conteúdo real da página hoje (fonte usada para o rascunho):**
- H1: "Tela soldada sob medida / Compre direto da fábrica"
- Parágrafo intro: resistência/versatilidade/durabilidade, aço carbono ou inoxidável, opção galvanizada; "Na Telas Padrão, você encontra telas soldadas de alta qualidade, produzidas sob medida para atender projetos industriais, residenciais e agrícolas"; malhas eletrosoldadas, telas galvanizadas, painéis metálicos; aplicações: indústria, agronegócio, arquitetura/paisagismo, segurança patrimonial
- Características (5 itens, icon-list): Alta Resistência Mecânica, Durabilidade Superior, Precisão Dimensional, Versatilidade de Uso, Conformidade com normas técnicas
- "Com mais de 20 anos no mercado, a Telas Padrão fabrica telas soldadas sob medida..."
- Tipos: Tela Soldada Galvanizada, Tela Eletrosoldada, Tela soldada em aço carbono, Tela soldada inox (cada uma com descrição curta)

**Novo `yoast_title` (rascunho):**
`Tela Soldada Sob Medida - Direto da Fábrica | Telas Padrão` (58 caracteres — troca o sufixo "Telas Sob Medida" por "Telas Padrão", batendo com o NAP oficial; reaproveita "sob medida" e "direto da fábrica" do H1 real, mantém a kw_principal "tela soldada")

**Novo `yoast_desc` (rascunho — hoje era auto-excerto, agora escrito à mão):**
`Tela soldada sob medida, direto da fábrica: aço carbono, inox ou galvanizada. Mais de 20 anos de experiência, entrega para todo o Brasil.` (~137 caracteres — inclui a kw_principal "tela soldada" logo no início; diferenciais usados são todos reais: "sob medida"/"direto da fábrica" do H1, os 3 materiais citados no parágrafo intro, "mais de 20 anos" do texto da seção de aplicações, e "entrega para todo o Brasil" — claim já documentado na Home do próprio site)

**Campo `description` do schema Product (rascunho, briefing):**
`Tela soldada sob medida, fabricada em aço carbono ou aço inoxidável, com opção de galvanização para maior proteção contra corrosão. Produzida com precisão para aplicações industriais, residenciais e agrícolas — indústria (divisórias, proteção de máquinas), agronegócio (cercas, viveiros, galinheiros), arquitetura e paisagismo (fachadas, jardins, estruturas) e segurança patrimonial (grades, portões, cercamentos). Fabricação própria, com mais de 20 anos de experiência.` (parafraseia diretamente os dois parágrafos reais da página — sem inventar dimensão/malha/fio/preço, que o cliente não expõe hoje)

**Explicitamente FORA de escopo nesta rodada (por instrução):**
- Schema `Organization` — é global (afeta o site inteiro), não decidido/aplicado agora.
- Decisão entre manter Yoast SEO ou SEOPress ativo (ambos rodam simultaneamente hoje — ver "Schema do cliente") — não decidido por mim; aguardando repasse da decisão da Priscila.
- Nenhuma escrita no WordPress (`elementor-update-widget-content`, meta title/description, schema) foi executada — só leitura. Aplicar fica condicionado à revisão do copy final com a Priscila.

## Raio-X Tecnico (Fase 2)
> Preenchido por fase2-site. Insumo para a Fase 3 (conteudo).
> ⚠️ Preenchido PARCIALMENTE em 2026-08-27, adiantado sem Novamira/WordPress conectado (bloqueado — ver Estado das Fases). Baseado em `domain_top_pages`/`domain_overview` (Ubersuggest) e `WebSearch`, NÃO em crawl/inspeção direta de HTML — `WebFetch` continua bloqueado (`EGRESS_BLOCKED`) para todos os domínios externos testados, incluindo `catumbitelas.com.br` e `telaspadrao.com.br`. Schema, CSR/SSR e sitemap exigem inspeção de HTML real e ficam como pendência até o Novamira conectar (ou até o WebFetch ficar disponível).

### Arvore de Silos (concorrente lider)
Ver `arquiteto-seo/estrategia_seo_catumbitelas.com.br.md` (engenharia reversa completa). Resumo: catumbitelas.com.br organiza por pasta de categoria + 1 página por variação de produto (malha/fio/altura), ex. `/telas/construcao-civil/...`, `/casa-e-jardim/...`, `/protecao-de-muro/...`. Catálogo mais amplo que o da Telas Padrão (mosquiteiras, redes, chapas) — só a parte de telas metálicas estruturais é referência.

### Schema por tipo de pagina (concorrente lider)
| Tipo de pagina | Schemas detectados | Combinados? | Acao no Yoast/WPCode |
|---|---|---|---|
| _(não verificado — exige inspeção de HTML, WebFetch bloqueado nesta sessão)_ | | | |

#### Schema do cliente (telaspadrao.com.br) — verificado em 2026-09-02
Inspeção real de HTML (JSON-LD público) + `wpseo_titles` via `execute-php` para `/telas_soldadas/` (molde) e `/telas_onduladas/`:

| Página | Schemas detectados (JSON-LD `@graph`) | yoast_title | yoast_desc |
|---|---|---|---|
| /telas_soldadas/ | `WebPage`, `ImageObject`, `BreadcrumbList`, `WebSite` (com `SearchAction`) | "Tela Soldada - Telas Sob Medida" | Preenchido, mas é auto-excerto do conteúdo da página (começa repetindo H1/H2, corta com "…") — NÃO parece ser meta description escrita/otimizada à mão |
| /telas_onduladas/ | `WebPage`, `ImageObject`, `BreadcrumbList`, `WebSite` (com `SearchAction`) | "Tela Ondulada - Telas Sob Medida" | Mesmo padrão — auto-excerto, não trabalhada |

- **Faltando em ambas:** `Organization`/`LocalBusiness` (endereço, telefone, área de atendimento), `Product`/`Service` (a página é de produto mas não emite schema de produto), `FAQPage`, `AggregateRating`/`Review` (apesar do site citar "5 estrelas no Google" na home).
- **Configuração global do Yoast** (`get_option('wpseo_titles')`, via `execute-php`): `company_or_person` = "company", `company_name` = **"Telas Padrão"** (bate exatamente com o NAP confirmado pela Priscila), `person_name` = vazio, `company_logo`/`company_logo_id` = vazio/0 (nenhum logo configurado para o schema).
- **Inconsistência encontrada:** o "site title" geral do WordPress (`site_name` retornado por `site-info-get`) é **"Telas Sob Medida"**, diferente do `company_name` do schema Yoast ("Telas Padrão") e do `<title>` das páginas ("... - Telas Sob Medida"). O NAP oficial é "Telas Padrão" — o `<title>` das páginas usando "Telas Sob Medida" como sufixo é uma inconsistência de marca a corrigir na Fase 3.
- Yoast SEO (28.4) e SEOPress (10.1) estão ativos **simultaneamente**; o schema encontrado bate com o padrão de saída do Yoast, então SEOPress provavelmente não está gerando o schema efetivo (não confirmado qual plugin está de fato "vencendo" — recomendo desativar um dos dois na Fase 3 para evitar tags duplicadas).

### SEO Tecnico (concorrente lider)
- URL limpa: NÃO — URLs longas e descritivas, incluem malha/fio/dimensão no slug (ex.: `/telas/construcao-civil/tela-soldada-malha-75mm-x-50mm-fio-2-10-mm-largura-de-2-00m-preco-por-metro`), confirmado via `domain_top_pages`/`organicKeywords` reais (não é suposição)
- CSR/SSR: NÃO CONFIRMADO diretamente — via `WebSearch`, o site roda na plataforma de e-commerce nacional **Plugoo**; plataformas desse tipo costumam ser SSR, mas isso é inferência, não verificação de HTML
- Snippets/rich results: _(não verificado — exige inspeção de HTML)_
- Sitemap: _(não localizado via busca; não verificado — exige acesso a `/sitemap.xml` ou `/robots.txt`, ambos bloqueados nesta sessão)_

#### SEO Técnico do cliente (telaspadrao.com.br) — verificado em 2026-09-02
- URL: slugs usam **underscore** (`/telas_soldadas/`, `/telas_onduladas/`, `/telas_alambrado/`, `/telas_soldadas_modelos/`) em vez de hífen — Google recomenda hífen; não é crítico, mas é um desvio de boa prática fácil de corrigir (implica redirect 301 se renomeado).
- CSR/SSR: **SSR confirmado** — conteúdo completo (heading, texto, imagens) presente no HTML puro via `curl`, sem depender de JS. WordPress padrão + Elementor renderizando server-side.
- Meta title/description: preenchidos em ambas as páginas testadas (não é fallback vazio), mas o conteúdo do `meta description` é um auto-excerto do corpo do texto, não copy otimizado — ver detalhe na subseção "Schema do cliente" acima.
- Rich results: nenhum ativo hoje (só `WebPage`/`WebSite`/`BreadcrumbList` — ver "Schema do cliente"); nenhum `Product`/`Service`/`FAQPage` para gerar rich snippet nos resultados de busca.
- Sitemap: acessível e funcional — ver `## Sitemap do cliente` (mais acima no arquivo) para URL e status completos, incluindo o bloqueio de bots de IA no robots.txt.
- Plugins de SEO conflitantes: Yoast SEO e SEOPress ativos ao mesmo tempo (ver "Schema do cliente").
- **Conteúdo duplicado (achado em 2026-09-02):** o `post-sitemap.xml` lista o mesmo artigo ("Tela ondulada ou tela eletrosoldada...") repetido 4× em slugs diferentes (base + `-2` + `-3` + `-4`). Além disso, 3 outros posts existem no Elementor (`elementor-list-pages`: id 1077 "Tela Inox ou Galvanizada...", id 1079 "Aço Inox no cotidiano...", id 1026 "5 Motivos para escolher Tela Soldada Galvanizada...") mas NÃO aparecem no sitemap público — possivelmente despublicados/noindex. Não alterei nada; recomendo confirmar com a Priscila/cliente antes de consolidar ou remover.

### Diagnostico do Site do Cliente (se tem site)
- Tem site: ( x ) sim  ( ) nao
- Gap analysis: Baseado nos dados reais da Fase 1 (`domain_overview`/`domain_top_pages` de telaspadrao.com.br): o site já tem páginas dedicadas para os 2 primeiros silos da arquitetura aprovada (`/telas_soldadas/`, `/telas_onduladas/`) e um blog comparativo, mas rankeiam muito mal (ex.: posição 46 para "telas soldada", fora do top 20 para "tela ondulada") apesar de o produto/conteúdo já existir. Faltam completamente os silos "Tela de Aço Inox" e "Alambrado/Cercamento" (maior gap de volume). Não foi possível inspecionar tema/plugins/estrutura HTML real (Novamira bloqueado — ver Estado das Fases).
- Veredito: ( x ) consertar  ( ) reconstruir — o site já tem estrutura de silo compatível com a arquitetura aprovada e conteúdo publicado; o problema aparenta ser otimização on-page/SEO técnico e páginas faltantes, não a plataforma em si. Vereditos que dependem de inspeção real do tema/HTML (Elementor, schema, Core Web Vitals) ficam condicionados à conexão do Novamira.
- Plano passo a passo: (1) confirmar tema/builder real via Novamira quando conectar; (2) otimizar título/meta/conteúdo de `/telas_soldadas/` e `/telas_onduladas/` para as respectivas kw_principal; (3) criar as 2 páginas de silo faltantes (Alambrado, Tela de Aço Inox); (4) definir molde de Money Page e schema (Product/Service) — depende do Novamira.

### Reconciliacao de Money Pages
> URLs do concorrente sem KW prevista na Fase 1 - decisao de incluir ou nao.
Nenhuma nova além do já registrado na Fase 1 (`## Money Pages`) — o gap de Alambrado e Tela de Aço Inox já foi identificado e aprovado no Gate Humano 1. Não há páginas adicionais dos concorrentes fora do escopo do ICP que justifiquem inclusão.

### Handoff para Fase 3
| Pagina | KW principal (Fase 1) | Estrutura | Schema recomendado |
|---|---|---|---|
| /telas_soldadas/ | tela soldada | Página de produto única (não subdividir por malha/fio, ao contrário do catumbitelas) | Product ou Service — confirmar com Novamira |
| /telas_onduladas/ | tela ondulada | Página de produto única | Product ou Service — confirmar com Novamira |
| /tela-de-aco-inox/ (a criar) | tela de aço | Página de produto única, espelhando telasmm.com.br | Product ou Service — confirmar com Novamira |
| /alambrado/ (a criar) | alambrado | Página de produto/aplicação, maior prioridade | Product ou Service — confirmar com Novamira |
