<x-layout :$menu :$submenu :$categories :$appname>
    <div style="margin-top: 100px"> <!-- Tambahkan margin untuk menghindari tumpang tindih dengan navbar -->
        <x-carousel :sliders="$sliders" />

        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="display-6">Our Product</h2>
                        <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</div>
                        <x-category :categories="$categories" />
                    </div>
                </div>
                <x-products :$products />
            </div>
        </section>
    </div>
</x-layout>