FROM nginx:1.19

ARG UID
EXPOSE $UID

#agregamos un user appuser
RUN adduser -u 1000 --disabled-password --gecos "" appuser

COPY default.conf /etc/nginx/conf.d/
