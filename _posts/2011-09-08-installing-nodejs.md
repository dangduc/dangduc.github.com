---
layout: post
title: Installing Node.js
---

I thought of playing around with Node.js. Node is a server implemented in C, that executes Javascript using Google’s V8 engine. Node handles many requests using only one thread, while popular servers like Apache allocate a thread for each request. Node is thought to be easy to scale, because so little resource is allocated for each request.

## The Node Approach

Node makes the assumption that IO takes the largest slice of request processing time. IO requests are performed asynchronously from the Node thread. The mechanic is similar to how AJAX is done. In Javascript, we pass a function to XMLHttpRequest that is called when data is returned to the browser. In the meantime, the browser will continue to execute Javascript. Similarly in Node, when IO is performed we pass a callback function which is executed when that IO returns data. Node continues to process other requests while waiting for IO to finish.

## Installing Node

After a lot of fumbling, I managed to install node.js + npm. If you are new and simply want to get it up and running, DO NOT use the git sources. The latest sources are unstable. Also, I found out some important node modules are unsupported on the latest node.js, such as express.

I am running Ubuntu 11.04 (Natty).

Node.js and npm requires some other sofware.

{% highlight bash %}
sudo apt-get install git-core curl python openssl
{% endhighlight %}

I downloaded the stable tar from nodejs.org and extracted it to a directory. Then I broke out terminal and cd into the extracted node.js folder where the makefile resides.

{% highlight bash %}
# run configure script and tell it where
# node's binaries and libraries will reside.
./configure --prefix=$HOME/node
make
make install
make test #run node.js tests
# add the binary path of node.js and add the
# modules path to $HOME/.profile
# .profile specifies environment variables
cd $HOME
echo 'export PATH=$HOME/node/bin:$PATH' >> ~/.profile
echo 'export NODE_PATH=$HOME/node:$HOME/node/lib/node_modules' >> ~/.profile    
source ~/.profile # reload the environment variables
# should output something like $HOME/node/bin/node
which node
{% endhighlight %}

At this point, I install node package manager. After cd'ing into the directory containing the node-v0.4.11 folder, I did

{% highlight bash %}
curl http://npmjs.org/install.sh | sh
{% endhighlight %}

I tested npm by installing express

{% highlight bash %}
npm install express
{% endhighlight %}

Finally, I ran the example Javascript Hello World snippet from nodejs.org

{% highlight bash %}
var http = require('http');
http.createServer(function (req, res) {
res.writeHead(200, {'Content-Type': 'text/plain'});
res.end('Hello World\n');
}).listen(1337, "127.0.0.1");
console.log('Server running at http://127.0.0.1:1337/');
{% endhighlight %}

To test if node works, I pointed my browser to http://127.0.0.1:1337/ and got the reply:

{% highlight bash %}
Hello World
{% endhighlight %}

Done!

