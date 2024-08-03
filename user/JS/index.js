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

//   Cursor JS code
let videoSection = document.querySelector('#video-section');
let cursor = document.querySelector('#cursor');

let videoSectionRect = videoSection.getBoundingClientRect()
let cursorRect = cursor.getBoundingClientRect()
// videoSection.addEventListener("mousemove", (dts) => {
//     // console.log(dts)
//     let x = dts.clientX
//     let y = dts.clientY
//     cursor.style.left = x + 'px';
//     cursor.style.top = y + 'px';
// })

videoSection.addEventListener("mousemove", moveCursor)

function moveCursor(dts) {
    let x = dts.clientX - videoSectionRect.left - cursorRect.width / 2
    let y = dts.clientY - videoSectionRect.top - cursorRect.height / 2
    cursor.style.left = x + 'px';
    cursor.style.top = y + 'px';
}

videoSection.addEventListener("mouseenter", () => {
    cursor.style.opacity = '1';
    cursor.style.scale = '1.5';
})

videoSection.addEventListener("mouseleave", () => {
    cursor.style.opacity = '0';
    cursor.style.scale = '0';
})

