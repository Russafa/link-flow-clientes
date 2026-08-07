# Estratégia de Arquitetura SEO — a partir de brasilredesprotecoes.com.br
Data: 2026-08-05 · Cliente: Ideal Varais e Redes de Proteção

## Nota metodológica — limitação desta execução
O `crawl.py` (que faz o rastreamento educado do site do concorrente) não conseguiu conexão de
saída neste ambiente (erro de rede no sandbox, confirmado com `curl` e `requests` puros — não é
bloqueio do site). O `WebFetch` (que usa a infraestrutura da Anthropic) funcionou parcialmente:
buscou 3 páginas específicas com sucesso, mas falhou (`ECONNRESET`) na home do concorrente líder.
Diante disso, a arquitetura abaixo foi montada com os dados que **funcionaram de verdade**:
- `Ubersuggest domain_top_pages` — inventário real de 24 páginas do concorrente líder + tráfego
- `Ubersuggest domain_overview` / `keyword_overview` / `serp_analysis` — volume, DA, SERP
- `WebFetch` — H2s de 3 páginas (uma de cada concorrente)
- O inventário completo do site do próprio cliente (já levantado na Fase 0 — auditoria global)

Isso significa: **não temos** o menu de navegação declarado do concorrente nem breadcrumbs.
O que temos é mais confiável para priorização (é dado real de tráfego/ranking), só falta a
visão "como o concorrente organiza o menu" — que não muda a recomendação abaixo, porque a
Regra R1 do arquiteto-seo já manda não copiar a árvore do concorrente 1:1.

## Diagnóstico do concorrente líder (brasilredesprotecoes.com.br)
- Páginas mapeadas: 24 (via domain_top_pages) | DA 13 | ~554 tráfego orgânico/mês (nacional)
- Distribuição de intenção: T (transacional): 17 · I (informacional/blog): 5 · N (navegacional): 1 · C (comercial): 1
- Modelo: home forte (304 tráfego) + páginas de serviço específico (cachorro, portão, piscina, gatos)
  + expansão geográfica agressiva (Tatuapé, Moema, Brás, Saúde, Santos, Praia Grande, Campinas — inclusive
  fora da capital, sinal de operação regional/franquia)
- Ponto forte: divide "pet" em **gatos** e **cachorros** — a segunda página mais tráfego do site inteiro
  é justamente "Telas de Proteção para Cachorros" (155 de tráfego, maior que qualquer página de bairro)
- Ponto fraco: nenhuma página sobre varais — 100% do catálogo é redes de proteção

## Comparação com os outros 2 concorrentes reais
- **redecia.com.br** (Rede & Cia): tem página dedicada de **pombos/morcegos** e **porta-paletes**
  (uso industrial) que nenhum dos outros dois tem — nicho B2B pouco explorado
- **solucoesredesdeprotecao.com.br** (Soluções): estratégia 100% hiperlocal — cada bairro de SP é
  uma página própria (Tatuapé, Moema, Mauá), sem catálogo de serviço amplo

## Principais gaps (oportunidades onde os concorrentes são fracos ou o cliente ainda não tem)
1. **Varais** — nenhum dos 3 concorrentes reais vende/instala varais. O cliente já tem "varal" no
   próprio nome e 6 serviços de varal no ICP, mas **nenhuma Money Page de varal existe no site hoje**.
   "Varal de parede" sozinho vale 4.400 buscas/mês em SP capital — maior oportunidade isolada do projeto.
2. **Gatos vs. Cachorros separados** — os 3 concorrentes reais tratam como públicos diferentes
   (a página de cachorros do líder é a 2ª mais valiosa do site dele). O cliente só tem uma página
   genérica de "pets".
3. **Bairros: Moema e Brás** — 2 dos 3 concorrentes têm página de Moema; o líder também tem Brás.
   O cliente cobre Tatuapé, Mooca, Jardim Anália Franco e Zona Leste, mas não esses dois.
4. **Construção civil / porta-paletes (B2B)** — nicho que só a Rede & Cia explora; pouca
   concorrência, mas também pouco volume de busca confirmado.
5. **Conteúdo de blog sobre preço/valor** — o concorrente líder tem um artigo específico sobre
   "quanto custa instalar rede de proteção", que captura buscas de fundo de funil (comerciais).

## Lógica de silos recomendada para o cliente
```
Home (kw_principal: "redes de proteção", 4.400/mês)
├── Pilar: Redes de Proteção          (nível 1 — já existe como /servicos/)
│    ├── 17 Money Pages de serviço    (nível 2 — já existem, mas 19 delas têm título/meta
│    │                                  duplicados — corrigir antes de expandir)
│    ├── Rede de Proteção para Gatos  (nível 2 — GAP, separar de "pet")
│    ├── Rede de Proteção para Cachorros (nível 2 — GAP, separar de "pet")
│    └── Rede de Proteção Construção Civil (nível 2 — GAP, baixa prioridade)
├── Pilar: Varais                     (nível 1 — GAP TOTAL, hoje é só um subdomínio solto)
│    ├── Varal de Parede              (nível 2 — GAP, 4.400/mês)
│    ├── Varal Mágico                 (nível 2 — GAP, 1.300/mês)
│    ├── Varal Individual de Teto     (nível 2 — GAP, 320/mês)
│    └── Varal a Manivela / a Motor   (nível 2 — GAP, cauda longa)
├── Regiões Atendidas                 (nível 1 — já existe)
│    ├── Tatuapé, Mooca, Jd. Anália Franco, Zona Leste (nível 2 — já existem)
│    └── Moema, Brás                  (nível 2 — GAP)
└── Blog                              (nível 1 — já existe, 7 artigos)
```

## Recomendações de linkagem interna
- Cada Money Page de serviço deve linkar para a página de Região Atendida mais próxima e vice-versa
  (ex: "Rede de Proteção para Sacada" ↔ "Redes de Proteção no Tatuapé").
- O pilar "Varais" precisa de um item de menu próprio — hoje vive isolado no subdomínio
  `varais.redesdeprotecaoideal.com.br`, o que dilui a autoridade do domínio principal. Avaliar
  migração para `/varais/` dentro do domínio principal na Fase 2.
- Blog deve linkar para as Money Pages relacionadas (ex: "Síndrome do Gato Paraquedista" → Money
  Page de Gatos, quando ela existir).

## Passo a passo de aplicação
Ver aba `Plano_Construcao` da planilha — ordem: (1) corrigir os 19 títulos/meta duplicados
[já mapeado na auditoria Fase 0], (2) criar as Money Pages de Varais [maior volume ausente],
(3) criar Gatos/Cachorros separados, (4) preencher os gaps de bairro, (5) baixa prioridade
(construção civil, cauda longa de varais).

## Arquivos gerados
- `arquitetura_seo_brasilredesprotecoes.com.br.xlsx` — abas Inventario, Arvore_Meu_Site, Clusters, Plano_Construcao
- Este documento
