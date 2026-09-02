# Briefing de Otimização — /telas_soldadas/ (molde_id 7)

Gerado em 2026-09-03, ETAPA 1 e 2 da Fase 3 (`fase3-conteudo`). Primeira Money
Page escolhida: já existe, é o produto core, maior volume de busca (9.900/mês
nacional em "tela soldada", SD 14 — baixa dificuldade) e a pior posição atual
(46º para a variante "telas soldada"). ROI mais rápido do que criar página nova.

Este briefing NÃO inclui o texto final da página — falta o corpo atual real
(HTML/`_elementor_data`) para editar em cima dele sem risco de contradizer ou
duplicar o que já existe. Essa leitura e a edição/publicação em si precisam
rodar numa sessão com acesso real ao Novamira (`novamira-telaspadrao-com`) —
esta sessão remota não tem esse acesso.

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

## Pendência: benchmarking de concorrentes (ETAPA 2 da skill)

`WebFetch` está bloqueado (`EGRESS_BLOCKED`) nesta sessão para os 3 concorrentes
confirmados. H2s NÃO foram extraídos:
- catumbitelas.com.br — página equivalente de tela soldada
- telasmm.com.br/fabricante-de-tela-soldada.php
- teciam.com.br/telas-soldadas-diferenciais-e-uso/

**Ação necessária antes de finalizar o copy:** rodar `WebFetch` (ou visita manual)
nessas 3 URLs numa sessão sem esse bloqueio (a sessão local já provou que
`WebFetch`/navegação funciona lá) e trazer a estrutura de H2 de volta para
`## H2s dos Concorrentes` no `projeto.md`.

## Correções técnicas a aplicar (não dependem de benchmarking)

1. **Title:** trocar sufixo de marca "Telas Sob Medida" → "Telas Padrão" (bate
   com o NAP oficial). Sugestão de padrão: `Tela Soldada Galvanizada Sob Medida | Telas Padrão`
   — ajustar conforme o que a página realmente oferece (confirmar com o corpo
   real antes de publicar).
2. **Meta description:** reescrever à mão (hoje é auto-excerto). Deve
   incluir a KW principal, um diferencial real do negócio (NÃO inventar — usar
   o que já está no site/catálogo) e uma chamada de ação. Não finalizar sem ler
   o conteúdo atual da página primeiro.
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
> ⚠️ Este bloco `Organization` é GLOBAL (site inteiro), não só desta página —
> só aplicar com aprovação explícita da Priscila (ver ETAPA 4 da skill
> `fase3-conteudo`). NAP usado aqui é o confirmado no onboarding; CNPJ/razão
> social ficam de fora por decisão da Priscila (ver `## NAP` no projeto.md).

```json
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Tela Soldada Galvanizada Sob Medida",
  "brand": { "@type": "Brand", "name": "Telas Padrão" },
  "description": "[PREENCHER com a descrição real do produto lida da página — não inventar especificações de malha/fio/dimensões]"
}
```
> ⚠️ Os campos entre colchetes exigem o conteúdo real da página — preencher só
> depois de ler `/telas_soldadas/` via Novamira.

4. **Conflito de plugins:** decidir com a Priscila se desativa Yoast ou
   SEOPress antes de aplicar qualquer schema novo (os dois ativos ao mesmo
   tempo podem gerar schema duplicado — ver achado no Raio-X Técnico).

## Próximo passo

Rodar, numa sessão com Novamira conectado (leitura + escrita):
1. Ler o `_elementor_data`/conteúdo atual completo de `/telas_soldadas/` (post_id 7)
2. Extrair H2s dos 3 concorrentes (WebFetch, sem bloqueio de rede)
3. Escrever title/meta finais e decidir os campos do schema `Product` acima
4. Aplicar o schema `Organization` só após aprovação explícita da Priscila
5. Apresentar tudo para aprovação (`.publish-approved`) antes de publicar
