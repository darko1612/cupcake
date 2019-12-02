
<span>
    <p style="color: #000;">Izaberi sliku za pozadinu:</p>
    <input type="file" name="background" id="background">
    </span>
<h1 class="site-heading text-center text-white d-none d-lg-block">

    <span class="site-heading-upper text-primary mb-3">
        <input type="text" placeholder="Manji naslov" name="pre_title"><br>
<select id="selecth1FontFamily" name="pre_title_font" onchange="updateh1family();">
    <option> Serif </option>
    <option> Arial </option>
    <option> Sans-Serif </option>
    <option> Tahoma </option>
    <option> Verdana </option>
    <option> Lucida Sans Unicode </option>
</select>
<input type="number" id="size" min="0" max="70" value="30" onchange="updateSize()" />
<input type="color" onchange="updateColor()" id="color" />
    </span>

    <span class="site-heading-lower text-primary">
        <input type="text" placeholder="Veci naslov" name="title"><br>
    </span>
</h1>
@include('editable_templates.navbar')
<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <p style="color: #000;">Izaberi sliku:</p>
            <input type="file" name="image" id="image">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{asset('img/intro.jpg')}}" alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">
                        <input type="text" name="section1_pre_title" placeholder="Pred naslov">
                    </span>
                    <span class="section-heading-lower">
                        <input type="text" name="section1_title" placeholder="Naslov">
                    </span>
                </h2>
                <textarea type="text" name="section1_text" placeholder="Tekst"></textarea>

                {{-- <div class="intro-button mx-auto">
                     <a class="btn btn-primary btn-xl" href="#">Visit Us Today!</a>
                 </div>--}}
            </div>
        </div>
    </div>
</section>

<section class="page-section cta">
    <div class="container">
        <span class="text-info">Izaberi boju sekcije</span><input name="section1_color" type="color"/>
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="text-center rounded" style="position: relative; padding: 3rem;margin: 0.5rem; background-color: rgba(255, 255, 255, 0.85);">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">
                            <input type="text" name="section2_pre_title" placeholder="Prednaslov">
                        </span>
                        <span class="section-heading-lower">
                            <input type="text" name="section2_title" placeholder="Naslov">
                        </span>
                    </h2>
                    <textarea name="section2_text" id="" cols="30" rows="10">Polje za tekst</textarea>
                    <span class="text-info">Izaberi boju sekcije</span><input name="section2_color_2" type="color"/>
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

<style>
    body {
        font-family: Lora;
        background-image: linear-gradient(rgba(47, 23, 15, .65), rgba(47, 23, 15, .65));
    }
</style>



