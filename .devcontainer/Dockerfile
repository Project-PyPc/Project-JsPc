FROM node:14-buster

# Configure apt
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update \
    && apt-get -y install --no-install-recommends apt-utils 2>&1

# Verify git and process tools are installed
RUN apt-get install -y git procps

# Install python
RUN apt-get install -y python3.10 python3.10-pip python3.10-tk

# Install PHP
RUN wget https://www.php.net/distributions/php-7.4.9.tar.gz
RUN tar -zxf php-7.4.9.tar.gz
RUN ./php-7.4.9/configure --enable-fpm --with-mysqli
RUN make
RUN make install

# Create user Jackson
RUN useradd jackson -m -d /home/jackson -s /bin/bash
RUN usermod -aG sudo jackson

# Install yarn
RUN apt-get install -y curl apt-transport-https lsb-release \
    && curl -sS https://dl.yarnpkg.com/$(lsb_release -is | tr '[:upper:]' '[:lower:]')/pubkey.gpg | apt-key add - 2>/dev/null \
    && echo "deb https://dl.yarnpkg.com/$(lsb_release -is | tr '[:upper:]' '[:lower:]')/ stable main" | tee /etc/apt/sources.list.d/yarn.list \
    && apt-get update \
    && apt-get -y install --no-install-recommends \
       yarn

# Clean up
RUN apt-get autoremove -y \
    && apt-get clean -y \
    && rm -rf /var/lib/apt/lists/*
ENV DEBIAN_FRONTEND=dialog
