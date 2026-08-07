# Auditoria Global — Ideal Varais e Redes de Proteção
Data: 2026-08-05

## Resumo
1 item crítico (🔴) · 8 itens de atenção (🟡) · 4 itens ok (✅)

## Tabela de Achados

| Camada | Onde | O que foi encontrado | Impacto | Prioridade |
|--------|------|----------------------|---------|------------|
| E — Meta SEO (Yoast) | 19 páginas de serviço (IDs 3333, 2844, 2085, 1391, 1349, 1325, 1125, 1065, 1025, 993, 961, 919, 891, 844, 777, 733, 694, 587, 491) | Todas compartilham o MESMO título e meta description: `"Rede de Proteção para Quadra Esportiva em SP \| Ideal Redes"` / `"Instalação de rede de proteção para quadra esportiva em SP..."` — independente do tema real da página (pássaro, pet, escada, janela, sacada etc.). Só a página 491 (Quadra Esportiva) tem o título certo por coincidência. | Título/description duplicados em quase todas as páginas de serviço = a maior parte das Money Pages candidatas está competindo entre si e exibindo um título que não bate com o conteúdo. Precisa ser corrigido pela Fase 1/3 antes de qualquer trabalho de SEO ter efeito. | 🔴 Crítico |
| A — Header/Footer ativos | Elementor Library, template "Machinex – Header" (ID 5736) e "Machinex – Footer" (ID 5757), aplicados via condição `include/general` (site inteiro) | Rótulo interno do template ainda usa o nome do kit original ("Machinex", kit de engenharia industrial). Conteúdo visível conferido: telefone `(11) 95179-5439`, e-mail `idealvarais@gmail.com`, endereço `Rua Albino Arilla, 70 - Vila Bertioga, São Paulo - SP, 03189-170` — todos batem com o NAP do cliente. | Nenhum (é só nome interno do template na biblioteca, não aparece pro visitante) | 🟡 Atenção (housekeeping) |
| A — Kit de estilos ativo | `elementor_active_kit` = ID 5706, "Kit Styles: Machinex - Template kit for Engineering & Industrial" | Kit de estilos global (cores/fontes) mantém o nome do kit de nicho industrial, reaproveitado para redes de proteção residencial | Nenhum funcional — só nomenclatura interna | 🟡 Atenção (housekeeping) |
| A — Biblioteca Elementor | 4 kits extras não usados: "Kit Styles: Refix - Appliance Repair Company" (IDs 1857, 1853, 52, 15, 11) + "Kit padrão" (ID 5) | Kits de estilo de outros nichos (conserto de eletrodomésticos) órfãos na biblioteca, sem uso ativo | Nenhum — poluição da biblioteca, sem efeito no site | 🟡 Atenção (housekeeping) |
| C — wp_options | blogname, blogdescription, admin_email, siteurl, home | `blogname: "Redes de Proteção Ideal"`, `admin_email: admin@redesdeprotecaoideal.com.br` — tudo consistente com o cliente atual, sem rastro de dono anterior | — | ✅ OK |
| B — Menu | "Mega Menu Serv." (único menu) | Todos os 8 itens apontam para páginas/URLs do próprio domínio do cliente; nenhum link externo, quebrado, ou com nome de outro profissional | — | ✅ OK |
| D — Yoast global (schema) | `wpseo_titles.company_name` e `person_name` | Ambos vazios — schema Organization (Knowledge Graph) do Yoast está incompleto | LocalBusiness/Organization schema pode sair incompleto até WPCode/Yoast serem configurados na Fase 2/3 | 🟡 Atenção |
| D — Yoast global (title home) | `title-home-wpseo` | Ainda na variável padrão `%%sitename%% %%page%% %%sep%% %%sitedesc%%`, não customizada (a página Home em si, ID 127, já tem yoast_title customizado e bom, então o impacto prático é baixo) | Baixo | 🟡 Atenção |
| E — Meta SEO ausente | 14 páginas: Regiões Atendidas, 4 páginas de bairro (Jardim Anália Franco, Mooca, Tatuapé, Zona Leste), 6 posts de blog, Contato, Sobre nós | `yoast_title` e `yoast_desc` vazios — caem no fallback automático do Yoast | Oportunidade de melhoria, não bloqueante | 🟡 Atenção |
| E — Home / Serviços | Home (ID 127) e Serviços (ID 137) | yoast_title e yoast_desc customizados, coerentes com o conteúdo e com boa formatação (CTA, palavra-chave, certificações ABNT/Falcão Bauer) | — | ✅ OK |
| E — Lixeira | 4 páginas em trash: "Rede de Proteção na Mooca - Copy" (5928), "Posso instalar redes de proteção..." (3883), "Blog" duplicado (3869), "Hello world!" (1) | Ocupam slug mas não publicam nada; a cópia da Mooca é duplicata da página 5892 já publicada | Baixo — não bloqueia, mas pode ser esvaziado depois | 🟡 Atenção (lixeira) |
| NAP | Footer do site vs. `projeto.md` | Telefone real encontrado no site: `(11) 95179-5439`. E-mail: `idealvarais@gmail.com`. No `projeto.md` o campo Telefone ainda está como `[TELEFONE]` (placeholder) | `projeto.md` desatualizado em relação ao site real — deve ser corrigido | 🟡 Atenção (dado a sincronizar) |

## Molde (Fase 3)
Status: ⬜ **não definido**. O campo `molde_id` no `projeto.md` ainda está `[A CONFIGURAR — Fase 2]`. Não bloqueia esta auditoria, mas precisa ser definido antes da Fase 3.

## Conteúdo Órfão (cross-reference com projeto.md)
A tabela `## Money Pages` do `projeto.md` está vazia (esperado — a Fase 1 ainda não rodou). Isso significa que, tecnicamente, **todas** as páginas publicadas do site (28, fora as 4 em trash) estão "fora do plano" por enquanto:
- 17 páginas de serviço já cobrindo quase 1:1 os serviços do ICP (sacada, janela, escada, piscina, pet, pássaro, playground, portão, porta, quintal, estrutura metálica, guarda-corpo, pallets/prateleiras, quadra esportiva, escolas, condomínios, limitadores)
- 4 páginas de bairro/região (Jardim Anália Franco, Mooca, Tatuapé, Zona Leste) + Regiões Atendidas
- 7 posts de blog (guias sobre gatos, baby-proofing, malhas, rede ressecada etc.)
- Institucionais: Home, Sobre nós, Serviços, Contato

Isso é esperado nesse ponto do fluxo — a Fase 1 vai mapear essas páginas existentes na tabela oficial de Money Pages (aproveitando o que já existe em vez de recriar do zero).

## Próximos passos (fora do escopo automático do Link Flow)
Estes itens são configuração do site existente — não são alterados automaticamente pelo sistema:
1. Corrigir título/meta description duplicados nas 19 páginas de serviço (🔴 crítico) — será feito ao formalizar cada Money Page na Fase 3.
2. Preencher `company_name` no schema global do Yoast.
3. Preencher `yoast_title`/`yoast_desc` nas 14 páginas sem meta customizada.
4. Renomear (opcional) os templates "Machinex" na biblioteca Elementor para nomes do cliente — puramente organizacional.
5. Esvaziar a lixeira das 4 páginas obsoletas (opcional).
6. Atualizar `projeto.md`: telefone real `(11) 95179-5439` no lugar do placeholder `[TELEFONE]`.
