FROM node:18.14.0
COPY . /app

WORKDIR /app
COPY . /app

RUN npm install

EXPOSE 9000

CMD ["node", "demo.js"]