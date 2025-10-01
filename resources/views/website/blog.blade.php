<x-layout>

    <!-- Page Header Start -->
    <x-page-header title="Blog" />
    <!-- Page Header End -->

    <!-- Fact Start -->
   <x-facts />
    <!-- Fact End -->

     <!-- Blog Start -->
     <div class="container-fluid blog py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Blog</h5>
                <h1>Latest Blog & News</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <x-blog-item
                heading='The Evolution of ATMS: What to Expect in 2025'
                author=''
                desc='As technology advances, Advanced Tracking and Monitoring Systems (ATMS) is evolving across industries like logistics, security, and healthcare. Innovations in AI, IoT, and real-time analytics are enhancing visibility, security, and efficiency for businesses.'
                imglink='assets/img/blog/What to Expect in 2025.webp'
                bloglink='https://substack.com/home/post/p-158760906'
                date='January, 2025' />

                <x-blog-item
                heading='What it means to be WIALON Silver Partner'
                author=''
                desc='We are thrilled to announce that ATMS is now a WIALON Silver Partner! This milestone underscores our dedication to delivering top-tier telematics and fleet management solutions in Tanzania. But what does this recognition mean to us and our customers?'
                imglink='assets/img/blog/blog-silver-certificate.webp'
                bloglink='https://atmstanzania.substack.com/p/what-it-means-to-be-wialon-silver?r=4tmoy3'
                date='December, 2024' />

                <x-blog-item
                    heading='A Visit by Wialon Business Expert'
                    author=''
                    desc='This November, we were honored to host a remarkable visit from a business expert representing Wialon. ATMS has been proud to partner with Wialon since our establishment, and this visit was a milestone that highlighted our strong and growing collaboration.'
                    imglink='assets/img/blog/blog-4.webp'
                    bloglink='https://open.substack.com/pub/atmstanzania/p/a-visit-by-wialon-business-expert?r=4tmoy3&utm_campaign=post&utm_medium=web&showWelcomeOnShare=true'
                    date='November, 2024' />

            </div>
        </div>
    </div>
    <!-- Blog End -->





</x-layout>
