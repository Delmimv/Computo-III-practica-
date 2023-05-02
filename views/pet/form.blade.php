    Nombre:
    <input type="text" name="name" id="name" value="{{ isset($pet)?$pet->name:'' }}" /><br />
    Edad:
    <input type="number" name="age" id="age" value="{{ isset($pet)?$pet->age:'' }}" /><br />
    Peso (KG)
    <input type="text" name="weight_kg" id="weight_kg"><br />

    <!--mostrar propietarios-->
    <select name="owner_id">
    <option value=""></option>
    @foreach($owners as $own)
    <option value="{{$own->id}}" {{ $pet->owner_id == $own->id ? 'selected' : ''}}>
        {{$own->full_name}}
</option>
@endforeach<
</select>

    <button type="submit">Guardar</button>