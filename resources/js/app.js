import './bootstrap';

import 'bootstrap/scss/bootstrap.scss';
import * as bootstrap from 'bootstrap';

import '../css/app.css';

const btnToggle = document.querySelector('.toggle-btn');
btnToggle.addEventListener('click', function() {
    document.getElementById('sidebar').classList.toggle('active');
});