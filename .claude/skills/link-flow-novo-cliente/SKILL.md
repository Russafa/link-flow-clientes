---
name: link-flow-novo-cliente
description: Onboarding de um novo cliente na carteira Link Flow — coleta os dados do negócio em blocos (info básica/NAP, horário de atendimento, profissão regulada), resolve o location_id via Ubersuggest, cria a pasta do cliente na raiz do repositório e gera o `projeto.md` (fonte da verdade) a partir do template padrão. Use SEMPRE que Priscila pedir para cadastrar, criar, adicionar ou onboardar um novo cliente do Link Flow, iniciar a carteira de um cliente novo, ou rodar o onboarding/`orq-icp` de um cliente.
---

# Link Flow — Novo Cliente (Onboarding)

Este skill formaliza o `orq-icp` referenciado nos `projeto.md` já existentes no
repositório (`resolve-gas/projeto.md`, `ideal-varais-redes-protecao/projeto.md`):
é o passo que cria a pasta do cliente e gera a "fonte da verdade" antes de
qualquer fase de execução (Fase 1 Planejamento em diante).

Este skill **só faz o onboarding** (coleta de dados + criação do `projeto.md`).
Ele não roda auditoria global, não faz engenharia reversa de concorrentes e não
aprova arquitetura — isso é escopo das fases seguintes (`fase1-planejamento`,
`fase2-site`, `fase3-conteudo`, `fase5-gmn`), que ainda não existem como skills
neste repositório.

## Antes de começar

1. Confirme que o cliente ainda não existe: rode `ls` na raiz do repo e veja se
   já existe uma pasta com o slug esperado. Se existir, pare e pergunte à
   Priscila se é para atualizar o cliente existente em vez de criar um novo
   (nunca sobrescrever um `projeto.md` existente sem confirmação).
2. O slug é sempre `kebab-case` derivado do nome do negócio (ex.: "Resolve
   Gás" → `resolve-gas`), sem acentos, sem sufixos como "LTDA".

## BLOCO 1 — Info Básica e NAP

Pergunte (ou extraia do que a Priscila já mandou) os seguintes campos. Não
avance para o Bloco 2 com campos essenciais vazios — a exceção é Telefone/CEP
quando genuinamente indisponíveis (usar `[TELEFONE]` como placeholder, igual
ao padrão já usado em `resolve-gas/projeto.md`).

- Negócio / segmento (o que a empresa faz, em uma frase)
- Cidade / região / raio de atuação
- Site (host WordPress), se já existir
- Nome (NAP), Razão Social + CNPJ se houver
- Endereço completo + CEP
- Telefone
- Conta de governança de dados: 4maos ou publicon (perguntar se não for óbvio)

Resolva o `location_id` do Ubersuggest para a cidade informada com
`mcp__Ubersuggest__location_suggest` (ou `location_details` se já souber o
ID) — um para a cidade (usado nas buscas de keyword local) e o `location_id`
nacional do país (2076 = Brasil, salvo indicação em contrário) para métricas
de domínio/tráfego. Nunca invente um `location_id` — se a ferramenta não
retornar um match claro, deixe o campo como `[A CONFIRMAR]` e avise a
Priscila.

## BLOCO 2 — Horário de Atendimento

Pergunte dias e horários de atendimento (comercial e, se houver, emergencial
24h). Esse campo alimenta o schema `openingHours`, o rodapé do site e o FAQ
nas fases seguintes — não pule mesmo que pareça administrativo.

## BLOCO 3 — Profissão Regulada (condicional)

Pergunte se o negócio ou o responsável técnico está sujeito a um conselho
profissional ou certificação obrigatória (ex.: OAB, CFM, CFO, CONAR, ou — como
em `resolve-gas` — uma certificação de empresa tipo BIP/Vanzolini exigida por
concessionária).

- Se **não regulado**: preencha `regulado: false` e marque os campos de
  "Dados do Profissional" como `N/A (sem regulação)`, como em
  `ideal-varais-redes-protecao/projeto.md`.
- Se **regulado**: colete número de registro, abordagem/especialidade,
  formação e especialização. Sem esses dados, deixe explícito no `projeto.md`
  que a entrega de conteúdo fica bloqueada até serem preenchidos (não invente
  números de registro nem afirmações de credenciamento).
- Se houver restrições legais específicas da certificação (o que a empresa
  NÃO pode afirmar, nome oficial exigido, uso de selo/marca), registre-as em
  uma subseção "Restrições Legais" dentro de "Dados do Profissional", no
  mesmo formato usado em `resolve-gas/projeto.md`.

## Ambiente de Publicação e Tom de Voz

Pergunte, se disponível:
- URL do WordPress e se o Novamira já está instalado (NÃO assuma abilities —
  isso só é verificado de fato via `discover-abilities` quando o MCP do site
  estiver conectado; até lá, marque como `[A VERIFICAR via discover-abilities]`).
- Tom de voz aprovado (ex.: "acolhedor e direto", "profissional e técnico") —
  se a Priscila não definir, deixe como pendente de aprovação do cliente, não
  escolha por conta própria.

## Gerando o `projeto.md`

1. Crie a pasta `<slug>/` na raiz do repositório.
2. Copie `templates/projeto.md` (neste skill) para `<slug>/projeto.md`.
3. Substitua todos os placeholders `{{campo}}` pelos dados coletados nos
   Blocos 1–3. Qualquer campo não coletado nesta sessão permanece como
   `[A CONFIGURAR]` ou `[A VERIFICAR ...]` — nunca apague as seções do
   template, mesmo vazias (elas são o contrato que as fases seguintes esperam
   encontrar).
4. Todas as seções de Fase 1 em diante (ICP, SERP, Arquitetura, Money Pages,
   Baseline, GBP, Raio-X Técnico etc.) ficam vazias/como template — isso é
   preenchido pelas fases seguintes, não pelo onboarding.
5. Em "Estado das Fases", marque tudo como pendente (nenhum checkbox
   marcado) e `auditoria_global: pendente`.

## Depois de gerar

- Mostre o `projeto.md` gerado para a Priscila revisar antes de considerar o
  onboarding concluído — especialmente NAP, `location_id` e o bloco de
  profissão regulada, pois erros aí se propagam para schema/SEO nas fases
  seguintes.
- Não rode a auditoria global nem a Fase 1 automaticamente após o onboarding;
  isso é um passo separado, disparado explicitamente pela Priscila.
- Faça commit da nova pasta do cliente com uma mensagem clara (ex.:
  `onboarding: adiciona cliente <slug>`).
