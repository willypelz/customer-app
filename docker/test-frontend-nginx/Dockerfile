# Create the container from the alpine linux image
FROM alpine:latest AS prod

ENV APP_ENV=prod

# Add nginx and nodejs
RUN apk add --update nginx nodejs npm

# Create the directories we will need
# RUN mkdir -p /tmp/nginx/test
# RUN mkdir -p /var/log/nginx
# RUN mkdir -p /var/www/html

# Copy the respective nginx configuration files
COPY ./docker/test-frontend-nginx/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/test-frontend-nginx/default.conf /etc/nginx/conf.d/default.conf

# install @vue/cli globally
RUN npm install -g @vue/cli && npm install -g @vue/cli-service-global && npm install -g @vue/cli-service && npm install -g @vue/cli-plugin-babel

# make all files belong to the nginx users
# RUN chown nginx:nginx /var/www/html

# Set an environment variable for the application (this enables the development mode of vue)

WORKDIR /var/www/html

# copy both 'package.json' and 'package-lock.json' (if available)

COPY ./www/test-frontend/package*.json ./

# copy project files and folders to the current working directory (i.e. 'app' folder)
COPY ./www/test-frontend ./

# install project dependencies leaving out dev dependencies
RUN npm install

RUN npm rebuild node-sass

# start nginx and keep the process from backgrounding and the container from quitting
CMD ["nginx", "-g", "daemon off;"]
