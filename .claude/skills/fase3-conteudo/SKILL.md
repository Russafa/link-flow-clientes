---
name: fase3-conteudo
description: Fase 3 (Conteúdo) do Link Flow — escreve/otimiza as Money Pages aprovadas na Fase 1, corrige schema e SEO técnico identificados no Raio-X da Fase 2, e publica (com aprovação humana) via Novamira. Consome kw_principal, arquitetura, Raio-X Técnico e molde de Money Page do projeto.md. Use SEMPRE que Priscila pedir para escrever conteúdo, otimizar uma página, criar uma Money Page, ou avançar a Fase 3 de um cliente que já passou pela Fase 1/2.
---

# Link Flow — Fase 3: Conteúdo

Formaliza o `fase3-conteudo` referenciado (mas nunca definido) nos `projeto.md` dos
clientes existentes. Exige Fase 1 aprovada (`approved: true`) e, idealmente, Fase 2
com Raio-X Técnico real (não é bloqueante ter Fase 2 100% completa, mas escrever
sem saber o schema/plataforma reais é escrever às cegas).

Esta fase **escreve e pode publicar** — ao contrário das Fases 1 e 2, que só
planejam. Publicação em produção exige `.publish-approved` explícito da Priscila
antes de qualquer conteúdo ir ao ar, e exige acesso de escrita ao WordPress via
Novamira (o que pode não estar disponível na sessão atual — ver Ambiente de
Publicacao do cliente. Se só há acesso de leitura, esta skill ainda pode produzir
o rascunho/copy para aplicação manual ou em outra sessão).

## ETAPA 1 — Escolher a Money Page a trabalhar

Use a tabela `## Money Pages` do `projeto.md`: priorize por volume/mês e por
status (páginas "existe — otimizar" que já rankeiam mal costumam ter ROI mais
rápido que criar uma página nova do zero; GAPs de alto volume vêm em seguida).
Nunca escolha uma página fora da arquitetura aprovada no Gate Humano 1.

## ETAPA 2 — SERP e H2s da KW (ETAPA 2B)

Antes de escrever, confira `## H2s dos Concorrentes` no `projeto.md` para a
`kw_principal` desta página:
- Se já tiver os H2s reais dos concorrentes, use como referência de estrutura
  (não copiar texto, só a lógica de cobertura de tópicos).
- Se estiver marcado como pendente (ex.: "H2s: (a extrair)"), rode
  `mcp__Ubersuggest__serp_analysis` para a KW se ainda não tiver, e tente extrair
  H2s via `WebFetch` nas URLs dos concorrentes. **Se `WebFetch` retornar
  `EGRESS_BLOCKED`** (comum em sessões remotas com proxy restritivo), registre
  isso explicitamente no `projeto.md` e ou (a) peça para rodar em uma sessão sem
  esse bloqueio, ou (b) escreva sem essa referência, deixando claro no commit que
  a etapa de benchmarking de concorrentes foi pulada por limitação técnica —
  nunca finja ter feito a pesquisa.

## ETAPA 3 — Escrever/otimizar o conteúdo

Sempre no tom de voz definido em `## Tom de Voz / Restricoes` do `projeto.md`.
Se `regulado: true`, respeitar as Restrições Legais registradas — nunca inventar
credenciais, números de registro ou afirmações regulatórias.

Para página existente ("otimizar"): reescreva title/meta description (nunca
deixe como auto-excerto do corpo — ver achado do Raio-X Técnico), e ajuste H1/H2
para cobrir os gaps de tópico identificados na Etapa 2, mantendo a estrutura de
widgets do molde (`## Molde de Money Page`) sempre que possível, para não quebrar
o design aprovado.

Para página nova (GAP): use o `molde_id`/`inventario_widgets` do `## Molde de
Money Page` como estrutura de referência (mesma sequência de containers/widgets
do molde), adaptando o conteúdo à nova KW. Nunca reutilize IDs de widget de
outro post — ao duplicar/criar, os IDs são gerados pelo Elementor.

## ETAPA 4 — Schema e SEO técnico

Aplique as correções já identificadas no `## Raio-X Tecnico` da Fase 2 — por
exemplo, adicionar schema `Organization`/`Product`/`Service` ausente, resolver
conflito entre plugins de SEO simultâneos, corrigir inconsistência de marca
entre NAP e `<title>`/`site_name`. Não aplique nada que exija reescrever schema
global (`Organization`, `site_name`) sem confirmação explícita da Priscila —
isso afeta o site inteiro, não só uma página.

## ETAPA 5 — Gate de publicação

Apresente o conteúdo final (título, meta, corpo, mudanças de schema) para
aprovação antes de publicar. Só marque `.publish-approved` no `projeto.md`
depois de confirmação explícita — nunca publique em produção sem isso, mesmo
que o conteúdo pareça óbvio ou de baixo risco.

Depois de publicado, registre na tabela `## Money Pages`: status atualizado,
`wp_post_id` (se página nova), e data de publicação.

## Registro obrigatório

Toda ação desta fase precisa ficar registrada no `projeto.md` do cliente —
o que foi escrito, o que foi pulado e por quê (ex.: H2s de concorrentes não
extraídos por bloqueio de rede), e o estado de aprovação. Nunca marque
`Fase 3 Conteudo` como concluída no `## Estado das Fases` enquanto houver
Money Pages da arquitetura aprovada sem tratamento (nem que seja "decidido não
fazer agora, motivo X").
