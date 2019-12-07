<section class="page-section about-heading">
    <span>
    <p style="color: #000;">Izaberi sliku za pozadinu:</p>
    <input type="file" name="background" id="background">
    </span>
    <div class="container">
        <p style="color: #000;">Izaberi sliku:</p>
        <input type="file" name="image" id="image">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('img/intro.jpg')}}" alt="">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">
                                <input type="text" name="section1_pre_title" placeholder="Pred naslov"
                                       value="{{$page->section1_pre_title ?? ''}}"></span>
                            <span class="section-heading-lower">
                                                        <input type="text" name="section1_title" placeholder="Naslov"
                                                               value="{{$page->section1_title ?? ''}}"></span>
                        </h2>
                        <textarea type="text" name="section1_text" placeholder="Tekst">{{$page->section1_text ?? ''}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

