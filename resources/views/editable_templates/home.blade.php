<span>
    <p>Izaberi sliku za pozadinu:</p>
    <input type="file" name="background" id="background" class="btn btn-dark">
</span>
<span class="site-heading text-center d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">
        <input type="text" placeholder="Prva linija naslova" name="pre_title" value="{{$page->pre_title ?? ''}}"
               class="text col-sm-4" id="pre_title" title="Izmeni prvu liniju naslova">
        <select id='select' onChange="fontChange();" class="col-sm-3" title="Promeni font"></select>
        <input type="number" id="size" min="0" max="70" value="30" onchange="updateSize()" class="col-sm-2"
               title="Promeni veličinu"/>
        <input type="color" onchange="updateColor()" id="color" class="col-sm-1" title="Promeni boju"/>
    </span>
    <span class="site-heading-upper text-primary">
        <input type="text" placeholder="Druga linija naslova" name="title" value="{{$page->title ?? ''}}"
               class="title col-sm-4" id="title" title="Izmeni drugu liniju naslova">
        <select id='select_for_title' onChange="fontTitleChange();" class="col-sm-3" title="Promeni font"></select>
        <input type="number" id="title_size" min="0" max="70" value="30" onchange="updateSize()" class="col-sm-2"
               title="Promeni veličinu"/>
        <input type="color" onchange="updateColor()" id="title_color" class="col-sm-1" title="Promeni boju"/>
    </span>
</span>

<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <p>Izaberi sliku:</p>
            <input type="file" name="image" id="image" class="btn btn-dark">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{asset($page->image ?? 'img/about.jpg')}}"
                 alt="">
            <div class="intro-text text-center bg-faded rounded">
                <span class="section-heading mb-5">
                    <span class="">
                        <input type="text" name="section1_pre_title" placeholder="Prva linija naslova"
                               value="{{$page->section1_pre_title ?? ''}}" id="section1_pre_title"
                               class="section1_pre_title col-sm-4">
                        <select id='select_section1_pre_title' onChange="fontSection1PreTitleChange();"
                                class="col-sm-4"></select>
                        <input type="number" id="section1_pre_title_size" min="0" max="70" value="15"
                               onchange="updateSize()" class="col-sm-2"/>
                        <input type="color" onchange="updateColor()" id="section1_pre_title_color" class="col-sm-2"/>
                    </span><br>
                    <hr>
                    <span class="">
                        <input type="text" name="section1_title" placeholder="Druga linija naslova"
                               value="{{$page->section1_title ?? ''}}" id="section1_title"
                               class="section1_title col-sm-4">
                        <select id='select_section1_title' onChange="fontSection1TitleChange();"
                                class="col-sm-4"></select><br>
                        <input type="number" id="section1_title_size" min="0" max="70" value="15"
                               onchange="updateSize()" class="col-sm-2"/>
                        <input type="color" onchange="updateColor()" id="section1_title_color" class="col-sm-2"/>
                    </span>
                </span><br>
                <hr>
                <textarea type="text" name="section1_text" placeholder="Tekst sekcije" cols="30" rows="10"
                          id="section1_text" class="section1_text col-sm-4">
                    {{$page->section1_text ?? ''}}</textarea>
                <select id='select_section1_text' onChange="fontSection1TitleChange();" class="col-sm-4"></select><br>
                <input type="number" id="section1_text" min="0" max="70" value="15" onchange="updateSize()"
                       class="col-sm-2"/>
                <input type="color" onchange="updateColor()" id="section1_text_color" class="col-sm-2"/>
            </div>
        </div>
    </div>
</section>

<section class="page-section cta">
    <div class="container">
        <span class="text-info">Izaberi boju sekcije</span><input name="section2_color_1" type="color"
                                                                  value="{{--{{$page->section2_color1}}--}}">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="text-center rounded"
                     style="position: relative; padding: 3rem;margin: 0.5rem; background-color: rgba(255, 255, 255, 0.85);">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">
                            <input type="text" name="section2_pre_title" placeholder="Prednaslov"
                                   value="{{$page->section2_pre_title ?? ''}}">
                        </span>
                        <span class="section-heading-lower">
                            <input type="text" name="section2_title" placeholder="Naslov"
                                   value="{{$page->section2_title ?? ''}}">
                        </span>
                    </h2>
                    <textarea name="section2_text" id="" cols="30" rows="10">{{$page->section2_text ?? ''}}</textarea>
                    <span class="text-info">Izaberi boju sekcije</span><input name="section2_color_2" type="color">
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer text-faded text-center py-5">
    {{--<span class="text-info">Izaberi boju sekcije</span><input name="footer_color" type="color"/>--}}

    <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2019</p>
    </div>
</footer>

{{--<style>
    body {
        font-family: Lora;
        background-image: linear-gradient(rgba(47, 23, 15, .65), rgba(47, 23, 15, .65));
    }
</style>--}}


