<h1>Kreiraj novu stranicu</h1>
<form action="store" method="POST">
    @csrf
    Ime stranice<input type="text" name="title"><br>
    Izaberi templet <select name="template" id="">
        <option value="/home">Templejt 1</option>
        <option value="/o_meni">Templejt 2</option>
        <option value="/proizvodi">Templejt 3</option>
        <option value="/komtakt">Templejt 4</option>
    </select><br>

    Pozicija u meniju <select name="position" id="">
        @for($i = 1; $i <= $page_count + 1; $i++)
            <option value="{{$i}}">{{$i}}</option>
        @endfor
    </select>
    <button type="submit">Sacuvaj</button>
</form>

