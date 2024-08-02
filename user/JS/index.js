document.addEventListener('DOMContentLoaded', () => {
    // alert("hello");
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