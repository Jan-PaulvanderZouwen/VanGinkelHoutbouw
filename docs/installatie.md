# Installatie

## Optie 1 - Theme uploaden in WordPress

Gebruik de zip `vanginkelhoutbouw-theme.zip`.

1. Ga in WordPress naar **Weergave > Thema's**.
2. Klik op **Nieuw thema toevoegen**.
3. Upload `vanginkelhoutbouw-theme.zip`.
4. Activeer **Van Ginkel Houtbouw**.
5. Installeer en activeer ACF.
6. Maak pagina's aan en koppel templates:
   - Home: template **Home**
   - Contact: template **Contact**
   - Configurator: template **3D Configurator**

## Optie 2 - Repo-structuur gebruiken

Gebruik de zip `VanGinkelHoutbouw-repo.zip` of commit de inhoud naar GitHub.

De theme-map staat onder:

```text
wp-content/themes/vanginkelhoutbouw/
```

## Belangrijk

- Bewerk bestaande bestanden direct.
- Maak geen dubbele fixbestanden.
- Houd componenten gesplitst in `inc`, `template-parts`, `assets/css` en `assets/js`.
