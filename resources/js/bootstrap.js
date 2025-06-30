import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Make Popper available globally for Bootstrap
import { createPopper } from '@popperjs/core';
window.createPopper = createPopper;

import 'animate.css';

// Fungsi untuk menambahkan animasi
function addAnimation(element, animationName, callback, infinite = false) {
    const node = typeof element === 'string' ? document.querySelector(element) : element;
    if (!node) return;
    
    node.classList.add('animate__animated', `animate__${animationName}`);
    
    if (infinite) {
        node.classList.add('animate__infinite');
    }
    
    if (!infinite) {
        node.addEventListener('animationend', () => {
            node.classList.remove('animate__animated', `animate__${animationName}`);
            if (callback) callback();
        }, { once: true });
    }
}

// Fungsi untuk menghentikan animasi infinite
function stopInfiniteAnimation(element) {
    const node = typeof element === 'string' ? document.querySelector(element) : element;
    if (!node) return;
    
    node.classList.remove('animate__infinite');
    setTimeout(() => {
        node.classList.remove('animate__animated');
        node.className = node.className.replace(/animate__\w+/g, '').trim();
    }, 100);
}

// Fungsi untuk menginisialisasi animasi berdasarkan data attributes
function initDataAnimations() {
    const animatedElements = document.querySelectorAll('[data-animate]');
    
    animatedElements.forEach(element => {
        const animationType = element.dataset.animate;
        const trigger = element.dataset.animateTrigger || 'click';
        const delay = parseInt(element.dataset.animateDelay) || 0;
        const infinite = element.dataset.animateInfinite === 'true';
        
        // Handler untuk semua jenis event
        const handleAnimation = () => {
            setTimeout(() => addAnimation(element, animationType, null, infinite), delay);
        };
        
        // Handler untuk menghentikan animasi infinite saat event berakhir
        const handleStopAnimation = () => {
            if (infinite) {
                stopInfiniteAnimation(element);
            }
        };
        
        // Daftar event yang didukung
        const supportedEvents = [
            'click', 'hover', 'mouseenter', 'mouseleave', 'mousedown', 'mouseup',
            'focus', 'blur', 'keydown', 'keyup', 'scroll', 'resize', 'load',
            'dblclick', 'contextmenu', 'touchstart', 'touchend', 'touchmove'
        ];
        
        // Pisahkan multiple events dengan koma atau spasi
        const events = trigger.split(/[,\s]+/).filter(event => event.trim());
        
        events.forEach(eventType => {
            eventType = eventType.trim().toLowerCase();
            
            if (eventType === 'hover') {
                // Hover adalah alias untuk mouseenter
                element.addEventListener('mouseenter', handleAnimation);
                if (infinite) {
                    element.addEventListener('mouseleave', handleStopAnimation);
                }
            } else if (eventType === 'mouseenter') {
                element.addEventListener('mouseenter', handleAnimation);
                if (infinite) {
                    element.addEventListener('mouseleave', handleStopAnimation);
                }
            } else if (eventType === 'focus') {
                element.addEventListener('focus', handleAnimation);
                if (infinite) {
                    element.addEventListener('blur', handleStopAnimation);
                }
            } else if (eventType === 'mousedown') {
                element.addEventListener('mousedown', handleAnimation);
                if (infinite) {
                    element.addEventListener('mouseup', handleStopAnimation);
                }
            } else if (eventType === 'touchstart') {
                element.addEventListener('touchstart', handleAnimation);
                if (infinite) {
                    element.addEventListener('touchend', handleStopAnimation);
                }
            } else if (eventType === 'load') {
                // Load event langsung dijalankan
                handleAnimation();
            } else if (supportedEvents.includes(eventType)) {
                element.addEventListener(eventType, handleAnimation);
            }
        });
    });
}

// Inisialisasi saat DOM ready
document.addEventListener('DOMContentLoaded', function() {
    initDataAnimations();
});


