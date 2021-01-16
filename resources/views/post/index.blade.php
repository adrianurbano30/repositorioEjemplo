@extends('plantillas.app')
@section('contenido')
 <div class="flex justify-center">
     <div class="w-8/12 bg-white p-6 rounded-lg">

        @auth()
     	<form action="{{Route('postStore')}}" method="post" class="mb-4">
     		@csrf
     		<div class="mb-4">
     			<label for="body" class="sr-only">Body</label>
     			<textarea name="body"
     					  id="body"
     					  cols="30"
     					  rows="4"
						  class="bg-gray-100
								 border-2
								 w-full
								 p-4
								 rounded-lg
								 @error('body')
								 border-red-500
								 @enderror"
     					  placeholder="POSTEA ALGO!!"
     					  ></textarea>
     			@error('body')
     			 {{$message}}
     			@enderror
     		</div>
     		<div>
     			<button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">
     			  POSTEA
     			</button>
     		</div>
     	</form>
       @endauth
          @forelse($post as $postt)
            <x-post :post="$postt"/>
           @empty
           <p>no hay ni m q mostrar</p>
          @endforelse
         {{$post->links()}}
     </div>
 </div>
@endsection