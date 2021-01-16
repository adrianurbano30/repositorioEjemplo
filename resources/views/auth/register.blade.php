@extends('plantillas.app')
@section('contenido')
 <div class="flex justify-center">
     <div class="w-4/12 bg-white p-6 rounded-lg">

         <form action="{{Route('registroStore')}}" method="post">
         	@csrf

         	Registro Usuario
           <!--NOMBRE-->
            <div class="mb-4">
            	<label for="name" class="sr-only">Nombre</label>
            	<input type="text"
            	       name="name"
            	       id="name"
            	       placeholder="ingresa tu nombre"
            	       class="bg-gray-100
            	       		  border-2
            	       		  w-full
            	       		  @error('name')
                              border-red-500
            	       		  @enderror
            	       		  p-4
            	       		  rounded-lg"
            	       value="{{old('name')}}"
            	>
                @error('name')
                  <div class="text-red-500 mt-2 text-sm">
                  	  {{ $message }}
                  </div>
                @enderror
            </div>

            <!--NOMBRE DE USUARIO-->

            <div class="mb-4">
            	<label for="username" class="sr-only">Nombre de Usuario</label>
            	<input type="text"
            	       name="username"
            	       id="username"
            	       placeholder="ingresa tu nombre de usuario"
            	       class="bg-gray-100
            	       		  border-2
            	       		  w-full
            	       		  p-4
            	       		  @error('username')
                              border-red-500
            	       		  @enderror
            	       		  rounded-lg"
            	       value="{{old('username')}}"
            	>
            	@error('username')
                  <div class="text-red-500 mt-2 text-sm">
                  	  {{ $message }}
                  </div>
                @enderror
            </div>

            <!--EMAIL-->
            <div class="mb-4">
            	<label for="email" class="sr-only">Email</label>
            	<input type="email"
            	       name="email"
            	       id="email"
            	       placeholder="ingresa tu correo electrónico"
            	       class="bg-gray-100
            	       		  border-2
            	       		  w-full
                              @error('email')
                              border-red-500
            	       		  @enderror
            	       		  p-4
            	       		  rounded-lg"
            	       value="{{old('email')}}"
            	>
            	@error('email')
                  <div class="text-red-500 mt-2 text-sm">
                  	  {{ $message }}
                  </div>
                @enderror
            </div>
            <!--PASSWORD-->
            <div class="mb-4">
            	<label for="password" class="sr-only">Contraseña</label>
            	<input type="password"
            	       name="password"
            	       id="password"
            	       placeholder="ingresa una contraseña"
            	       class="bg-gray-100
            	       		  border-2
            	       		  @error('password')
                              border-red-500
            	       		  @enderror
            	       		  w-full
            	       		  p-4
            	       		  rounded-lg"
            	       value=""
            	>
            	@error('password')
                  <div class="text-red-500 mt-2 text-sm">
                  	  {{ $message }}
                  </div>
                @enderror
            </div>

            <!--REPITE PASSWORD-->
            <div class="mb-4">
            	<label for="password_confirmation" class="sr-only">Repite la Contraseña</label>
            	<input type="password"
            	       name="password_confirmation"
            	       id="password_confirmation"
            	       placeholder="Repite la contraseña"
            	       class="bg-gray-100
            	       		  border-2
            	       		  w-full
            	       		  p-4
            	       		  rounded-lg"
            	       value=""
            	>
            </div>

            <!--Button-->
            <div>
               <button type="submit"
               		   class="bg-blue-500
               		          text-white
               		          px-4
               		          py-3
               		          rounded
               		          font-medium
               		          w-full"
                >
                  Registrate
               </button>
            </div>

         </form>

     </div>
 </div>
@endsection