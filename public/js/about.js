const navSlide = () => {
    const burger1 = document.querySelector('.logo2');
    const box = document.querySelector('.box-2');

    burger1.addEventListener('click', () =>{
        box.classList.toggle('nav-active1');
    });
}

navSlide();