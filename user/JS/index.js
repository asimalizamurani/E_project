document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.card');
  
    const handleScroll = () => {
      const triggerBottom = window.innerHeight / 5 * 4;
  
      cards.forEach(card => {
        const cardTop = card.getBoundingClientRect().top;
  
        if (cardTop < triggerBottom) {
          card.classList.add('show');
        } else {
          card.classList.remove('show');
        }
      });
    };
  
    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Initial check on page load
  });

//   cursor 
let videoSection = document.querySelector('#video-section');
let cursor = document.querySelector('#cursor');

videoSection.addEventListener("mousemove", (dts) => {
    // console.log(dts)
    cursor.style.left = dts.x += 'px';
    cursor.style.top = dts.y += 'px';
})

videoSection.addEventListener("mouseenter", () => {
    // console.log(dts)
    cursor.style.opacity = '1';
    cursor.style.scale = '1.5';
})

videoSection.addEventListener("mouseleave", () => {
    // console.log(dts)
    cursor.style.opacity = '0';
    cursor.style.scale = '0';
})