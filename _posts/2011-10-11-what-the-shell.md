---
layout: post
title: What the Shell!?
published: false
---

The following are scenarios that Unix command line tools can solve.

## grep

Say you are developing a computer game, but you don’t know what to work on? Use grep.

{% highlight bash %}
duc@com:~/gam/src$ grep -r 'TODO' ./<code>
{% endhighlight %}

The argument -r tells grep to recursively search through sub directories. 'TODO' is the string grep searches. And ./ says to search the current directory src. In all, this command tells grep to search the current directory and all its sub directory for files containing the string TODO.

example output:

{% highlight bash %}
./Render.java: //TODO Add tiles
./Menu.java: //TODO more buttons
./View.java: //TODO add util align
{% endhighlight %}

## ps

Have a program/process that you cannot kill by using the GUI (ie clicking ‘close’ with mouse)? Pipe ps‘s plaintext output to grep. Give the name of the process as a string argument. In the following example, I pass 'stupid process'.

{% highlight bash %}
duc@com:~$ ps aux | grep 'stupid process'
{% endhighlight %}

example output:

{% highlight bash %}
duc 15241 [...] stupid process
{% endhighlight %}

## kill

Then use the PID in the second column..

{% highlight bash %}
duc@computer:~$ kill -9 15241
{% endhighlight %}

where -9 is SIGKILL
