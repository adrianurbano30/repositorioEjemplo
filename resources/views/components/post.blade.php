
@props(['post'=>$post])
    <div class="mb-4">
              <a href="{{Route('user.post',$post->user)}}" class="font-bold">{{$post->user->name}}</a><span class="text-gray-600 text-sm">{{$post->created_at->diffforhumans()}}</span>
              <p class="mb-2">{{$post->body}}</p>
             @auth()

                  @can('delete',$post)
                    <form  action="{{Route('post.destroy',$post)}}" method="post" class="mr-1">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-blue-500">Eliminar Post</button>
                    </form>
                  @endcan


             @endauth
              <div class="flex items-center">
                 @auth()
                  @if(!$post->likedBy(auth()->user()))
                   <form action="{{Route('postlikeStore',$post)}}" method="post" class="mr-1">
                        @csrf
                        <button type="submit" class="text-blue-500">me gusta</button>
                   </form>
                  @else
                   <form action="{{Route('postunlikeStore',$post)}}" method="post" class="mr-1">
                        @csrf
                        @method('delete')
                        <button type="submit" class="text-blue-500">no me gusta</button>
                   </form>
                  @endif

                  @endauth
                   <span>{{$post->likes->count()}} {{Str::plural('like',$post->likes->count())}}</span>
              </div>
             <hr class="pt-1 mb-2 mt-2">
             </div>
