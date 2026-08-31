FROM nginx:latest

ENV C3=aula

RUN apt update -y && apt upgrade -y

RUN rm -f /etc/nginx/conf.d/default.conf

WORKDIR /app/

COPY src/index.html .

COPY nginx.conf /etc/nginx/nginx.conf

EXPOSE 8080

#CMD ["nginx", "-g", "daemon off;"]
CMD ["nginx"]
