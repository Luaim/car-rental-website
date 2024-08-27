/*this section will control the load more button*/
const cardsPerPage = 12; 
let visibleCards = 0;

function loadMoreCards() {
  const carGrid = document.querySelector('.car-grid');
  const cards = carGrid.children;

  visibleCards += cardsPerPage;

  for (let i = 0; i < cards.length; i++) {
    if (i < visibleCards) {
      cards[i].style.display = 'block'; 
    }
  }

  if (visibleCards >= cards.length) {
    document.getElementById('loadMore').style.display = 'none'; 
  }
}

loadMoreCards();