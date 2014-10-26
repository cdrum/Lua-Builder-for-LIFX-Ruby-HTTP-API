Lua-Builder-for-LIFX-Ruby-HTTP-API
==================================

1. Get A Raspberry Pi (or other *nix computer that you're happy with keeping on all the time)

Ensure it has a static IP on your local network - otherwise if the IP keeps changing, this won't work too well. For mine, the IP is 192.168.1.221
Ruby v2.0 (Raspbian has an older version, so I had to follow these instructions to get 2.0 installed: (http://jam.im/blog/2013/03/03/installing-ruby-2-and-rvm-on-a-raspberry-pi/) (this took forever to finsih!!)

sudo aptitude update
sudo aptitude install git-core
curl -L https://get.rvm.io | bash -s stable --ruby
pi@raspberrypi ~ $ source /home/pi/.rvm/scripts/rvm
Make sure root can see the new file by changing the /bin/ruby binary to point to the new ruby that is placed somewhere obscure in your own folder. For me, it: /home/cdrum/.rvm/rubies/ruby-2.1.3/bin/ruby
sudo ln -s ruby /home/cdrum/.rvm/rubies/ruby-2.1.3/bin/ruby
The (unofficial) Ruby HTTP API for controlling LIFX bulbs: https://github.com/chendo/lifx-http (and follow those instructions on getting it installed), but the long and the short of it is:
rvmsudo gem install lifx-http
Note here i'm using rvmsudo - this was key to ensure that the gems are installed systemwide, and that root, during the installation, gets my new ruby 2.1.x environment (otherwise you'll get complaints that LIFX requires >= Ruby 2.0.
