# Wordpress Example

This is an example of how to configure Wordpress for deployment on Docker container based platforms such as [Panubo](https://panubo.io).

By externalising the configuration you can get closer to [12 Factor App](http://12factor.net/) nirvana.

## Configuration

Configuration is done by passing environment variables to the running PHP application:

### Database

- `DB_NAME` - Database Name
- `DB_USER` - Database User
- `DB_PASS` - Database Password
- `DB_HOST` - Database Host

### Secret Keys & Salts

- `AUTH_KEY`
- `SECURE_AUTH_KEY`
- `LOGGED_IN_KEY`
- `NONCE_KEY`
- `AUTH_SALT`
- `SECURE_AUTH_SALT`
- `LOGGED_IN_SALT`
- `NONCE_SALT`

### Other

- `DEBUG` - Enable debugging mode