<x-layout>

    <!-- Page Header Start -->
    <x-page-header title="Gallery" />
    <!-- Page Header End -->

    <!-- Fact Start -->
   <x-facts />
    <!-- Fact End -->


     <!-- Gallery Start -->
     <div class="container-fluid project py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                {{-- <h5 class="text-primary">Our Gallery</h5> --}}
                <h1>Highlights from different locations</h1>
            </div>
            <div class="row g-5">
                <x-gallery-item imglink='assets/img/gallery/gallery-4.webp'  descbody='Showcasing ATMS services at Diamond Jubilee exhibition.'/>
                <x-gallery-item imglink='assets/img/gallery/gallery-10.webp'  descbody='A Visit by WIALON Business Expert.'/>

                <x-gallery-item imglink='assets/img/gallery/gallery-1.webp'  descbody='AES showcasing their surveying tools.'/>
                <x-gallery-item imglink='assets/img/gallery/gallery-12.webp'  descbody='ATMS experts at Telematics Workshop Tanzania organized by partners and friends from Teltonika.'/>
                <x-gallery-item imglink='assets/img/gallery/gallery-11.webp'  descbody='WIALON experts sharing top tips on fuel and fleet management.'/>

                <x-gallery-item imglink='assets/img/gallery/gallery-13.webp'  descbody='HAIKA LYIMO, ATMS business development manager at Telematics Workshop event organized by WIALON friends and partners from Teltonika '/>
                <x-gallery-item imglink='assets/img/gallery/gallery-8.webp'  descbody='Insight exchange between ATMS techncal experts and other technical experts.'/>
                <x-gallery-item imglink='assets/img/gallery/gallery-9.webp'  descbody=''/>


                <x-gallery-item imglink='assets/img/gallery/gallery-2.webp'  descbody='ATMS work outfits.'/>
                <x-gallery-item imglink='assets/img/gallery/gallery-5.webp'  descbody='ATMS exhibition set up (2023).'/>
                <x-gallery-item imglink='assets/img/gallery/gallery-6.webp'  descbody='ATMS GPS Technical Expert at GOPA.'/>
                <x-gallery-item imglink='assets/img/gallery/gallery-7.webp'  descbody='ATMS & AES exhibition set up (2024).'/>

            </div>
        </div>
    </div>
    <!-- Gallery End -->



</x-layout>
