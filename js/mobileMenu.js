const btnMobile = document.getElementById('btn-mobile');
//Toggle Menu Function
function toggleMenu(){
    const nav = document.getElementById('mobile-menu');
    nav.classList.toggle('active');
    
    const html = document.getElementsByTagName(html);
    html.classList.toggle('overflow') 
    
};

btnMobile.addEventListener('click',  toggleMenu);