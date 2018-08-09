@extends('layouts.frontend-layout')

@section('content')
    <main id="about">
        <h1 class="lg-heading">
            About <span class="text-secondary">Me</span>
        </h1>

        <h2 class="sm-heading">
            Let me tell you a few things...
        </h2>

        <div class="about-info">
            <img src="img/portrait.jpg" alt="John Doe" class="bio-image">

            <div class="bio">
                <h3 class="text-secondary">BIO</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus at in veniam inventore earum, cupiditate maxime, molestias pariatur totam dolore non minima ut suscipit et aperiam consequatur eveniet, magnam exercitationem!</p>
            </div>

            <div class="job job-1">
                <h3>123 Webshop</h3>
                <h6>Full Stack Dev.</h6>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo asperiores voluptatibus nemo voluptates atque quibusdam rem ullam soluta nihil consequatur.</p>
            </div>

            <div class="job job-2">
                <h3>Designer ABC</h3>
                <h6>Full Stack Dev.</h6>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo asperiores voluptatibus nemo voluptates atque quibusdam rem ullam soluta nihil consequatur.</p>
            </div>

            <div class="job job-3">
                <h3>Webworks</h3>
                <h6>Full Stack Dev.</h6>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo asperiores voluptatibus nemo voluptates atque quibusdam rem ullam soluta nihil consequatur.</p>
            </div>
        </div>
    </main>
@stop