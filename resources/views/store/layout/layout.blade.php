<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title","Home")</title>
    
    @section("css")
        @include("store.layout.css")
    @show
    
  </head>
  <body>
    
    @section("header")
        @include("store.layout.header")
    @show
    
    @section("navbar")
        @include("store.layout.navbar")
    @show
    

    @yield("main-content")
    
    
    @section("footer")
        @include("store.layout.footer")
    @show
    
    
    @section("js")
        @include("store.layout.js")
    @show

  </body>
</html>