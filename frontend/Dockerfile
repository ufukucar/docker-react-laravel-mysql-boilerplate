FROM node:16-alpine3.15 

WORKDIR /app/frontend

COPY package.json .
RUN npm install

COPY . .

EXPOSE 3000


ENTRYPOINT [ "npm","start" ]

