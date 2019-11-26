@csrf
<div class="form-group mb-2">
    <label for="title" class="mr-sm-2">Ime stranice</label>
    <input class="form-control form-control-sm mr-sm-2" type="text" name="page_title" id="title"
           value="{{$page->title ?? ''}}" autocomplete="off">
</div>
<div class="form-group mb-2">
    <label for="template" class="mr-sm-2">Izaberi templejt</label>
    <select class="form-control form-control-sm mr-sm-2" name="template" id="template">
        @foreach($options as $option)
            @isset($page)
                @if($page->template == $option['value'])
                    <option value="{{$option['value']}}" selected>{{$option['title']}}</option>
                @endif
            @endisset
            <option value="{{$option['value']}}">{{$option['title']}}</option>
        @endforeach
    </select>
</div>
<div class="form-group mb-2">
    <label for="position" class="mr-sm-2">Pozicija u meniju</label>
    <select class="form-control form-control-sm mr-sm-2" name="position" id="">
        @for($i = 1; $i <= $page_count + 1; $i++)
            @isset($page)
                @if($i == $page->position)
                    <option value="{{$i}}" selected>{{$i}}</option>
                @endif
            @endisset
            <option value="{{$i}}">{{$i}}</option>
        @endfor
    </select>
</div>

