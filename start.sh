su -c "pip3.11 install 'xonsh[full]'" jackson
su -c "pip3.11 install xontrib-powerline2" jackson
pip3.11 install 'xonsh[full]'
pip3.11 install xontrib-powerline2
which xonsh >> /etc/shells
chsh -s /usr/local/bin/xonsh jackson
chmod +x .xonshrc
rm /home/jackson/.xonshrc
rm /home/jackson/install_xonsh.xsh
cp .xonshrc /home/jackson/
cp install_xonsh.xsh /home/jackson
cd ./demo/ && php -S 127.0.0.1:3001&
yarn start
