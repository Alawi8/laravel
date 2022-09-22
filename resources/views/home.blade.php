@extends('layouts.app')

@section('title', 'Store - Home')
@section('homePage', 'active')

@section('content')
    <div class="page-content page-home ">
        <br>
        <section class="store-carousel">
            <div class="container">
                <div class="row">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://www.state.gov/wp-content/uploads/2019/04/Saudi-Arabia-2560x1248.jpg"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.state.gov/wp-content/uploads/2019/04/Saudi-Arabia-2560x1248.jpg"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.state.gov/wp-content/uploads/2019/04/Saudi-Arabia-2560x1248.jpg"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <!------------------------------------------------------------------->
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        song Faded
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body text-center">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/hbiW0vj8oMQ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe><br>
                        <code>
                            <h4>
                                were the shadow to my light<br>
                                <div style="color:DodgerBlue;">
                                    لقد كنت الظل لضوئي<br>
                                </div>


                                did you feel us<br>
                                <div style="color:DodgerBlue;">
                                    هل شعرت بنا<br>
                                </div>

                                another star , you fade away<br>
                                <div style="color:DodgerBlue;">
                                    نجم اخر ، لقد تلاشيت<br>
                                </div>

                                afraid our aim is out of sight<br>
                                <div style="color:DodgerBlue;">
                                    اخشى ان يكون هدفنا بعيد عن الانظار<br>
                                </div>

                                wana see us alight<br>
                                <div style="color:DodgerBlue;">
                                    اريد رؤيتنا نجم نلمع<br>
                                </div>

                                where are you now<br>
                                <div style="color:DodgerBlue;">
                                    اين انت الان <br>
                                </div>

                                was it all in my fantasy <br>
                                <div style="color:DodgerBlue;">
                                    هل كان كل ذلك في خيالي<br>
                                </div>

                                were you only imaginary <br>
                                <div style="color:DodgerBlue;">
                                    هل كنت مجرد خيال<br>
                                </div>

                                atlantis <br>
                                <div style="color:DodgerBlue;">
                                    اتلانتس<br>
                                </div>

                                under the sea<br>
                                <div style="color:DodgerBlue;">
                                    تحت البحر <br>
                                </div>

                                the monster is runing wild inside of me<br>
                                <div style="color:DodgerBlue;">
                                    بداخلي الوحش يركض جامحا<br>
                                </div>

                                im faded<br>
                                <div style="color:DodgerBlue;">
                                    انا اتلاشى <br>
                                </div>

                                so lost , im faded<br>
                                <div style="color:DodgerBlue;">
                                    ضائع جدا ، انا اتلاشى<br>
                                </div>

                                these shallow waters never met what i needed<br>
                                <div style="color:DodgerBlue;">
                                    هذه المياه لم تحقق مااحتاجه ابدا<br>
                                </div>

                                im letting go , a deeper dive <br>
                                <div style="color:DodgerBlue;">
                                    انا سادعها تذهب ، غوص اعمق <br>
                                </div>

                                eternal silence of the sea <br>
                                <div style="color:DodgerBlue;">
                                    صمت البحر الابدي<br>
                                </div>

                                im breathing , alive <br>
                                <div style="color:DodgerBlue;">
                                    انا اتنفس ، على قيد الحياه<br>
                                </div>


                                under the bright but faded light <br>
                                <div style="color:DodgerBlue;">
                                    تحت البريق ، لكن الاضواء تتلاشى <br>
                                </div>


                                you set my heart on fire<br>
                                <div style="color:DodgerBlue;">
                                    لقد اشعلت النار في قلبي <br>
                                </div>
                            </h4>
                        </code>
                    </div>
                </div>
                <!------------------------------------------------------------------->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            alan walker Headlights
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body text-center">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/kyLuzKbgXAs"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe><br>

                            <code class="cls">
                                <h4>
                                    <pre>

Ohh, I’m gonna use every heartbeat
Ohh, today not tomorrow
Ohh, I’m diving in so deep
Ohh, far from the shallows

Baby I’m all about headlights
Blinded by, blinded by the headlights
Runnin in, runnin in the headlights
Light me up, light me up headlights
Baby I’m all about headlights

Baby I’m all about headlights
Hela, hela headlights
Hela, hela headlights
Hela, hela headlights

Ohh, I got a taste of the good life
Ohh, I’ll never let it go
A wild cat, gotta use all my 9 lives
Ohhh, I’m gonna do it all

And ohh, I’m tippin on the edge
And ohh, I don’t wanna be saved
And ohh, don’t you pull the breaks
Ohh, just take me all the way

Baby I’m all about headlights
Blinded by, blinded by the headlights
Runnin in, runnin in the headlights
Light me up, light me up headlights
Baby I’m all about headlights

Baby I’m all about headlights
Hela, hela headlights
Hela, hela headlights
Hela, hela headlights

Ohh, I got a taste of the good life
Ohh, I’ll never let it go
                                </pre>
                                </h4>
                            </code>
                        </div>
                    </div>
                </div>
                <!------------------------------------------------------------------->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        </div>
                    </div>
                </div>
                <!------------------------------------------------------------------->
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Accordion Item
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                This is the first item's accordion body.
                            </div>
                        </div>
                    </div>
                </div>
                <!------------------------------------------------------------------->
            </div>

        </div>
    @endsection
