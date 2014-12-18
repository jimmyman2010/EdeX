# Use gruntjs
npm install

# to generate css in js_composer
grunt less

# run default
grunt

# looking for files changed
grunt watch

# config the localhost
<VirtualHost *:80>
    DocumentRoot "E:/edex/source"
    ServerName edex.dev
</VirtualHost>
<VirtualHost *:80>
    DocumentRoot "E:/edex/source/wp-content/themes/edex"
    ServerName mockup.edex.dev
</VirtualHost>
