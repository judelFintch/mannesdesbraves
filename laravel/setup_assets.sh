#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)" # project root
SRC_DIR="${ROOT_DIR}"
DST_DIR="${ROOT_DIR}/laravel/public"

echo "Copie des assets depuis le projet vers ${DST_DIR}..."
mkdir -p "${DST_DIR}"

for d in assets css img js lib logo; do
  if [ -d "${SRC_DIR}/${d}" ]; then
    echo "Copie ${d}..."
    rsync -a --delete "${SRC_DIR}/${d}" "${DST_DIR}/"
  else
    echo "Avertissement: dossier ${d} introuvable dans ${SRC_DIR}"
  fi
done

echo "Copie des fichiers racine utiles (index.html, contact.html, favicon)..."
for f in index.html contact.html 404.html LICENSE.txt READ-ME.txt; do
  if [ -f "${SRC_DIR}/${f}" ]; then
    cp "${SRC_DIR}/${f}" "${DST_DIR}/"
  fi
done

echo "Assets copiés dans ${DST_DIR}. Vérifie et ajuste les chemins dans les vues Blade si nécessaire."
