<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="py-12">
            <section class="bg-white dark:bg-gray-900">
                <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-5xl text-black dark:text-white">SMK INFORMATIKA PESAT ITXPRO</h1>
                        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                            SMK Informatika Pesat IT XPro hadir untuk
                            mendukung siswa/i memiliki kompetensi masa
                            depan. Diperkuat dengan karakter akhlak mulia
                            untuk menjadi seorang IT Expert dan Professional.
                            SMK Informatika Pesat IT XPro menghadirkan
                            rancangan kurikulum yang terintegrasi dengan
                            kebutuhan industri dimana kreasi lebih banyak
                            dibandingkan teori. Sehingga siswa dapat memiliki
                            portofolio karya, tersertifikasi, diakui oleh dunia
                            industri, memiliki semangat entrepreneur dan
                            melanjutkan studi yang linier.
                        </p>
                    </div>
                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                        <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/108/2023/09/04/02-Sekolah-781806543.jpg" alt="mockup">
                    </div>                
                </div>
                <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
                    <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">3 Program Keahlian</h2>
                    </div> 
                    <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                        <div>
                            <h3 class="mb-2 text-xl font-bold text-black dark:text-white">Rekayasa Perangkat Lunak</h3>
                            <p class="text-gray-500 dark:text-gray-400">
                                Berfokus pada kompetensi siswa di bidang : Website, Aplikasi berbasis Dekstop, dan Android. Lulusan dapat bekerja sebagai Developer Application.
                            </p>
                        </div>
                        <div>
                            <h3 class="mb-2 text-xl font-bold text-black dark:text-white">Design Komunikasi Visual</h3>
                            <p class="text-gray-500 dark:text-gray-400">
                                Berfokus pada kompetensi di bidang Desain, Fotografi, Sinematografi, 3D Modelling, dan Visual Effect, Lulusan dapat bekerja sebagai Designer, Sinematografer, 3D Artist dan Visual Efect
                            </p>
                        </div>
                        <div>
                            <h3 class="mb-2 text-xl font-bold text-black dark:text-white">Teknik Komputer Jaringan </h3>
                            <p class="text-gray-500 dark:text-gray-400">
                                Berfokus pada kompetensi di bidang Engineering, dan Network Infrastructur. Lulusan dapat bekerja sebagai IT Support, Server Administrator, Cyber Security dan Network Engineer.
                            </p>
                        </div>  
                </div>
            </section>
    </div>
</x-app-layout>
