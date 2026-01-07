# Proposition de design modernisé

Palette (exemple):
- Primaire: #0B74FF (bleu vif)
- Secondaire: #0B3A66 (bleu foncé)
- Accent: #F59E0B (jaune/amber)
- Neutres: #111827 (dark), #6B7280 (muted gray), #FFFFFF

Typographie:
- Inter pour titres, Open Sans pour corps de texte. Google Fonts inclus via Vite.

Layout:
- Conteneur centralisé `max-w-7xl` avec espacements responsives.
- Header fixe minimal, menu hamburger mobile.
- Hero large avec grande image à droite et CTA clair à gauche.

Composants recommandés:
- Cards pour services (ombre légère, hover uplift).
- Carousel léger (Owl ou tiny-swiper) pour témoignages.
- Footer accessible avec liens rapides et contact.

Accessibilité & perf:
- Contraste > 4.5:1 pour textes.
- Images optimisées WebP si possible.
- Utiliser lazy-loading pour images non critiques.

Workflow:
- Migrer styles vers Tailwind + composants réutilisables.
- Convertir `index.html` → `resources/views` puis intégrer partials: `nav`, `footer`, `hero`.
