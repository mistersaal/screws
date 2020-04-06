import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faFacebook } from '@fortawesome/free-brands-svg-icons/faFacebook';
import { faInstagram } from "@fortawesome/free-brands-svg-icons/faInstagram";
import { faVk } from "@fortawesome/free-brands-svg-icons/faVk";
import { faChevronDown } from "@fortawesome/free-solid-svg-icons/faChevronDown";
import { faCartPlus } from "@fortawesome/free-solid-svg-icons/faCartPlus";
import { faCreditCard } from "@fortawesome/free-solid-svg-icons/faCreditCard";
import { faQuestionCircle } from "@fortawesome/free-regular-svg-icons/faQuestionCircle";

library.add(faFacebook, faInstagram, faVk);
library.add(faChevronDown);
library.add(faCartPlus, faCreditCard, faQuestionCircle);
dom.watch();
