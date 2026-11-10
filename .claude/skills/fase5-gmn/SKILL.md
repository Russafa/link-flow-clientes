---
name: fase5-gmn
description: Fase 5 (GMN — Google Meu Negócio / Google Business Profile) do Link Flow — audita o perfil do cliente no Google Meu Negócio (completude, categorias, NAP, fotos, posts, avaliações) e propõe correções, consistente com o NAP já registrado no onboarding e com o schema Organization aplicado no site (Fase 3). Consome NAP e Ambiente de Publicacao do projeto.md e preenche a seção GBP (Fase 5). Use SEMPRE que Priscila pedir para rodar a Fase 5, GMN, Google Meu Negócio, Google Business Profile, ou avançar um cliente que já tem Fase 1 aprovada.
---

# Link Flow — Fase 5: GMN (Google Meu Negócio)

Formaliza o `Fase 5 GMN` referenciado (mas nunca definido) no `## Estado das
Fases` dos `projeto.md` existentes. Nenhum cliente da carteira rodou esta fase
ainda — é a primeira vez que ela é executada de ponta a ponta.

**Diferença importante em relação às Fases 1/2/3:** não existe aqui uma
ferramenta MCP com acesso de leitura/escrita ao Google Meu Negócio (ao
contrário do Novamira para WordPress). Esta fase é majoritariamente de
**auditoria manual + recomendação** — as correções no perfil do GMN em si
são aplicadas pela Priscila/cliente diretamente no painel do Google, não
por esta skill. Nunca finja ter acesso direto ao painel do GMN.

## Pré-requisito

Leia o `<slug>/projeto.md` inteiro antes de começar. Precisa existir:
- `## NAP` preenchido (nome, endereço, telefone) — é a referência de
  verdade para checar consistência.
- Fase 1 aprovada (idealmente) — não é bloqueante, mas o ICP ajuda a validar
  se as categorias do GMN fazem sentido com os serviços/produtos reais.

Se o NAP no `projeto.md` estiver incompleto (ex.: endereço como "procure no
Google Meu Negócio", caso comum nesta carteira), e a Fase 5 for a primeira
vez que alguém confere o endereço real, use o resultado desta auditoria para
**completar o NAP no projeto.md também**, não só a seção GBP.

## ETAPA 1 — Localizar o perfil do GMN

Pergunte à Priscila se já existe um perfil reivindicado (link direto, ou
nome exato do negócio cadastrado) — não adivinhe. Se ela não souber, tente
localizar via busca do nome + cidade (`WebSearch`/`WebFetch` no Google Maps,
se o ambiente permitir; em sessões remotas com proxy restritivo, `WebFetch`
pode retornar `EGRESS_BLOCKED` — neste caso, peça para rodar esta etapa na
sessão local, igual ao fluxo já estabelecido para extração de H2s de
concorrentes na Fase 3).

Preencha `locId` em `## GBP (Fase 5)` com o Place ID ou o link direto do
perfil (o que conseguir confirmar), ou registre explicitamente "perfil não
localizado/não reivindicado" se for o caso — isso já é um achado crítico
(negócio sem presença no GMN é prioridade alta de correção).

## ETAPA 2 — Auditoria de completude

Com o perfil localizado, confira e registre o estado real de cada item
(nunca estimar nem supor "provavelmente está ok"):

- **NAP**: nome, endereço, telefone exibidos no perfil batem com o
  `## NAP` do `projeto.md` e com o schema `Organization` já aplicado no
  site (Fase 3, se houver)? Qualquer divergência é um achado a corrigir —
  é a causa mais comum de perda de ranking local.
- **Categoria principal e secundárias**: fazem sentido com o ICP real do
  cliente (ver `## ICP (Fase 1)`)? Sinalizar categoria genérica demais ou
  desalinhada do catálogo real (ex.: uma categoria que sugira um produto
  que o cliente explicitamente não vende — ver exclusões registradas no
  ICP, se houver).
- **Horário de atendimento**: bate com `## Horario de Atendimento` do
  onboarding?
- **Website**: aponta para o domínio certo, sem redirecionamento quebrado.
- **Fotos**: tem capa, logo, fotos de produto/fachada/interior reais (não
  é preciso contar 1 a 1, mas registrar se está "vazio/poucas fotos
  genéricas" vs "completo").
- **Posts/Produtos no perfil**: existem posts recentes (últimos 90 dias) ou
  está abandonado?
- **Avaliações**: nº total e nota média (dado real, puxado do perfil) —
  e se a Priscila/cliente está respondendo às avaliações.
- **Atributos**: ex. "atende toda a região", "fabricação própria" — quando
  aplicável ao nicho do cliente.

Calcule um "% completude" simples e defensável (ex.: X de Y itens acima
preenchidos corretamente) e registre em `## GBP (Fase 5)` → `Diagnostico`.
Não precisa de fórmula sofisticada — o importante é ser auditável (mostrar
o que foi contado).

## ETAPA 3 — Lista de correções priorizada

Separe os achados em:
1. **Críticos** (NAP inconsistente, perfil não reivindicado, categoria
   errada, horário errado) — afetam ranking local e confiança do cliente
   que chega.
2. **Importantes** (poucas fotos, sem posts recentes, avaliações sem
   resposta).
3. **Nice-to-have** (atributos extras, mais fotos de variedade).

Esta lista é o entregável desta fase — **não aplique nada automaticamente
no painel do GMN** (não há acesso para isso de qualquer forma). Apresente a
lista para a Priscila como está feito nas outras fases, e se ela confirmar
que vai aplicar (ou já aplicou) manualmente, registre o status.

## Gate Humano — Confirmação do diagnóstico

Apresente o resumo (locId/perfil, % completude, lista priorizada de
correções) para a Priscila. Marque `NAP consistente com site` em `## GBP
(Fase 5)` como `sim`/`nao` só depois da checagem real da Etapa 2, nunca por
suposição.

## Registro obrigatório

Preencha `## GBP (Fase 5)` com `locId`, `Diagnostico` (% completude com a
contagem) e `NAP consistente com site`. Se a auditoria foi bloqueada por
falta de acesso (perfil não localizado, `WebFetch` bloqueado), registre isso
explicitamente em vez de deixar o campo vazio sem explicação.

Marque `[x] Fase 5 GMN` em `## Estado das Fases` só quando a auditoria
estiver completa (mesmo que a lista de correções ainda esteja pendente de
execução pelo cliente — a fase em si é a auditoria + recomendação, não a
execução das correções no painel do Google).
