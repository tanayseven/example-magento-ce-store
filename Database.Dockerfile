FROM mysql:5.7.21

ENV MYSQL_ROOT_PASSWORD root
ENV MYSQL_DATABASE magento

ADD . /


RUN apt-get update && apt-get install -y \
	make

RUN /etc/init.d/mysql start \
	mysql -u root -proot -e "CREATE DATABASE magento"  \
    && /etc/init.d/mysql start
