<form wire:submit.prevent="register">
    <div>
        <label for="name">name</label>
        <input wire:model="name" type="text" name="name" id="name">
    </div>
    <div>
        <label for="email">email</label>
        <input wire:model="email" type="text" name="email" id="email">
    </div>
    <div>
        <label for="password">password</label>
        <input wire:model="password" type="password" name="password" id="password">
    </div>
    <div>
        <label for="passwordConfirmation">passwordConfirmation</label>
        <input wire:model="password" type="password" name="passwordConfirmation" id="passwordConfirmation">
    </div>

    <button type="submit">Submit</button>
</form>
