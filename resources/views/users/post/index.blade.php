@extends('plantillas.app')
@section('contenido')
 <div class="flex justify-center">
     <div class="w-8/12">

  		 <div class="p-6">
 			<h1 class="text-2xl font-medium mb-1">{{$user->name}}</h1>
 			<p>Posteados {{$post->count()}} {{Str::plural('posteado',$post->count())}} y recibió {{$user->likesrecibidos->count()}} me gusta</p>
  		 </div>

         <div class="bg-white p-6 rounded-lg">
           @forelse($post as $postt)
                <x-post :postt="$postt"/>
               @empty
               <p>{{$user->name }} no tiene post</p>
           @endforelse
              {{$post->links()}}
         </div>
     </div>
 </div>
@endsection