# Briefing de Otimização — /telas_soldadas/ (molde_id 7) — ✅ PUBLICADO

Gerado em 2026-09-03, ETAPA 1 e 2 da Fase 3 (`fase3-conteudo`). Primeira Money
Page escolhida: já existe, é o produto core, maior volume de busca (9.900/mês
nacional em "tela soldada", SD 14 — baixa dificuldade) e a pior posição atual
(46º para a variante "telas soldada"). ROI mais rápido do que criar página nova.

> ✅ **APLICADO EM PRODUÇÃO em 2026-09-03**, com aprovação explícita da Priscila
> (repassada pela conta): yoast_title/yoast_desc atualizados, schema
> `Organization`+`Product` injetados, SEOPress desativado. Tudo verificado ao
> vivo via `curl`. Ver `## Próximo passo` no fim deste arquivo para o detalhe
> técnico de cada mudança.

## O que já sabemos (Fase 1/2, dados reais)

- kw_principal: "tela soldada" — 9.900 buscas/mês (Brasil), SD 14
- Posição atual: 46 (para "telas soldada", variante próxima)
- Schema atual: só `WebPage`/`ImageObject`/`BreadcrumbList`/`WebSite` — falta
  `Organization` e `Product`/`Service`
- `yoast_title` atual: "Tela Soldada - Telas Sob Medida" — usa "Telas Sob
  Medida" no sufixo, inconsistente com o NAP oficial "Telas Padrão"
- `yoast_desc` atual: auto-excerto do corpo do texto, não escrito à mão
- Molde: 19 containers / 35 widgets (7 heading, 4 text-editor, 1 icon-list,
  6 icon-box, 8 image, 8 button, 1 divider) — ver `## Molde de Money Page` no
  `projeto.md` para os IDs

## Benchmarking de concorrentes (ETAPA 2 da skill) — ✅ concluído em 2026-09-03

H2s dos 3 concorrentes extraídos via `WebFetch` e registrados em
`## H2s dos Concorrentes` → `### KW: tela soldada` no `projeto.md` (não duplicado
aqui). Resumo do padrão encontrado: Catumbi Telas é uma página de produto de
e-commerce muito técnica (Especificações Técnicas, Tabela de Medidas, Como
Instalar); Telas MM é institucional simples; Teciam é um post de blog que
combina detalhes técnicos + aplicações segmentadas por H3 + "por que escolher".
O cliente já cobre características/aplicações/tipos, mas não tem um H2
"Vantagens"/"Por que escolher" nem especificações técnicas/tabela de medidas.

## Correções técnicas a aplicar (não dependem de benchmarking)

1. **Title (rascunho final, lido o corpo real da página):**
   `Tela Soldada Sob Medida - Direto da Fábrica | Telas Padrão` (58 caracteres —
   troca o sufixo por "Telas Padrão" batendo com o NAP; reaproveita "sob medida"
   e "direto da fábrica" do H1 real da página, mantém a kw_principal).
2. **Meta description (rascunho final):**
   `Tela soldada sob medida, direto da fábrica: aço carbono, inox ou galvanizada.
   Mais de 20 anos de experiência, entrega para todo o Brasil.` (~137 caracteres
   — kw_principal logo no início; diferenciais usados são todos reais: "sob
   medida"/"direto da fábrica" do H1, os 3 materiais citados no parágrafo intro,
   "mais de 20 anos" do texto da página, "entrega para todo o Brasil" — claim já
   documentado na Home do próprio site).
3. **Schema a adicionar** (JSON-LD, injetar via WPCode ou Yoast custom schema,
   dependendo do que a Priscila preferir):

```json
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Telas Padrão",
  "url": "https://telaspadrao.com.br/",
  "telephone": "+55-11-93346-0625",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "R. Periperi, 348",
    "addressLocality": "São Paulo",
    "addressRegion": "SP",
    "postalCode": "04760-060",
    "addressCountry": "BR"
  }
}
```
> ✅ APROVADO pela Priscila em 2026-09-03 — pode aplicar este schema `Organization`
> global. NAP usado aqui é o confirmado no onboarding; CNPJ/razão social ficam
> de fora por decisão da Priscila (ver `## NAP` no projeto.md).

```json
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Tela Soldada Sob Medida",
  "brand": { "@type": "Brand", "name": "Telas Padrão" },
  "description": "Tela soldada sob medida, fabricada em aço carbono ou aço inoxidável, com opção de galvanização para maior proteção contra corrosão. Produzida com precisão para aplicações industriais, residenciais e agrícolas — indústria (divisórias, proteção de máquinas), agronegócio (cercas, viveiros, galinheiros), arquitetura e paisagismo (fachadas, jardins, estruturas) e segurança patrimonial (grades, portões, cercamentos). Fabricação própria, com mais de 20 anos de experiência."
}
```
> ✅ `description` preenchido em 2026-09-03 parafraseando os dois parágrafos reais
> da página (lidos via `elementor-get-widget-by-id` nos widgets `6b6a0c77` e
> `5436ebae`) — sem inventar malha/fio/dimensão/preço, que o cliente não expõe
> hoje. `name` do Product ajustado para não afirmar "Galvanizada" como se fosse
> o único tipo (a página oferece 4 variantes: galvanizada, eletrosoldada, aço
> carbono, inox — ver "Tipos de Telas Soldada" no conteúdo real abaixo).

