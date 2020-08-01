FROM node:12
WORKDIR /var/www/client
COPY package*.json ./
RUN npm install
CMD [ "npm", "run","serve" ]
