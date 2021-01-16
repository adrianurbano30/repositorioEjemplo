@extends('plantillas.app')
@section('contenido')
 <div class="flex justify-center">
     <div class="w-4/12 bg-white p-6 rounded-lg">
         @if(session('status'))
               <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                  {{session('status')}}
               </div>
         @endif
         <form action="{{Route('loginstore')}}" method="post">
         	@csrf
            login

            <!--EMAIL-->
            <div class="mb-4">
            	<label for="email" class="sr-only">Email</label>
            	<input type="email"
            	       name="email"
            	       id="email"
            	       placeholder="correo electrónico"
            	       class="bg-gray-100
            	       		  border-2
            	       		  w-full
                              @error('email')
                              border-red-500
            	       		  @enderror
            	       		  p-4
            	       		  rounded-lg"
            	       value=""
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
            	       placeholder="contraseña"
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

                  </div>
                @enderror
            </div>

            <!--checkbox-->
             <div class="mb-4">
                 <div class="flex items-center">
                     <input type="checkbox" name="remember" id="remember" class="mr-2">
                     <label for="remember">guardar sesion</label>
                 </div>
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
                  INICIAR SESIÓN
               </button>
            </div>

         </form>

     </div>
 </div>
@endsection