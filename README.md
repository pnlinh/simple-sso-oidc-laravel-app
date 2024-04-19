# OpenID Connect with Laravel

Simple Laravel application with OpenID Connect to working with Authentik

### How to use

```shell
docker network create sso

cp .env.example .env

make run
```

### OpenID Connect Configuration

```dotenv
OIDC_CLIENT_ID=client_id
OIDC_CLIENT_SECRET=secret
OIDC_SCOPES=openid,email,profile
OIDC_CERT_FILE=oidc_cert.pem
OIDC_TOKEN_ISSUER=https://auth-server.com/application/o/name/
OIDC_AUTHORIZE_URL=https://auth-server.com/application/o/authorize/
OIDC_ACCESS_TOKEN_URL=https://auth-server.com/application/o/token/
OIDC_RESOURCE_OWNER_DETAILS_URL=https://auth-server.com/application/o/userinfo/
OIDC_REDIRECT_PATH_AFTER_LOGIN=dashboard
OIDC_REDIRECT_URL_AFTER_LOGOUT=https://auth-server.com/application/o/name/end-session/
```

### Useful commands

```shell
make help
⚡ build                          Build docker image
⚡ composer-install               Composer install dependencies
⚡ destroy                        Alias docker-compose down command
⚡ logs                           Show service container logs
⚡ mysql-cli                      Connect mysql cli
⚡ npm-build                      Bundle assets for production within Symfony
⚡ npm-dev                        Bundle assets for development
⚡ npm-install-force              Install node packages with force option
⚡ npm-prod                       Bundle assets for production within Laravel
⚡ npm-watch                      Watcher assets for development
⚡ ps                             View services status
⚡ psql-cli                       Connect postgresql cli
⚡ redis-cli                      Connect redis cli
⚡ restart                        Restart service containers
⚡ root                           Enter bash in running Docker container as root user
⚡ run                            Run application in Docker. Run 'make build' first
⚡ shell                          Enter bash in running Docker container
⚡ stop                           Force stop service containers
```
