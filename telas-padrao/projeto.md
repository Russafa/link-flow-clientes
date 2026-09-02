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
- WordPress URL: https://telaspadrao.com.br (a confirmar se é WordPress — não verificado nesta sessão)
- Application Password: (NUNCA visivel ao cliente — guardado pelo sistema)
- Novamira: ( ) instalado  Abilities: [A VERIFICAR via discover-abilities]
> ⚠️ Este campo NÃO é fonte de verdade. O agente DEVE verificar as abilities reais via discover-abilities antes de assumir o que pode ou não fazer.
- Tema / templates da designer (Money Page / Post): [A CONFIGURAR]
- Backup automatico: ( )

## Molde de Money Page
- molde_id: [A CONFIGURAR — Fase 2]
- molde_slug: [A CONFIGURAR — Fase 2]
- inventario_widgets: [A PREENCHER — Fase 2, leitura do _elementor_data]

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
> wp_post_id não preenchido — WordPress do cliente ainda não conectado via Novamira nesta sessão (ver Ambiente de Publicacao). "—" nas linhas GAP = página ainda não existe.

| Slug | Template | KW principal | Volume/mês | wp_post_id | Status |
|---|---|---|---|---|---|
| / (home) | — | telas padrão (branded) | 320/mes | — | pendente (existe — já #1 orgânico, manter) |
| /telas_soldadas/ | — | tela soldada | 9.900/mes | — | pendente (existe — posição 46/50, precisa otimização forte) |
| /telas_soldadas_modelos/ | — | modelos de tela | 720/mes | — | pendente (existe — posição 24) |
| /telas_onduladas/ | — | tela ondulada | 2.400/mes | — | pendente (existe — fora do top 20 nacional na SERP consultada, checar indexação) |
| /tela-ondulada-ou-tela-eletrosoldada-qual-a-melhor-para-o-seu-projeto/ | — | telas corrugadas | 260/mes | — | pendente (existe, é blog comparativo — manter como conteúdo de apoio, não money page) |
| /tela-ondulada-ou-tela-eletrosoldada-qual-a-melhor-para-o-seu-projeto-3/ | — | tipos de tela metálica | 170/mes | — | pendente (existe, variante da página acima — avaliar consolidar/canonicalizar) |
| /alambrado/ (a criar) | — | alambrado | 22.200/mes | — | pendente (GAP — maior volume do nicho, os 3 concorrentes têm página dedicada) |
| /tela-de-aco-inox/ (a criar) | — | tela de aço | 3.600/mes (nacional) | — | pendente (GAP — telasmm.com.br rankeia pos. 26 nesta KW com página dedicada de "tecidos metálicos de aço inoxidável"; cliente já cita "aço inox" no catálogo mas sem página de produto própria) |

## Artigos / Clusters (v1.1)

## Sitemap do cliente
> Preenchido por `linkflow configurar` se sitemap fornecido no intake.
- sitemap_url (tentativas):
- sitemap_status:

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
- guardiao_fase1: PASS PARCIAL em 2026-08-26 (lista de concorrentes revisada no mesmo dia a pedido da Priscila — ver nota em Concorrentes) — kw_principal com volume real, 3 concorrentes definidos (relevância de catálogo + SERP overlap), baseline real via domain_overview e Money Pages reconciliadas. FALTA: H2s dos concorrentes (WebFetch bloqueado pelo proxy de rede desta sessão para domínios externos) — rodar antes de escrever a Money Page de "tela soldada" na Fase 3.
- [x] Fase 1 Planejamento  [x] .approved (2026-08-27) — arquitetura (4 silos: Telas Soldadas, Telas Onduladas, Tela de Aço Inox, Alambrado/Cercamento) aprovada pela Priscila
- [ ] Fase 2 Site — BLOQUEADA em 2026-08-27: nesta sessão remota (escopo GitHub) o classificador de permissões bloqueou a instalação do Novamira CLI (`curl | sh` e até `npm view`) e o WebFetch a domínios externos, então Priscila instalou o Novamira CLI localmente (Windows, Claude Code local em `C:\Users\sanch\projetos\link-flow-clientes`). Lá o OAuth completo do `novamira auth login 'https://telaspadrao.com.br/'` FUNCIONA de ponta a ponta (descoberta, registro do client, troca de token, listagem de abilities, agent-context — tudo HTTP 200, confirmando que o site/Hostinger não bloqueia o Novamira), mas o CLI falha ao persistir o token no Windows Credential Manager (`The OS credential service could not complete the operation`), reproduzido tanto em Git Bash quanto em PowerShell nativo, com VaultSvc rodando normal e sem entrada conflitante salva. Hipótese mais provável: payload do token/metadados do Novamira excede o limite de ~2560 bytes de uma credencial genérica do Windows. Isso parece ser um bug do Novamira CLI em ambiente Windows, não algo configurável no WordPress/Hostinger ou nesta sessão — reportado ao suporte/GitHub do Novamira CLI com essas evidências. Raio-X Técnico, molde de Money Page e `_elementor_data` continuam dependendo dessa conexão persistir.
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
> ⚠️ H2s NÃO extraídos nesta sessão — `WebFetch` está bloqueado pelo proxy de rede do ambiente para todos os domínios externos testados (`EGRESS_BLOCKED`). Rodar novamente quando o WebFetch estiver disponível, antes da Fase 3 escrever a Money Page de "tela soldada" — NUNCA cair em template sem essa busca.
- Concorrente 1: http://www.catumbitelas.com.br/telas/construcao-civil/tela-soldada-malha-75mm-x-50mm-fio-2-10-mm-largura-de-2-00m-preco-por-metro — H2s: (a extrair)
- Concorrente 2: http://telasmm.com.br/fabricante-de-tela-soldada.php — H2s: (a extrair)
- Concorrente 3: http://teciam.com.br/telas-soldadas-diferenciais-e-uso/ — H2s: (a extrair)


## Raio-X Tecnico (Fase 2)
> Preenchido por fase2-site. Insumo para a Fase 3 (conteudo).

### Arvore de Silos (concorrente lider)
_(a mapear na Fase 2 - via sitemap)_

### Schema por tipo de pagina (concorrente lider)
| Tipo de pagina | Schemas detectados | Combinados? | Acao no Yoast/WPCode |
|---|---|---|---|

### SEO Tecnico (concorrente lider)
- URL limpa: _(a verificar)_
- CSR/SSR: _(a verificar)_
- Snippets/rich results: _(a verificar)_
- Sitemap: _(a verificar)_

### Diagnostico do Site do Cliente (se tem site)
- Tem site: ( x ) sim  ( ) nao
- Gap analysis: _(a preencher se tem site)_
- Veredito: ( ) consertar  ( ) reconstruir
- Plano passo a passo: _(a preencher se tem site)_

### Reconciliacao de Money Pages
> URLs do concorrente sem KW prevista na Fase 1 - decisao de incluir ou nao.
_(a preencher na Fase 2)_

### Handoff para Fase 3
| Pagina | KW principal (Fase 1) | Estrutura | Schema recomendado |
|---|---|---|---|
