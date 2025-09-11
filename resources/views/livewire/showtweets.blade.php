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
        {{ $tweet->user->name }} - {{ $tweet->content }} 
        @if ($tweet->likes->count())
            <a href="#" wire:click.prevent="unlike({{ $tweet->id }})">Dislike</a>
        @else
            <a href="#" wire:click.prevent="like({{ $tweet->id }})">Like</a>
        @endif
        <br>
    @endforeach

    <hr>
    <div><!-- Paginação -->
        {{ $tweets->links() }}
    </div>

</div>
