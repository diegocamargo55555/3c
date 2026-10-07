FROM node:22-alpine AS build

WORKDIR /app

COPY dist/ /usr/local/apache2/htdocs/

COPY package.json package-lock.json .//
RUN npm ci

COPY . .
RUN npm run build

FROM httpd:alpine

COPY --from=build /app/dist/ /usr/local/apache2/htdocs/
