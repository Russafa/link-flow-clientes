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
> Nome, endereço e telefone confirmados pela Priscila em 2026-08-26. Razão Social/CNPJ ainda NÃO preenchidos — a busca web trouxe 2 CNPJs candidatos ("Telas Padrao Industria e Comercio LTDA" 44.447.874/0001-67 e "Telas Padrao Comercio de Ferragens LTDA" 31.694.661/0001-98) sem confirmação de qual está de fato vinculado a telaspadrao.com.br. Confirmar antes de usar em schema/GBP.

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
- Tom: [A DEFINIR — pendente de aprovação do cliente]
- Profissao regulada? (OAB/CFM/CFO/CONAR): Não
- `regulado: false`

## Dados do Profissional
- Numero de registro: N/A (sem regulação)
- Abordagem / especialidade: N/A
- Formacao (graduacao): N/A
- Especializacao / pos: N/A
> Profissão não regulada — Bloco 3 do onboarding não se aplica.

## Concorrentes (ORGANICOS — nao patrocinados)
> Preenchido pela Fase 1 (ETAPA 3 — SERP overlap). NÃO é coletado no onboarding.

## ICP (Fase 1)
- Servicos (priorizados por receita):
- Publico-alvo:
- `kw_principal`: a definir - Fase 1 (engenharia reversa)
- KWs secundarias: a definir - Fase 1 (expandidas por `keyword_suggestions`)

## SERP da KW principal (Fase 1)
> Preenchido por `serp_analysis` (Ubersuggest) em `fase1-planejamento`.
- Local pack (3-pack): ( ) sim  ( ) nao  — ocupantes:
- Top 3 organico:
- Featured snippet: ( ) sim  ( ) nao  — formato:
- PAA (People Also Ask):

## Arquitetura Aprovada (Gate Humano 1)
- `approved: false`
- `approved_at`:
- Silos / categorias:
- Mapa de URLs:

## Money Pages
| Slug | Template | KW principal | Volume/mês | wp_post_id | Status |
|---|---|---|---|---|---|

## Artigos / Clusters (v1.1)

## Sitemap do cliente
> Preenchido por `linkflow configurar` se sitemap fornecido no intake.
- sitemap_url (tentativas):
- sitemap_status:

## Baseline (Fase 1)
- Data:
- DR do cliente (Ubersuggest `domain_overview`):
- Trafego atual estimado:
- Posicoes iniciais KW principal: a definir - Fase 1
- SERP snapshot: (ver secao SERP acima)

## GBP (Fase 5)
- locId:
- Diagnostico (% completude):
- NAP consistente com site: ( ) sim  ( ) nao

## Estado das Fases
- auditoria_global: pendente
- [ ] Fase 1 Planejamento  [ ] .approved
- [ ] Fase 2 Site
- [ ] Fase 3 Conteudo      [ ] .publish-approved
- [ ] Fase 5 GMN

## Paginas dos Concorrentes (Fase 1)
> Preenchido por fase1-planejamento. Mapeamento completo das paginas transacionais dos 3 concorrentes.
> Usado pela Fase 3 (pauta de conteudo) - NAO refazer a pesquisa, consultar aqui.

| Concorrente | URL | KW provavel | Trafego/mes | Backlinks | Tipo |
|---|---|---|---|---|---|

## H2s dos Concorrentes (por KW)
> Preenchido por fase1-planejamento (ETAPA 5) para a kw_principal, e por fase3-conteudo (ETAPA 2B) para cada Money Page ao ser escrita.
> Cada Money Page usa a subseção da SUA KW. A busca só roda uma vez por KW — resultado salvo aqui.
> AUSENTE para uma KW = fase3-conteudo roda serp_analysis. NUNCA cai em template sem buscar primeiro.

### KW: {{kw_principal}}
- Concorrente 1: [URL] — H2s em ordem:
  1.
  2.
  3.
- Concorrente 2: [URL] — H2s em ordem:
  1.
  2.
  3.
- Concorrente 3: [URL] — H2s em ordem:
  1.
  2.
  3.


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
