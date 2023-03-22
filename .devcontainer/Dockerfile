FROM node:14-buster

# Configure apt
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update \
    && apt-get -y install --no-install-recommends apt-utils 2>&1

# Verify git and process tools are installed
RUN apt-get install -y git procps

# Install python
RUN apt-get install -y wget build-essential libreadline-gplv2-dev libncursesw5-dev libssl-dev libsqlite3-dev tk-dev libgdbm-dev libc6-dev libbz2-dev libffi-dev zlib1g-dev && \
    cd /usr/src && \
    wget https://www.python.org/ftp/python/3.11.2/Python-3.11.2.tgz && \
    tar -xzf Python-3.11.2.tgz && \
    cd Python-3.11.2 && \
    ./configure --enable-optimizations && \
    make altinstall

# Install PHP
RUN wget https://www.php.net/distributions/php-7.4.9.tar.gz
RUN tar -zxf php-7.4.9.tar.gz
RUN ./php-7.4.9/configure --enable-fpm --with-mysqli
RUN make
RUN make install

# Create user Jackson
# RUN pip3 install 'xonsh[full]'
# RUN useradd jackson -m -d /home/jackson -s /usr/local/bin/xonsh
RUN useradd jackson -m -d /home/jackson -s /bin/bash
RUN useradd camden -m -d /home/camden -s /bin/bash
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
