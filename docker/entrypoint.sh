#!/bin/sh

PORT="${PORT:-80}"

sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf
sed -i "s/<VirtualHost \*:80>/<VirtualHost *:${PORT}>/" /etc/apache2/sites-available/000-default.conf

cat > /var/www/html/.env <<EOF
CI_ENVIRONMENT = ${CI_ENVIRONMENT:-production}
app.baseURL = '${APP_BASE_URL:-}'
EOF

exec apache2-foreground