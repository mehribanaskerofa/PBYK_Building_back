// // filter
// price filter

var selected_filter_room=0,selected_filter_area=0;
var menzil = [
    [ 60.5,60.9,  61.1, 70.2],//1
    [91.1, 91.4, 91.7,  94.4],//2
    [145.5],//3
    [194.9],//4
    [336.5, 386.5]//pento
];
var selected_filter_room=0,selected_filter_area=0;
var building_rooms=[1,2,3,4,6]



function filterCardsByRoomCount(roomCount) {
  var cards = document.getElementsByClassName("card");

  for (var i = 0; i < cards.length; i++) {
    var card = cards[i];
    var cardRoomCount = parseInt(card.getAttribute("data-rooms"));
    if (cardRoomCount === roomCount) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  }
    selected_filter_room=roomCount;
    console.log(selected_filter_room);

    menzil_tipler(selected_filter_room);
}

// const minPriceSlider = document.getElementById('min-price');
// const maxPriceSlider = document.getElementById('max-price');
// const minAreaSlider = document.getElementById('min-area');
// const maxAreaSlider = document.getElementById('max-area');
// const minPriceLabel = document.getElementById('min-price-label');
// const maxPriceLabel = document.getElementById('max-price-label');
// const minAreaLabel = document.getElementById('min-area-label');
// const maxAreaLabel = document.getElementById('max-area-label');
const roomFilters = document.getElementsByClassName('room-filter');
const cardList = document.getElementById('card-list');
const cards = document.getElementsByClassName('card');

const area_select = document.getElementsByClassName('filter-dropdown-area-select')[0];

function filterCards() {
    // const minPrice = parseInt(minPriceSlider.value);
    // const maxPrice = parseInt(maxPriceSlider.value);
    // const minArea = parseInt(minAreaSlider.value);
    // const maxArea = parseInt(maxAreaSlider.value);
    const selectedRooms = [];

    // for (let i = 0; i < roomFilters.length; i++) {
    //   if (roomFilters[i].classList.contains('selected')) {
    //
    //   }
    // }

    // minPriceLabel.textContent =  minPrice;
    // maxPriceLabel.textContent =  maxPrice;
    // minAreaLabel.textContent = minArea ;
    // maxAreaLabel.textContent = maxArea ;


        for (let i = 0; i < cards.length; i++) {
            const card = cards[i];
            const cardPrice = parseInt(card.getAttribute('data-price'));
            const cardArea = parseFloat(card.getAttribute('data-area'));
            const cardRooms = parseInt(card.getAttribute('data-rooms'));

            console.log(cardArea,selected_filter_area);

            if (
                // cardPrice >= minPrice &&
                // cardPrice <= maxPrice &&
                // cardArea >= minArea &&
                //   menzil.flat().includes(cardArea)
                cardArea === selected_filter_area || selected_filter_area===0
                // && cardArea==selected_filter_area
                // (selectedRooms.length === 0 || selectedRooms.includes(cardRooms))
            ) {
                // console.log(1)
                card.style.display = 'block';
            }
            else {
                console.log(0)
                card.style.display = 'none';
            }
        }

}

function handleRoomFilterClick() {
  this.classList.toggle('selected');
  filterCards();
}

// minPriceSlider.addEventListener('input', filterCards);
// maxPriceSlider.addEventListener('input', filterCards);
// minAreaSlider.addEventListener('input', filterCards);
// maxAreaSlider.addEventListener('input', filterCards);

for (let i = 0; i < roomFilters.length; i++) {
  roomFilters[i].addEventListener('click', handleRoomFilterClick);
}

area_select.addEventListener('change', function (e) {
    e.stopPropagation()
    // console.log(this.value)
    selected_filter_area = parseFloat(this.value)
    console.log(selected_filter_area);
    filterCards();
});

function menzil_tipler(selected_filter_room = 0) {
    area_select.innerHTML = '';
    if(building_rooms.includes(selected_filter_room)) {
        var area_index=building_rooms.indexOf(selected_filter_room);
            for (var i = 0; i < menzil[area_index].length; i++) {
                area_select.innerHTML += `<option value="${menzil[area_index][i]}">${menzil[area_index][i]}</option>`
        }
    }
    else {
        for (var i = 0; i < menzil.length; i++) {
            for (var j = 0; j < menzil[i].length; j++) {
                area_select.innerHTML += `<option value="${menzil[i][j]}">${menzil[i][j]}</option>`
            }
        }
    }
}

menzil_tipler()
// İlk başta filtrelemeyi uygula
filterCards();