4. **Conflito de plugins — DECIDIDO em 2026-09-03 pela Priscila:** manter Yoast
   SEO, desativar SEOPress (schema atual já vem do Yoast; mais usado/documentado
   no mercado). Desativar antes de aplicar o schema `Organization`/`Product`
   abaixo, para não gerar schema duplicado.

## Conteúdo real da página hoje (lido em 2026-09-03, `_elementor_data` de post_id 7)

- H1: "Tela soldada sob medida / Compre direto da fábrica"
- H2: "Tela soldada / Resistência e versatilidade para diversas aplicações"
- Parágrafo intro: resistência/versatilidade/durabilidade, aço carbono ou
  inoxidável, opção galvanizada; "Na Telas Padrão, você encontra telas soldadas
  de alta qualidade, produzidas sob medida para atender projetos industriais,
  residenciais e agrícolas"; malhas eletrosoldadas, telas galvanizadas, painéis
  metálicos; aplicações: indústria (divisórias, proteção de máquinas),
  agronegócio (cercas, viveiros, galinheiros), arquitetura e paisagismo
  (fachadas, jardins, estruturas), segurança patrimonial (grades, portões,
  cercamentos)
- H6 "Características das Telas Soldadas" (icon-list, 5 itens): Alta
  Resistência Mecânica, Durabilidade Superior, Precisão Dimensional,
  Versatilidade de Uso, Conformidade com normas técnicas
- H2 "Principais Aplicações das Telas Soldadas" + "Com mais de 20 anos no
  mercado, a Telas Padrão fabrica telas soldadas sob medida, unindo qualidade,
  resistência e tecnologia para diversos setores." + grid de 6 cards de
  aplicação (segurança perimetral, proteção industrial, guarda-corpo,
  peneiração industrial, filtragem alimentar, automotivo)
- H2 "Tipos de Telas Soldada" (lista): Tela Soldada Galvanizada (resistência à
  oxidação, uso externo), Tela Eletrosoldada (rigidez estrutural/uniformidade),
  Tela soldada em aço carbono (robustez estrutural), Tela soldada inox
  (resistência à corrosão, ambientes agressivos)
- CTA final: "Peça seu orçamento personalizado agora mesmo" / "Fale com nossa
  equipe e encontre a melhor tela para seu projeto. Trabalhamos com agilidade,
  compromisso e o melhor custo-benefício do mercado."

## Próximo passo

1. ~~Ler o `_elementor_data`/conteúdo atual completo de `/telas_soldadas/`~~ ✅ 2026-09-03
2. ~~Extrair H2s dos 3 concorrentes~~ ✅ 2026-09-03
3. ~~Escrever title/meta finais e preencher o schema `Product`~~ ✅ 2026-09-03 (rascunho acima)
4. ~~Decidir com a Priscila: manter Yoast ou SEOPress~~ ✅ 2026-09-03 — decisão repassada: manter Yoast, desativar SEOPress
5. ~~Aplicar o schema `Organization` com aprovação explícita da Priscila~~ ✅ 2026-09-03
6. ~~Apresentar title/meta/schema Product para revisão da Priscila~~ ✅ (aprovado, repassado como instrução direta)
7. ~~Escrever no WordPress~~ ✅ **APLICADO em produção em 2026-09-03:**
   - `_yoast_wpseo_title`/`_yoast_wpseo_metadesc` do post_id 7 atualizados via `update_post_meta` (`novamira/execute-php`)
   - SEOPress desativado via `deactivate_plugins('wp-seopress/seopress.php')` (`novamira/execute-php`) — Yoast confirmado como único ativo
   - Schema `Organization` (site-wide) + `Product` (só em post_id 7) injetados via `wp_head`, arquivo `wp-content/novamira-sandbox/schema-telas-soldadas.php` (`novamira/write-file`) — local recomendado pelo próprio Novamira para PHP persistente fora do core/tema
   - **Verificado ao vivo via `curl`:** `<title>`, `<meta name="description">` e os 2 blocos `<script type="application/ld+json">` (Organization + Product) renderizando corretamente em `/telas_soldadas/`; `Organization` também confirmado na Home (site-wide) sem vazamento do `Product` para outras páginas.

**Status: `/telas_soldadas/` publicada.** Próxima Money Page a trabalhar (por volume/prioridade, ver `## Money Pages` no `projeto.md`): `/telas_onduladas/`, depois os GAPs `/alambrado/` e `/tela-de-aco-inox/` (a criar).
