=== PCo Kint ===
Contributors: PeytzCo, Compute
Tags: debug, kint, krumo, print_r, var_dump
Requires at least: 3.5
Tested up to: 4.3
Stable tag: 1.0.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Kint debugger for WordPress - a powerful and modern PHP debugging tool.

== Description ==

PCo-Kint is a simple WordPress plugin wrapper for [kint](https://github.com/raveren/kint/), a pretty replacement for [var_dump()](http://php.net/manual/en/function.var-dump.php), [print_r()](http://php.net/manual/en/function.print-r.php]) and [debug_backtrace()](http://php.net/manual/en/function.debug-backtrace.php]). Kint is also a great replacement to Krumo!

Simply use the `d()` function to output your objects or arrays, or use `ddd()` if you want to terminate the current script.

A great alternative to `echo'<pre>';var_dump($var);die;`!

A full list of features can be found on the project page:

http://raveren.github.io/kint/

Contribute to [this project](https://github.com/Peytz-WordPress/pco-kint) on [github](https://github.com/Peytz-WordPress) or find [all of our favorite and custom made plugins](http://profiles.wordpress.org/peytzco/)

== Installation ==

1. Add the plugin by either downloading the folder and uploading it to the wp-content/plugins directory or install it from the Control Panel using Plugins->Add New.
1. Activate PCo Kint from the Plugins menu using Plugins->Installed Plugins.
1. Use `d( array() )` to ensure that the plugin is working.

== Screenshots ==

1. A simple output of `d( $_SERVER )`
2. Some variable content types have an alternative display - for example you will be able see JSON in its raw form - but also as an associative array
3. CLI is detected and formatted for automatically, the output is colored too

== Changelog ==

https://github.com/raveren/kint/releases
