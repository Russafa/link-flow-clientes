# Engenharia Reversa — paperplast.com.br (concorrente líder)

Data: 2026-08-26
Fonte: `domain_top_pages` e `domain_overview` (Ubersuggest), locId 2076 (Brasil).
Nota metodológica: sem crawl completo do concorrente — `WebFetch` está bloqueado
pelo proxy de rede desta sessão para domínios externos. A árvore abaixo foi
montada a partir das URLs e títulos reais retornados pela ferramenta, não por
inspeção visual das páginas.

## Por que paperplast.com.br é o concorrente líder
Maior tráfego orgânico nacional do grupo de 3 concorrentes confirmados por SERP
overlap (~71.626 visitas/mês vs. ~14.713 da Catumbi Telas e ~11.720 da Casa das
Cercas), DR 37 (o mais alto), 8.824 backlinks / 641 domínios de referência.

## Estrutura de silos observada
A Paperplast tem um catálogo MAIS AMPLO que a Telas Padrão — não vende só telas
metálicas, vende também lonas plásticas. Isso significa que a arquitetura dela
não deve ser copiada 1:1; usar só a parte relevante ao escopo da Telas Padrão
(telas metálicas: soldada, ondulada, aço inox, alambrado).

- `/tela-metalica/` — silo de telas metálicas (relevante para o cliente)
  - `/tela-metalica/tela-para-cerca.html` (maior tráfego do silo: 4.466/mês)
  - `/tela-metalica/tela-soldada.html` (473/mês)
  - `/tela-metalica/tela-para-mangueirao.html` (1.743/mês)
  - `/tela-metalica/tela-para-viveiro.html` (1.660/mês)
  - `/tela-metalica/tela-para-pinteiro.html` (290/mês)
- `/telas-de-protecao/` — silo de telas de proteção/segurança (parcialmente
  relevante — mosquiteira e galinheiro não são escopo do cliente, mas
  alambrado e PVC são)
  - `/telas-de-protecao/tela-alambrado.html` (346/mês) — GAP para o cliente
  - `/telas-de-protecao/tela-revestida-pvc.html` (757/mês)
  - `/telas-de-protecao/tela-para-cerca.html` (387/mês)
  - `/telas-de-protecao/tela-de-seguranca.html` (379/mês)
  - `/telas-de-protecao/tela-mosquiteira.html`, `/tela-para-galinheiro.html`
    (fora do escopo do cliente — não replicar)
- `/lona/`, `/sob-medida-lona/`, `/lona-plastica/` — silo de lonas plásticas,
  **fora do escopo da Telas Padrão** (produto diferente), não replicar
- Páginas de produto standalone (`/estufa.html`, `/concertina-300mm.html`
  etc.) — cauda longa de produtos específicos, avaliar caso a caso na Fase 3

## Proposta de arquitetura para Telas Padrão (adaptada, não copiada)

Diferente da Paperplast, a Telas Padrão já tem 2 dos 4 silos core como página
única (não subdividida por aplicação). Proposta:

1. **Silo Telas Soldadas** (já existe em `/telas_soldadas/`) — considerar
   subdividir por aplicação de maior volume: cercamento/construção civil
   (maior demanda observada nos concorrentes)
2. **Silo Telas Onduladas** (já existe em `/telas_onduladas/`)
3. **Silo Tela de Aço Inox** (GAP — criar página de produto dedicada; hoje só
   existe menção em conteúdo comparativo)
4. **Silo Alambrado/Cercamento** (GAP de maior prioridade — 22.200 buscas/mês
   em "alambrado", os 3 concorrentes confirmados têm página dedicada e a
   Telas Padrão não)
5. **Blog técnico** (já existe: comparativo tela ondulada x eletrosoldada) —
   manter como conteúdo de apoio/topo de funil, não como money page

Esta proposta ainda não foi aprovada pela Priscila (Gate Humano 1 em aberto no
`projeto.md`).
