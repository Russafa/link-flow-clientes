# Engenharia Reversa — catumbitelas.com.br (concorrente líder)

Data: 2026-08-26 (revisado — lista de concorrentes atualizada a pedido da Priscila)
Fonte: `domain_top_pages` e `domain_overview` (Ubersuggest), locId 2076 (Brasil).
Nota metodológica: sem crawl completo do concorrente — `WebFetch` está bloqueado
pelo proxy de rede desta sessão para domínios externos. A árvore abaixo foi
montada a partir das URLs e títulos reais retornados pela ferramenta, não por
inspeção visual das páginas.

## Concorrentes confirmados (revisão de 2026-08-26)
`paperplast.com.br` (catálogo principal é lona plástica) e `casadascercas.com.br`
(e-commerce genérico de cercas) foram retirados por não serem concorrentes
diretos — decisão da Priscila. Concorrentes atuais:
- **catumbitelas.com.br** (líder, ~14.713 visitas/mês, DR 10) — usado nesta
  engenharia reversa
- **telasmm.com.br** (~1.916 visitas/mês, DR 18) — fabricante direto de telas
  metálicas sob medida, catálogo muito próximo ao da Telas Padrão, inclusive
  com página dedicada de "tecidos metálicos de aço inoxidável"
- **teciam.com.br** (~441 visitas/mês, DR 22) — fabricante de telas soldadas/
  onduladas, tem inclusive um blog comparativo "tela soldada x tela ondulada"
  no mesmo formato do blog já existente da Telas Padrão

## Por que catumbitelas.com.br é o concorrente líder
Maior tráfego orgânico nacional dos 3 confirmados (~14.713/mês). Ressalva:
catumbitelas também vende mosquiteiras, redes de proteção e chapas
perfuradas — catálogo mais amplo que o da Telas Padrão. Usar só a parte de
telas metálicas estruturais (soldada, ondulada, alambrado) como referência.

## Estrutura observada (páginas relevantes ao escopo do cliente)
- `/telas/construcao-civil/tela-soldada-malha-75mm-x-50mm-fio-2-10-mm-largura-de-2-00m-preco-por-metro` (1.214/mês) — página de produto de tela soldada
- `/casa-e-jardim/alambrado-galvanizado-malha-3-fio-2-75-mm-altura-2m-preco-por-metro` e variantes de malha (128, 63, 51/mês) — silo de alambrado, um produto por variação de malha/fio
- `/tela-soldada-galv-pesada-m25x25mm-f1-24mm-25-00x0-50m` (104/mês) — variante pesada
- `/telas/tela-ondulada-galvanizada-m50-80mm-f12-alt-2-00m` (63/mês) — tela ondulada
- `/telas/chapa-expandida-*` e `/telas/chapa-perfurada-*` — silo de chapas metálicas, **fora do escopo atual da Telas Padrão** (não replicar, a menos que o cliente confirme que também fabrica)
- Mosquiteiras, redes de proteção, cabos de aço — **fora do escopo do cliente**, não replicar

Padrão de URL do concorrente: 1 página de produto por combinação de
malha/fio/altura (URLs longas e descritivas), não uma única página de
categoria genérica.

## Complemento: telasmm.com.br e teciam.com.br (catálogo mais próximo)
Como fabricantes diretos, essas duas dão uma referência melhor de *como
nomear e estruturar* as páginas de produto do cliente do que o e-commerce
catumbitelas:
- telasmm.com.br usa o padrão `/fabricante-de-<produto>.php` — uma página por
  tipo de tela (soldada, ondulada artística, aço inoxidável, fibra de vidro,
  alumínio) em vez de por variação de malha/fio. Mais parecido com a
  estrutura atual da Telas Padrão (`/telas_soldadas/`, `/telas_onduladas/`).
- teciam.com.br mistura páginas de produto com blog técnico comparativo — o
  mesmo formato que a Telas Padrão já usa em
  `/tela-ondulada-ou-tela-eletrosoldada-qual-a-melhor-para-o-seu-projeto/`.

## Proposta de arquitetura para Telas Padrão (adaptada, não copiada)

1. **Silo Telas Soldadas** (já existe em `/telas_soldadas/`) — manter como
   página única de produto (padrão telasmm/teciam), não subdividir por
   malha/fio como o catumbitelas
2. **Silo Telas Onduladas** (já existe em `/telas_onduladas/`)
3. **Silo Tela de Aço Inox** (GAP — telasmm.com.br tem página dedicada
   "fabricante-de-tecidos-metalicos-de-aco-inoxidavel.php", 3.600 buscas/mês
   nacional na KW "tela de aço"; Telas Padrão só menciona o produto em
   conteúdo comparativo, sem página própria)
4. **Silo Alambrado/Cercamento** (GAP de maior prioridade — 22.200 buscas/mês
   em "alambrado"; catumbitelas.com.br tem várias páginas de produto para
   essa aplicação)
5. **Blog técnico** (já existe: comparativo tela ondulada x eletrosoldada,
   mesmo formato do blog da teciam.com.br) — manter como conteúdo de apoio

Esta proposta ainda não foi aprovada pela Priscila (Gate Humano 1 em aberto no
`projeto.md`).
