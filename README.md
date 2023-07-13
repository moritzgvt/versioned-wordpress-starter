# Versioned Wordpress Theme

Versioned WOrdpress theme with Webpack build and Github Actions deploy pipeline to deploy to your hosting.

This is a low-fi boilerplate to start developing a wordpress theme with versioning and automated deployment. In the following you will find a description on how to setup and use it. Hope this makes your work a bit faster and cleaner :kissing_heart:

## Prerequisites

1. NodeJS 14 and NPM 9
2. Local Apache, MySQL, PHP Stack (eg. MAMP)
3. [Wordpress](https://de.wordpress.org/download/)
4. Hosting with SSH Access (Wordpress already installed)
5. Empty Github repository


## Usage

1. Fork this repository

2. Clone your fork to the theme folder of your local wordpress installation
``` sh
cd your-wp-root-folder/wp-content/themes
git clone git@github.com:moritzgvt/versioned-wordpress-starter.git
```

2. Install dependencies 
``` sh
npm install
```

3. Start development build process
``` sh
npm run start
```

4. Make changes and commit them


## Deployment

1. Create an empty theme folder inside the themes folder on your hosting (eg. `my-theme`)

2. Add the deployment secrets to your repository

**REMOTE_PRIVATE_KEY**

- Generate a new ssh key pair. 
- Place the public key on your hosting side (eg. in `~/.ssh/authorized_keys`).
- Use the private key for the Github repository secret.

> **Warning**: 
> The key has to be an RSA Private Key: It begins with `-----BEGIN RSA PRIVATE KEY-----`
> Use this command for creation on unix systems `ssh-keygen -m PEM -t rsa -b 4096 -C "your_email@example.com"`

**REMOTE_HOST**

The host you're connecting to via SSH.

**REMOTE_USER**

The SSH User you're given by your hosting provider.

**REMOTE_PORT**

Normally `22`.

**REMOTE_TARGET**

The path to your wp theme folder, normally something like this:
`html/worpdress/wp-content/themes/my-theme`


3. Go to your Github repository and trigger the deployment in the `Actions` tab.

4. If the deployment was successful log in to your Wordpress instance and activate the theme.

> **Note**: 
> If links are not working go to `Settings > Permalinks` and save your desired settings.