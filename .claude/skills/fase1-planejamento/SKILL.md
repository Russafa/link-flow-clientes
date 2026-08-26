---
name: fase1-planejamento
description: Fase 1 (Planejamento/ICP) do Link Flow — pesquisa de palavra-chave principal, engenharia reversa de concorrentes orgânicos via SERP overlap, baseline do domínio do cliente e proposta de arquitetura de URLs para aprovação humana (Gate Humano 1). Consome o projeto.md gerado pelo onboarding (skill link-flow-novo-cliente) e preenche as seções ICP, Concorrentes, SERP, Baseline, Arquitetura Aprovada e Money Pages. Use SEMPRE que Priscila pedir para rodar a Fase 1, planejamento, ICP, pesquisa de concorrentes/palavra-chave, ou avançar um cliente já onboardado.
---

# Link Flow — Fase 1: Planejamento

Formaliza o `fase1-planejamento` já referenciado (mas nunca definido) nos
`projeto.md` de `resolve-gas` e `ideal-varais-redes-protecao`. Esta skill
**exige que o onboarding já tenha rodado** (skill `link-flow-novo-cliente`) —
o `<slug>/projeto.md` precisa existir com Info Básica, NAP e ICP preenchidos
antes de começar.

Esta fase só planeja e propõe. Ela **não publica nada no WordPress** e não
avança para a Fase 2 sozinha — o Gate Humano 1 (aprovação da arquitetura)
é sempre explícito e feito pela Priscila.

## Pré-requisito

Leia o `<slug>/projeto.md` do cliente inteiro antes de começar. Se `ICP` /
`Info Basica` estiverem vazios ou com placeholders `[A CONFIGURAR]` em campos
essenciais (negócio/segmento, cidade, `location_id`), pare e peça para rodar
o onboarding primeiro.

## ETAPA 1 — Confirmar ICP

A partir do "Negocio / segmento" do onboarding, liste com a Priscila (ou
proponha e peça confirmação, nunca decida sozinho):
- Serviços/produtos priorizados por receita (lista ordenada)
- Público-alvo (quem compra, por que, urgência ou não)

Preencha `## ICP (Fase 1)` → Serviços e Público-alvo.

## ETAPA 2 — Palavra-chave principal e secundárias

Use `mcp__Ubersuggest__keyword_suggestions` (seed = nome do serviço/produto
mais importante do ICP) com o `location_id` da cidade já registrado no
`projeto.md`. Escolha `kw_principal` pelo maior volume real com intenção
transacional clara (não pegue a de maior volume se for genérica/informacional
demais). Rode `keyword_metrics` (search_difficulty) se precisar desempatar.

Preencha `kw_principal` e "KWs secundarias" com volume real de cada uma —
nunca estime, sempre reporte o número exato retornado pela ferramenta, e
marque como "sem volume detectado" quando a ferramenta não retornar nada
(nunca invente um número).

## ETAPA 3 — SERP overlap (concorrentes orgânicos)

Rode `mcp__Ubersuggest__serp_analysis` para ~10 keywords transacionais do ICP
(kw_principal + secundárias de maior volume), sempre com o `location_id` da
cidade. Um domínio que aparece em 3+ dessas buscas é "concorrente confirmado".

Exclua da lista de concorrentes:
- Marketplaces (Mercado Livre, Amazon, Shopee, Leroy Merlin etc.)
- E-commerce nacional genérico sem operação local/serviço equivalente ao
  cliente (documente a exclusão, como feito em `ideal-varais-redes-protecao/projeto.md`)
- Diretórios/agregadores sem página própria de serviço

Preencha `## Concorrentes` com a lista final (até 3, o suficiente para a
Etapa 5) e a tabela de overlap (domínio, DR, tráfego orgânico nacional via
`domain_overview`, KWs de overlap). Aponte o **concorrente líder** (maior
tráfego total) — ele é usado na Etapa 6.

## ETAPA 4 — Baseline do cliente

Rode `mcp__Ubersuggest__domain_overview` no domínio do próprio cliente
(`location_id` nacional do `projeto.md`). Preencha `## Baseline (Fase 1)`:
Data, DR, tráfego estimado, nº de keywords orgânicas, backlinks/domínios de
referência — todos números reais da ferramenta, nunca estimados.

## ETAPA 5 — SERP da KW principal + H2s dos concorrentes

Rode `serp_analysis` para a `kw_principal` isolada (limit >= 10) e preencha
`## SERP da KW principal`: local pack (3-pack, se aplicável ao nicho — nem
todo negócio nacional/e-commerce tem), top 3 orgânico, featured snippet, PAA.

Para os 3 concorrentes da Etapa 3, busque a página que rankeia para a
`kw_principal` e extraia a ordem de H2s (via `WebFetch` na URL, se acessível)
para `## H2s dos Concorrentes`. Se um concorrente não tiver página editorial
dedicada (só diretório), registre isso explicitamente em vez de inventar H2s.

## ETAPA 6 — Arquiteto SEO (engenharia reversa do concorrente líder)

Rode `mcp__Ubersuggest__domain_top_pages` no concorrente líder (Etapa 3) para
mapear a árvore de silos/categorias dele. Proponha uma arquitetura de URLs
para o cliente espelhando essa estrutura, adaptada ao ICP dele (não copiar
1:1 se o cliente não tiver o mesmo escopo de serviços).

Salve os artefatos em `<slug>/arquiteto-seo/`:
- `estrategia_seo_<dominio-concorrente>.md` — narrativa da árvore de silos e
  do racional por trás do mapa de URLs
- `paginas.json` — lista estruturada das páginas propostas (slug, silo, kw
  principal, volume)

Preencha em `## Arquitetura Aprovada (Gate Humano 1)`: Silos/categorias e
Mapa de URLs, mas **deixe `approved: false`** — a aprovação é manual.

## ETAPA 7 — Reconciliação com páginas existentes (orfaos_gate)

Se o cliente já tem site, rode `domain_top_pages` no domínio dele e verifique
se páginas existentes já cobrem itens do ICP. Toda página existente que bate
com um serviço/kw do ICP entra na tabela `## Money Pages` com status
"pendente (existe — ...)" em vez de ser recriada do zero — nunca proponha
recriar uma página que já existe e já rankeia para a mesma KW.

Preencha `## Money Pages` com todas as linhas (existentes + gaps), seguindo
o padrão de `ideal-varais-redes-protecao/projeto.md`.

## Gate Humano 1 — Aprovação da Arquitetura

Depois de preencher todas as seções acima, apresente um resumo para a
Priscila (kw_principal, concorrentes, arquitetura proposta, gaps) e peça
aprovação explícita. Só depois disso:
- `approved: true`
- `approved_at`: data de hoje

Nunca marque `approved: true` sem uma confirmação explícita da Priscila na
conversa.

## Guardião Fase 1 (checklist final)

Antes de considerar a Fase 1 concluída, confira que todos os campos abaixo
estão preenchidos com dado real (não placeholder) e — só então — grave em
`## Estado das Fases`: `guardiao_fase1: PASS em <data> — output: "PASS - Fase 1 validada."`
com o motivo de qualquer FAIL, se houver:
- `kw_principal` com volume real
- Pelo menos 1 concorrente confirmado por SERP overlap (idealmente 3)
- Baseline do cliente preenchida com dados reais de `domain_overview`
- Arquitetura proposta (mesmo que ainda não aprovada)
- `## Money Pages` com pelo menos as páginas existentes reconciliadas

Marque `[x] Fase 1 Planejamento` em `## Estado das Fases`. Marque
`.approved` só depois do Gate Humano 1. Não inicie a Fase 2 automaticamente.
