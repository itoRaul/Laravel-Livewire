<div>
    Show Tweets

    <p>{{ $content }}</p>

    
    <!-- Ligando uma propriedade do controller com a view -->
    <!--<input type="text" name="content" id="content" wire model="content"> wire:model é usado para ligar a propriedade do controller com o input da view -->
    <!-- ele faz uma requisição ajax toda vez que o valor do input mudar -->

    <form action="" method="post" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model="content">
        @error('content')
            <span style="color: red">{{ $message }}</span>
        @enderror

        <button type="submit">Criar Tweet</button>
    </form>

    <hr>

    @foreach ($tweets as $tweet)

        <div class="flex">
            <div class="w-2/8">
                @if ($tweet->user->photo)
                    <img src="{{ url("storage/{$tweet->user->photo}") }}" alt="{{ $tweet->user->name }}" class="rounded-full h-8 w-8">
                @else
                    <img src="{{ url('imgs/no-image.png') }}" alt="{{ $tweet->user->name }}" class="rounded-full h-8 w-8">
                @endif
                {{ $tweet->user->name }}
            </div>

            <div class="w-6/8">
                {{ $tweet->content }}
                @if ($tweet->likes->count())
                    <a href="#" wire:click.prevent="unlike({{ $tweet->id }})">Dislike</a>
                @else
                    <a href="#" wire:click.prevent="like({{ $tweet->id }})">Like</a>
                @endif
            </div>
        </div>

        <br>
    @endforeach

    <hr>
    <div><!-- Paginação -->
        {{ $tweets->links() }}
    </div>

</div>
