<form wire:submit.prevent="register">
    <div>
        <label for="name">name</label>
        <input wire:model="name" type="text" name="name" id="name">
        @error('name') <small> {{ $message }} </small> @enderror
    </div>
    <div>
        <label for="email">email</label>
        <input wire:model="email" type="text" name="email" id="email">
        @error('email') <small> {{ $message }} </small> @enderror
    </div>
    <div>
        <label for="password">password</label>
        <input wire:model="password" type="password" name="password" id="password">
        @error('password') <small> {{ $message }} </small> @enderror
    </div>
    <div>
        <label for="passwordConfirmation">passwordConfirmation</label>
        <input wire:model="passwordConfirmation" type="password" name="passwordConfirmation" id="passwordConfirmation">
        @error('passwordConfirmation') <small> {{ $message }} </small> @enderror
    </div>

    <button type="submit">Submit</button>
</form>
