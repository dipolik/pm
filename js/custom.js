function ready(){document.querySelectorAll(".nav-link").forEach((e=>{e.classList.contains("dropdown-toggle")||e.addEventListener("click",(function(){let e=document.getElementsByClassName("navbar-toggler")[0],t=document.getElementById("navbarSupportedContent");e.classList.add("collapsed"),e.setAttribute("aria-expanded","false"),t.classList.remove("show")}))}));let e=document.querySelectorAll(".menu-item");if(e){let t=0;e.forEach((e=>{let n="binct-phone-number-";if(e.classList.toString().includes(n)){t+=1;let s=`${n}${t}`;e.classList.remove(s),e.children[0].classList.add(`${s}`)}}))}setTimeout((function(){let e=document.querySelectorAll(".bingc-phone-button-tooltip-bottom-left")[0];e.classList.add("bingc-phone-button-tooltip-bottom-right"),e.classList.remove("bingc-phone-button-tooltip-bottom-left")}),3e3);const t=document.querySelector(".pll-parent-menu-item").children[0].children[0],n=document.querySelector(".lang-item-uk"),s=document.querySelector(".lang-item-ru");t.innerHTML="UA",n.children[0].children[0].innerHTML="UA",s.children[0].children[0].innerHTML="RU",window.location.href.includes("/ru/")&&(t.innerHTML="RU");let o=document.getElementsByClassName("js-btn-discount-banner")[0],i=document.getElementsByClassName("js-banner-form")[0],l=document.getElementsByClassName("js-banner-form-extended")[0],d=document.getElementById("bannerSection");o&&o.addEventListener("click",(()=>{i.classList.remove("d-md-inline-flex","flex-wrap"),i.classList.add("d-none"),l.classList.remove("d-none"),l.classList.add("d-md-inline-flex","flex-wrap","justify-content-md-between","d-block"),d.classList.add("discount-form-opened")}));let a=document.getElementsByClassName("js-btn-discount-sidebar")[0],r=document.getElementsByClassName("js-sidebar-form")[0],c=document.getElementsByClassName("js-sidebar-form-extended")[0];a&&a.addEventListener("click",(()=>{r.classList.remove("d-md-inline-flex","flex-wrap"),r.classList.add("d-none"),c.classList.remove("d-none"),c.classList.add("d-md-inline-flex","flex-wrap","justify-content-md-between","d-block")}));if(window.location.pathname.toString().includes("/ru")){document.getElementsByTagName("body")[0].classList.add("ru")}let m=(new Date).toISOString().slice(0,10),u=document.getElementById("bannerDateExt");u&&u.setAttribute("min",m);var f,L=document.querySelectorAll("img.lazy");function g(){f&&clearTimeout(f),f=setTimeout((function(){var e=window.pageYOffset;L.forEach((function(t){t.offsetTop<window.innerHeight+e&&(t.src=t.dataset.src,t.classList.remove("lazy"))})),0==L.length&&(document.removeEventListener("scroll",g),window.removeEventListener("resize",g),window.removeEventListener("orientationChange",g))}),20)}document.addEventListener("scroll",g),window.addEventListener("resize",g),window.addEventListener("orientationChange",g)}document.addEventListener("DOMContentLoaded",ready);