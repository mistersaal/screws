import $ from 'jquery';

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

import "./general";

import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faFacebook } from '@fortawesome/free-brands-svg-icons/faFacebook';
import { faInstagram } from "@fortawesome/free-brands-svg-icons/faInstagram";
import { faVk } from "@fortawesome/free-brands-svg-icons/faVk"
import { faChevronDown } from "@fortawesome/free-solid-svg-icons/faChevronDown";

library.add(faFacebook, faInstagram, faVk);
library.add(faChevronDown);
dom.watch();
