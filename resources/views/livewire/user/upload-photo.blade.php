<div>

    <h1>Atualizar Foto de Perfil</h1>

    <form action="#" method="post" wire:submit.prevent="storagePhoto">
        <input type="file" wire:model="photo">
        <br>
        @error('photo')
            <span style="color: red">{{ $message }}</span>
        @enderror
        <br>
        <button type="submit">Upload Foto</button>
    </form>
</div>
