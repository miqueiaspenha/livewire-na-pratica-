<div>

    @if (session()->has('message'))
        <h3>{{ session('message') }}</h3>
    @endif

    <h3>Criar Registro</h3>
    <hr>

    <form action="" wire:submit.prevent='createExpense'>
        <p>
            <label>Descrição do Registro</label>
            <input type="text" name="description" class="shadow border-t" wire:model='description'>

            @error('description')
                {{ $message }}
            @enderror
        </p>

        <p>
            <label>Valor do Registro</label>
            <input type="text" name="amount" class="shadow border-t" wire:model='amount'>

            @error('amount')
                {{ $message }}
            @enderror
        </p>

        <p>
            <label>Tipo do Registro</label>
            <select name="type" class="shadow border-t" wire:model='type'>
                <option value="">Selecione o tipo do registro</option>
                <option value="1">Entrada</option>
                <option value="2">Saída</option>
            </select>

            @error('type')
                {{ $message }}
            @enderror
        </p>

        <button type="submit" class="shadow border-t">Criar Registro</button>
    </form>
</div>
