<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
 </head>
 <body class="bg-gray-200">
 	<nav class="p-6 bg-white flex justify-between mb-6">
 		 <ul class="flex items-center">
 		 	<li>
 		 		<a href="{{Route('inicio')}}" class="p-3">Inicio</a>
 		 	</li>
 		 	<li>
 		 		<a href="{{Route('dashboardIndex')}}" class="p-3">Dashboard</a>
 		 	</li>
 		 	<li>
 		 		<a href="{{Route('postIndex')}}" class="p-3">Post</a>
 		 	</li>
 		 </ul>

 		 <ul class="flex items-center">
 		 	@auth()
 		 	  <li>
 		 		<a href="#" class="p-3">{{auth()->user()->name}}</a>
 		 	  </li>
 		 	  <li>
 		 		<a href="{{Route('logout')}}" class="p-3">Cerrar Sesion</a>
 		 	  </li>
            @else
              <li>
 		 		<a href="{{Route('login')}}" class="p-3">Iniciar Sesion</a>
 		 	</li>
 		 	<li>
 		 		<a href="{{Route('registroUsuario')}}" class="p-3">Registrate</a>
 		 	</li>
 		 	@endauth

 		 </ul>
 	</nav>
    @yield('contenido')
 </body>
 </html>