if(document.querySelector("#switcher-canvas")){const e=document.querySelector(".pickr-container-primary"),t=document.querySelector(".theme-container-primary"),n=[["nano",{defaultRepresentation:"RGB",components:{preview:!0,opacity:!1,hue:!0,interaction:{hex:!1,rgba:!0,hsva:!1,input:!0,clear:!1,save:!1}}}]],r=[];let l=null;for(const[o,s]of n){const c=document.createElement("button");c.innerHTML=o,r.push(c),c.addEventListener("click",()=>{const y=document.createElement("p");e.appendChild(y),l&&l.destroyAndRemove();for(const m of r)m.classList[m===c?"add":"remove"]("active");l=new Pickr(Object.assign({el:y,theme:o,default:"#845adf"},s)),l.on("changestop",(m,a)=>{let d=a.getColor().toRGBA();document.querySelector("html").style.setProperty("--primary-rgb",`${Math.floor(d[0])}, ${Math.floor(d[1])}, ${Math.floor(d[2])}`),localStorage.setItem("primaryRGB",`${Math.floor(d[0])}, ${Math.floor(d[1])}, ${Math.floor(d[2])}`),i()})}),t.appendChild(c)}r[0].click()}document.getElementById("year").innerHTML=new Date().getFullYear();(function(){document.querySelector("html"),document.querySelector(".main-content"),document.querySelector("#switcher-canvas")&&(k(),b(),u())})();function b(){let e,t,n,r,l,o,s,c,y,m,a=document.querySelector("html");n=document.querySelector("#switcher-light-theme"),r=document.querySelector("#switcher-dark-theme"),e=document.querySelector("#switcher-ltr"),t=document.querySelector("#switcher-rtl"),l=document.querySelector("#switcher-primary"),o=document.querySelector("#switcher-primary1"),s=document.querySelector("#switcher-primary2"),c=document.querySelector("#switcher-primary3"),y=document.querySelector("#switcher-primary4"),m=document.querySelector("#reset-all"),n.addEventListener("click",()=>{f(),localStorage.setItem("ynexlandingHeader","light"),localStorage.setItem("ynexlandingMenu","light")}),r.addEventListener("click",()=>{w(),localStorage.setItem("ynexlandingMenu","dark"),localStorage.setItem("ynexlandingHeader","dark")}),l.addEventListener("click",()=>{localStorage.setItem("primaryRGB","58, 88, 146"),a.style.setProperty("--primary-rgb","58, 88, 146"),i()}),o.addEventListener("click",()=>{localStorage.setItem("primaryRGB","92, 144, 163"),a.style.setProperty("--primary-rgb","92, 144, 163"),i()}),s.addEventListener("click",()=>{localStorage.setItem("primaryRGB","161, 90, 223"),a.style.setProperty("--primary-rgb","161, 90, 223"),i()}),c.addEventListener("click",()=>{localStorage.setItem("primaryRGB","78, 172, 76"),a.style.setProperty("--primary-rgb","78, 172, 76"),i()}),y.addEventListener("click",()=>{localStorage.setItem("primaryRGB","223, 90, 90"),a.style.setProperty("--primary-rgb","223, 90, 90"),i()}),t.addEventListener("click",()=>{localStorage.setItem("ynexlandingrtl",!0),localStorage.removeItem("ynexlandingltr"),S()}),e.addEventListener("click",()=>{localStorage.setItem("ynexlandingltr",!0),localStorage.removeItem("ynexlandingrtl"),g()}),m.addEventListener("click",()=>{a.style.removeProperty("--primary-rgb"),a.removeAttribute("dir","rtl"),a.setAttribute("dir","ltr"),q()})}function g(){var t;let e=document.querySelector("html");(t=document.querySelector("#style"))==null||t.setAttribute("href","http://127.0.0.1:8000/build/assets/libs/bootstrap/css/bootstrap.min.css"),e.setAttribute("dir","ltr"),document.querySelector("#switcher-ltr").checked=!0,u()}function S(){var t;document.querySelector("html").setAttribute("dir","rtl"),(t=document.querySelector("#style"))==null||t.setAttribute("href","http://127.0.0.1:8000/build/assets/libs/bootstrap/css/bootstrap.rtl.min.css"),u()}localStorage.ynexlandingrtl&&S();function f(){let e=document.querySelector("html");e.setAttribute("data-theme-mode","light"),document.querySelector("#switcher-light-theme").checked=!0,i(),localStorage.removeItem("ynexlandingdarktheme"),u(),e.style.removeProperty("--primary-rgb")}function w(){let e=document.querySelector("html");e.setAttribute("data-theme-mode","dark"),i(),localStorage.setItem("ynexlandingdarktheme",!0),localStorage.removeItem("ynexlandinglighttheme"),u(),e.style.removeProperty("--primary-rgb")}function q(){document.querySelector("html"),u(),localStorage.clear(),i(),g(),f()}function u(){localStorage.getItem("ynexlandingdarktheme")&&(document.querySelector("#switcher-dark-theme").checked=!0),localStorage.getItem("ynexlandingrtl")&&(document.querySelector("#switcher-rtl").checked=!0)}function i(){getComputedStyle(document.documentElement).getPropertyValue("--primary-rgb").trim()}i();function k(){if(localStorage.primaryRGB&&(document.querySelector(".theme-container-primary")&&(document.querySelector(".theme-container-primary").value=localStorage.primaryRGB),document.querySelector("html").style.setProperty("--primary-rgb",localStorage.primaryRGB)),localStorage.ynexlandingdarktheme&&document.querySelector("html").setAttribute("data-theme-mode","dark"),localStorage.ynexlandingrtl&&document.querySelector("html").setAttribute("dir","rtl"),localStorage.ynexlayout){let e=document.querySelector("html");localStorage.getItem("ynexlayout"),e.setAttribute("data-nav-layout","horizontal")}}window.addEventListener("scroll",v);function v(){for(var e=document.querySelectorAll(".reveal"),t=0;t<e.length;t++){var n=window.innerHeight,r=e[t].getBoundingClientRect().top,l=150;r<n-l?e[t].classList.add("active"):e[t].classList.remove("active")}}v();const B=document.querySelectorAll(".side-menu__item");B.forEach(e=>{e!="javascript:void(0);"&&e!=="#"&&e.addEventListener("click",t=>{var n;t.preventDefault(),(n=document.querySelector(e.getAttribute("href")))==null||n.scrollIntoView({behavior:"smooth",offsetTop:1-60})})});function E(e){const t=document.querySelectorAll(".side-menu__item"),n=window.pageYOffset||document.documentElement.scrollTop||document.body.scrollTop;t.forEach(r=>{var c;const l=r.getAttribute("href");let o;l!="javascript:void(0);"&&l!=="#"&&(o=document.querySelector(l));const s=n+73;(o==null?void 0:o.offsetTop)<=s&&(o==null?void 0:o.offsetTop)+o.offsetHeight>s?(r.parentElement.parentElement.classList.contains("child1")&&r.parentElement.parentElement.parentElement.children[0].classList.add("active"),r.classList.add("active"),(c=r.closest(".child1"))!=null&&c.previousElementSibling&&r.closest(".child1").previousElementSibling.classList.add("active")):r.classList.remove("active")})}window.document.addEventListener("scroll",E);new Swiper(".pagination-dynamic",{pagination:{el:".swiper-pagination",dynamicBullets:!0,clickable:!0},slidesPerView:1,loop:!0,autoplay:{delay:3e3,disableOnInteraction:!1},breakpoints:{768:{slidesPerView:2,spaceBetween:40},1024:{slidesPerView:2,spaceBetween:50},1400:{slidesPerView:3,spaceBetween:50}}});const h=document.querySelector(".scrollToTop"),p=document.documentElement;window.onscroll=()=>{p.scrollHeight-p.clientHeight,window.scrollY>100?h.style.display="flex":h.style.display="none"};h.onclick=()=>{window.scrollTo(0,0)};
