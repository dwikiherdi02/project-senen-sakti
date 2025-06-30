<?php

use function Livewire\Volt\{layout, title};

layout('layouts.app');

title(__('Landing Page'));

?>

<div>
    <div class="senen-sakti-content">
        <h1 class="fm fm-chewy text-uppercase senen-sakti-title">
            SENEN
            <br />
            SAKTI
        </h1>
    </div>

    <div class="signin-content">
        {{-- <a href="/" class="btn btn-scroll-casual btn-scroll-xl btn-scroll-animate fm fm-chewy fs-3xl text-uppercase" data-animate="bounce" data-animate-trigger="load" data-animate-infinite="false">
            Masuk
        </a> --}}
        <a href="/" class="btn btn-scroll-casual btn-scroll-xl btn-scroll-animate fm fm-chewy fs-3xl text-uppercase">
            Masuk
        </a>
    </div>
</div>
