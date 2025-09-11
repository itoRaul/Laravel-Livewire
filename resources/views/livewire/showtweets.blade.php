<div>
    Show Tweets

    <p>{{ $message }}</p>

    <!-- Ligando uma propriedade do controller com a view -->
    <input type="text" name="message" wire:model="message"><!-- wire:model é usado para ligar a propriedade do controller com o input da view -->
    <!-- ele faz uma requisição ajax toda vez que o valor do input mudar -->
    

    <hr>

    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }} <br>
    @endforeach


</div>
