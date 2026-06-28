# Déploiement — Site vitrine DiabeApp (diabeapp.com)

Cible : **VPS ZentralPro** `179.237.84.180`, dans `/var/www/diabeapp`
(à côté de `/var/www/zentralrh`). Stack : Laravel 12 / PHP 8.x-fpm / nginx.

---

## 1. Acheter le domaine (Infomaniak)

Manager Infomaniak → **Domaines** → vérifier `diabeapp.com` → commander.
Le domaine peut être pris **sans pack hébergement** : la zone DNS reste gérée
chez Infomaniak, l'hébergement est sur ton VPS.

## 2. DNS → pointer vers le VPS

Dans la zone DNS Infomaniak de `diabeapp.com`, créer :

| Type | Nom   | Valeur            | TTL   |
|------|-------|-------------------|-------|
| A    | `@`   | `179.237.84.180`  | 3600  |
| A    | `www` | `179.237.84.180`  | 3600  |

Propagation : quelques minutes à ~2 h. Vérifier :
`nslookup diabeapp.com` (doit renvoyer 179.237.84.180).

## 3. Préparer le build en local (Windows)

```powershell
# Dans C:\laragon-A\www\Site_internet-DiabeApp
npm install
npm run build        # génère public/build (assets compilés)
```

## 4. Copier les fichiers sur le VPS

Copier tout le projet **sauf** `node_modules`, `.git`, `.env` local.
Exemple via rsync (depuis Git Bash) ou scp/WinSCP :

```bash
rsync -avz --delete \
  --exclude '.git' --exclude 'node_modules' --exclude '.env' \
  ./ root@179.237.84.180:/var/www/diabeapp/
```

> `vendor/` et `public/build` peuvent être copiés tels quels, ou régénérés
> sur le serveur (le script post-deploy relance `composer install`).

## 5. Configurer le .env de prod (sur le VPS)

```bash
# Sur le VPS
cp /var/www/diabeapp/deploy/.env.production.example /var/www/diabeapp/.env
nano /var/www/diabeapp/.env     # remplir les secrets *** (Stripe live, SMTP)
```

## 6. Lancer le post-déploiement

```bash
cd /var/www/diabeapp
sudo bash deploy/post-deploy.sh
```

## 7. Installer le vhost nginx + HTTPS

```bash
sudo cp /var/www/diabeapp/deploy/nginx/diabeapp.com.conf \
        /etc/nginx/sites-available/diabeapp.com
sudo ln -s /etc/nginx/sites-available/diabeapp.com /etc/nginx/sites-enabled/

# Vérifier le socket PHP-FPM réel et l'aligner dans le vhost si besoin :
ls /run/php/                     # ex. php8.5-fpm.sock

sudo nginx -t && sudo systemctl reload nginx

# Certificat Let's Encrypt (ajoute le bloc 443 + redirection auto) :
sudo certbot --nginx -d diabeapp.com -d www.diabeapp.com
```

## 8. Vérifications finales

- [ ] `https://diabeapp.com` répond, cadenas valide
- [ ] `https://www.diabeapp.com` redirige bien vers le domaine principal
- [ ] Page contact : envoi de mail OK (SMTP réel configuré)
- [ ] Donation Stripe : test avec clés **live** (petit montant réel)
- [ ] `APP_DEBUG=false` et `APP_ENV=production` dans le .env

---

## Mises à jour ultérieures

```powershell
npm run build                    # en local
```
```bash
rsync ... ./ root@179.237.84.180:/var/www/diabeapp/   # recopier
cd /var/www/diabeapp && sudo bash deploy/post-deploy.sh
```
