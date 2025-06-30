<?php

use function Livewire\Volt\{layout, title};

layout('layouts.app');

title(__('Daftar Menu'));

?>

<div>
    <div class="app-content">
        <div class="row">
            <div class="col-12 card card-app card-blur">
                <div class="card-body s-scrollbar">
                    <div class="row py-md-5">
                        <div class="col-12 col-sm-6 col-lg-4 my-md-5">
                            <a href="#"
                                class="btn btn-scroll-danger btn-scroll-xl btn-scroll-animate fm fm-chewy text-uppercase"
                                data-animate="bounce" data-animate-trigger="load" data-animate-delay="400ms">
                                Umur 19-59 Tahun
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 my-md-5">
                            <a href="#"
                                class="btn btn-scroll-danger btn-scroll-xl btn-scroll-animate fm fm-chewy text-uppercase"
                                data-animate="bounce" data-animate-trigger="load" data-animate-delay="800ms">
                                Umur 60 Tahun Ke Atas
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 my-md-5">
                            <a href="#"
                                class="btn btn-scroll-danger btn-scroll-xl btn-scroll-animate fm fm-chewy text-uppercase"
                                data-animate="bounce" data-animate-trigger="load" data-animate-delay="1200ms">
                                Pendaftaran Online
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 my-md-5">
                            <a href="#"
                                class="btn btn-scroll-danger btn-scroll-xl btn-scroll-animate fm fm-chewy text-uppercase"
                                data-animate="bounce" data-animate-trigger="load" data-animate-delay="1600ms">
                                Konsultasi Psikologi
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 my-md-5">
                            <a href="#"
                                class="btn btn-scroll-danger btn-scroll-xl btn-scroll-animate fm fm-chewy text-uppercase"
                                data-animate="bounce" data-animate-trigger="load" data-animate-delay="2000ms">
                                Game Kognitif
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 my-md-5">
                            <a href="#"
                                class="btn btn-scroll-danger btn-scroll-xl btn-scroll-animate fm fm-chewy text-uppercase"
                                data-animate="bounce" data-animate-trigger="load" data-animate-delay="2400ms">
                                Video Edukasi
                            </a>
                        </div>
                    </div>
                    {{-- <p class="fm fm-fredoka fs-md">
                    </p> --}}
                </div>
            </div>
        </div>
    </div>
</div>