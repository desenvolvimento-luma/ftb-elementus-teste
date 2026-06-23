#!/bin/sh

cat > /var/www/html/.env <<EOF
CI_ENVIRONMENT = ${CI_ENVIRONMENT:-production}
app.baseURL = '${APP_BASE_URL:-}'
EOF

exec apache2-foreground