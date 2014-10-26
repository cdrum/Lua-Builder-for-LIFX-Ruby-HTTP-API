Lua-Builder-for-LIFX-Ruby-HTTP-API
==================================

This is a Lua script generator for managing LIFX bulbs via Vera Scenes, making use of the unofficial LIFX Ruby HTTP API, https://github.com/chendo/lifx-http


1. Get A Raspberry Pi (or other *nix computer that you're happy with keeping on all the time)
2. Ensure it has a static IP on your local network - otherwise if the IP keeps changing, this won't work too well. For mine, the IP is 192.168.1.221
3. Ruby v2.0 (Raspbian has an older version, so I had to follow these instructions to get 2.0 installed: (http://jam.im/blog/2013/03/03/installing-ruby-2-and-rvm-on-a-raspberry-pi/) (this took forever to finsih!!)
4. Make sure root can see the new file by changing the /bin/ruby binary to point to the new ruby that is placed somewhere obscure in your own folder. For me, it: /home/cdrum/.rvm/rubies/ruby-2.1.3/bin/ruby
5. The (unofficial) Ruby HTTP API for controlling LIFX bulbs: https://github.com/chendo/lifx-http (and follow those instructions on getting it installed).

Then all you do is run this command an copy and paste the output in the Luup Lua scene settings. 

See this blog post for some details on installing the above: http://www.cdrum.com/2014/10/connecting-lifx-bulbs-with-vera-z-wave.html