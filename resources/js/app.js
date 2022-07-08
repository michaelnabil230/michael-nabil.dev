import "../css/markdown.css";
import "highlight.js/styles/atom-one-dark.css";

import hljs from 'highlight.js';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Syntax highlight code blocks.
window.highlightCode = (element) => {
    element.querySelectorAll('pre code').forEach((block) => {
        hljs.highlightElement(block);
    });
};