FROM node:16-alpine3.15

WORKDIR /app/frontend

# Cache and Install dependencies
COPY package.json .
RUN npm install
# Copy app files
COPY . .
# Expose port
EXPOSE 3000


ENTRYPOINT [ "npm","start" ]