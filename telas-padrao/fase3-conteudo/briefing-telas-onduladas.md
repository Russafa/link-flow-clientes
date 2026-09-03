# Briefing de Otimização — /telas_onduladas/ (post_id 398)

Gerado em 2026-09-03. Segunda Money Page a trabalhar (ROI mais rápido de novo:
já existe, é o produto core do segundo silo aprovado). Mesmo padrão de
problemas já confirmados no Raio-X Técnico da Fase 2.

Este briefing NÃO inclui o texto final — falta o corpo real completo
(`_elementor_data` widget a widget, como foi feito para `/telas_soldadas/`)
para escrever em cima do que já existe sem duplicar/contradizer.

## O que já sabemos (dados reais)

- kw_principal: "tela ondulada" — 2.400 buscas/mês (Brasil)
- Post_id: 398 (reaproveita os mesmos container-IDs base de `/telas_soldadas/`
  — foi clonada do mesmo template, ver `## Molde de Money Page` no `projeto.md`)
- `yoast_title` atual: "Tela Ondulada - Telas Sob Medida" — mesma inconsistência
  de marca já corrigida em `/telas_soldadas/` ("Telas Sob Medida" → "Telas Padrão")
- `yoast_desc` atual: auto-excerto, não escrito à mão (mesmo padrão)
- Schema atual: só `WebPage`/`ImageObject`/`BreadcrumbList`/`WebSite` — falta
  `Product` (o `Organization` global já foi aplicado via `/telas_soldadas/` e
  vale para o site inteiro — NÃO precisa reaplicar)

## Concorrentes a checar para H2s (ETAPA 2 da skill fase3-conteudo)

Ainda não extraídos nesta sessão remota (`WebFetch` bloqueado) — rodar na
sessão local com acesso, igual foi feito para "tela soldada":
- `catumbitelas.com.br/telas/tela-ondulada-galvanizada-m50-80mm-f12-alt-2-00m`
- `telasmm.com.br/fabricante-de-tela-ondulada-artistica.php`
- `teciam.com.br/tela-soldada-x-tela-ondulada-qual-a-melhor-para-o-seu-projeto/`
  (mesmo blog comparativo já referenciado na Fase 1 — formato parecido com o
  blog que a Telas Padrão já tem)

## Correções a aplicar (mesmo padrão de /telas_soldadas/)

1. **Title:** trocar sufixo "Telas Sob Medida" → "Telas Padrão". Modelo usado
   em telas_soldadas: `Tela Ondulada Sob Medida - Direto da Fábrica | Telas Padrão`
   — ajustar depois de ler o H1 real da página (pode não usar exatamente
   "direto da fábrica" se o texto real for diferente).
2. **Meta description:** reescrever à mão com a kw_principal + diferencial real
   (ler o conteúdo primeiro, não reciclar a de telas_soldadas sem checar se os
   materiais/aplicações citados batem com o que a página de ondulada realmente
   oferece).
3. **Schema `Product` a criar** (só para esta página — `Organization` já é
   global e não precisa reaplicar):

```json
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Tela Ondulada Sob Medida",
  "brand": { "@type": "Brand", "name": "Telas Padrão" },
  "description": "[PREENCHER com a descrição real lida do _elementor_data — não reciclar a de telas_soldadas, não inventar malha/fio/dimensão/preço]"
}
```

## Próximo passo (rodar na sessão local com Novamira)

1. Ler `_elementor_data` completo de post_id 398 (widget a widget)
2. Extrair H2s dos 3 concorrentes listados acima
3. Escrever title/meta finais e preencher `description` do schema Product
4. Apresentar para aprovação da Priscila (title/meta/schema) — Organization
   já está aprovado e ativo, não precisa perguntar de novo
5. Só depois de aprovado: aplicar (`update_post_meta` para yoast_title/desc,
   novo arquivo ou adicionar bloco ao `wp-content/novamira-sandbox/` para o
   schema Product desta página) e verificar via `curl`
6. Atualizar `## Money Pages` e este arquivo com o resultado
